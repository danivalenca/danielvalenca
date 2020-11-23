<?php

# Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['recaptcha_response'])) {

    # Build POST request
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcxduYZAAAAAKIe3iaLv15rRTGd4gcwRtKYxdZK';
    $recaptcha_response = $_POST['recaptcha_response'];

    # Make and decode POST request
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    # Take action based on the score returned
    if ($recaptcha->score >= 0.5) {

        # Create connection
        include 'connection.php';

        # Set POST parameter
        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $email = $_POST['email'];
        $message = mysqli_real_escape_string($connection,$_POST['message']);
        $location = mysqli_real_escape_string($connection,$_POST['location']);

        # Query database
        mysqli_query($connection,"INSERT INTO contact (id, registration_date, name, email, message, location) VALUES (null, now(), '$name', '$email', '$message', '$location')");

        ##############
        # Send email #
        ##############

        # Set NEW parameters
        $email_to = 'danielvalenca@gmail.com';
        $subject = "Portfolio - Contact message";

        # Set HEADERS parameters
        $headers =  "From: {$name} <{$email}>\r\n";
        $headers .= "Reply-To: {$name} <{$email}>\r\n";
        $headers .= "Return-Path: {$name} <{$email}>\r\n";
        $headers .= "Organization: RCIIS\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        # Set the body
        $body = "
            <html>
                <head>
                    <title>Portfolio - Contact message</title>
                </head>
                <body style='background: #FFF; font-family: Trebuchet MS, Helvetica, sans-serif;'>
                    <p style='color: #333; font-size: 15px; line-height: 1.6; text-align: left;'>$message</p>
                </body>
            </html>
        ";

        # Send email
        mail($email_to, $subject, $body, $headers, '-f'.$email);

        #####################
        # End of Send email #
        #####################

        # Return JSON
        echo json_encode(true);
        
    } else {

        # Return JSON
        echo json_encode(false);

    }

} else {

    # Return JSON
    echo json_encode(false);

}

?>