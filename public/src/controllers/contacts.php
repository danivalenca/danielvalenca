<?php

require_once __DIR__ . '/../includes/config.php';

// Get action
$action = $_GET['action'] ?? '';

// Allowed actions
$allowed_actions = ['create', 'update', 'delete'];

if (!in_array($action, $allowed_actions)) {
    header("Location: ../../index.php?error=invalid-action");
    exit;
}

// Actions
if ($action == 'create') {

    // Ensure it's a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../../index.php?error=request-method");
        exit;
    }

    // reCAPTCHA validation
    $recaptcha_secret = "6LcIxcsrAAAAAK2arqQOInhmPUw15livp31hlE_h";
    $token = $_POST['g-recaptcha-response'] ?? '';

    if (empty($token)) {
        header("Location: ../../index.php?error=recaptcha-missing");
        exit;
    }

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$token}");
    $captcha_success = json_decode($verify);

    if (!$captcha_success->success || $captcha_success->score < 0.5) {
        header("Location: ../../index.php?error=recaptcha-failed");
        exit;
    }

    // Set parameters
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Prepare statement
    $stmt = $conn->prepare("
        INSERT INTO contacts (
            name,
            email,
            phone,
            message
        ) VALUES (?, ?, ?, ?)
    ");

    // Validate query
    if (!$stmt) {
        header("Location: ../../index.php?error=prepare-failed");
        exit;
    }

    // Bind parameters
    $stmt->bind_param(
        'ssss',
        $name,
        $email,
        $phone,
        $message
    );

    // Execute statement
    if (!$stmt->execute()) {
        header("Location: ../../index.php?error=create-failed");
        exit;
    }

    // Send email
    $to = "danielvalenca@gmail.com";
    $subject = "danielvalenca.com - New Contact Form Submission";
    $body = "
        You received a new contact form submission:\n\n
        Name: {$name}\n
        Email: {$email}\n
        Phone: {$phone}\n
        Message:\n{$message}
    ";
    send_email($to, $subject, $body, "noreply@danielvalenca.com", $email);

    // Redirect success
    header("Location: ../../index.php?&success=contact-created");
    exit;

}

?>