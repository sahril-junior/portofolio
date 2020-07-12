$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'apps.sahril@gmail.com';                 // SMTP username
$mail->Password = 'sahril0210';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('web.sahril@gmail.com', 'Mailer');
$mail->addAddress('sakib.cse11.cuet@gmail.com', 'Sakib Rahman');     // Add a recipient
               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->from_name = $_POST['name'];
$mail->from_email = $_POST['email'];
$mail->subject = $_POST['subject'];

$mail->add_message( $_POST['name'], 'From');
$mail->dd_message( $_POST['email'], 'Email');
$mail->add_message( $_POST['message'], 'Message', 10);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
