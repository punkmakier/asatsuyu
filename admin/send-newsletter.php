<?php

require_once 'FunctionsController.php';
$func = new FunctionsController;
// Get the content from the POST data
$content = $_POST['content'];
$attach = $_FILES['attachmentfile']['name'];
$Subject = $_POST['subject'];

// Remove any HTML tags and trim whitespace
$content = trim($content);


if (!empty($content) || !empty($attach)) {
    if (isset($_FILES['attachmentfile']) && $_FILES['attachmentfile']['error'] === UPLOAD_ERR_OK) {
        // Get the uploaded file's temporary name and destination path
        $tempName = $_FILES['attachmentfile']['tmp_name'];
        $destination = '../attachments/' . $_FILES['attachmentfile']['name']; // Assuming "Attachments" is the folder
        move_uploaded_file($tempName, $destination);
    }

    // Use the function to get the root folder
    $rootFolder = findRootFolder(__DIR__);

    $hasImage = $attach != "" ? "<img src='https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?q=10&h=200'><br>" : "";
    
    // $hasImage = $attach != "" ? "<img src='$rootFolder/attachments/$attach'><br>" : "";

    $bodyMessage = "<div style='text-align: center;'>".$hasImage."<br>".$content."</div>";


    require '../vendors/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'klintoiyas@gmail.com';                 // SMTP username
    $mail->Password = 'nnkvpptsjbfxflmj';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('klintoiyas@gmail.com', 'Mailer');

    $emailList = $func->showEmailNewsLetterLIST();
    foreach ($emailList as $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addAddress($email);
        }
    }
    
    // $mail->addAddress('carbamark@gmail.com', 'Joe User');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $Subject;
    $mail->Body    = $bodyMessage;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent '.$hasImage;
    }



} 


// Define a function to find the root folder
function findRootFolder($dir) {
    while ($dir !== '/' && !file_exists($dir . '/index.php')) {
        $dir = dirname($dir);
    }
    return $dir;
}



?>
