<?php

# Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
                <div style='border-bottom: 1px solid #F2F2F2; margin: 0 auto; padding: 40px 20px; text-align: center; width: 400px;'>
                    <a href='https://rciis.ca/' tarPOST='_blank'>
                        <img src='https://rciis.ca/img/header_logo_simple.png' alt='Company logo' style='height: 40px;'>
                    </a>
                </div>
                <div style='border-bottom: 1px solid #F2F2F2; margin: 0 auto; padding: 40px 20px; text-align: center; width: 400px;'>
                    <p style='color: #333; font-size: 15px; line-height: 1.6; text-align: left; margin-bottom: 0;'>$message</p>
                </div>
            </body>
        </html>
    ";

    # Send email
    #mail($email_to, $subject, $body, $headers, '-f'.$email_from);

    #####################
    # End of Send email #
    #####################

    # Return JSON
    echo json_encode(true);

} else {

    # Return JSON
    echo json_encode(false);

}

?>