<?php 

// Current page
// Datetime to text
// Convert email to link
// Convert phone to link

// Current page
function current_page($pages): bool {

    $current = strtolower(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));
    return in_array($current, (array)$pages);
    
}

// Datetime to text
function datetime_to_text($datetime, $include_time = false) {

    if (!$datetime) return '';
    return $include_time ? date('M j, Y, g:i A', strtotime($datetime)) : date('M j, Y', strtotime($datetime));
        
}

// Convert email to link
function email_link(?string $email): string {
    
    if (empty($email)) return '';
    $safe_email = htmlspecialchars($email);
    return '<a href="mailto:' . $safe_email . '" class="link-primary text-decoration-none">' . $safe_email . '</a>';

}

// Convert phone to link
function phone_link(?string $phone): string {

    if (empty($phone)) return '';
    $safe_phone = htmlspecialchars($phone);
    return '<a href="tel:' . $safe_phone . '" class="link-primary text-decoration-none">' . $safe_phone . '</a>';

}

// Send email
function send_email($to, $subject, $body, $from = "noreply@danielvalenca.com", $reply_to = "") {
    
    // Validate recipient email
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) return false;

    // Validate reply-to email (if provided)
    if (!empty($reply_to) && !filter_var($reply_to, FILTER_VALIDATE_EMAIL)) $reply_to = "";

    // Build headers
    $headers = "From: {$from}\r\n";
    if (!empty($reply_to)) $headers .= "Reply-To: {$reply_to}\r\n";

    // Suppress warning if mail() not configured
    return @mail($to, $subject, $body, $headers);
    
}

?>