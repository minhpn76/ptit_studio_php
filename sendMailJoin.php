<style>
    html {
        opacity: 0;
    }
</style>
<?php
include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/OAuth.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST["join-name"];
$mail = $_POST["join-mail"];
$des = $_POST["join-des"];
$job = "";
foreach($_POST["job"] as $check) {
    $job = $job.$check.',';
}
$url = $_POST["url-page"];
$subject_mail = "[ Join ]_" . $name . "-" . $mail;
$content_mail = "
			Name: $name <br>
			Email : $mail <br>
			Description : $des <br>
			Position : $job <br>
		";


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = "UTF-8";
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'quangvinhptitcdit@gmail.com';                 // SMTP username
    $mail->Password = 'gseqedsthggehdqx';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('quangvinhptitcdit@gmail.com', 'Pit Studio');
    $mail->addAddress('nooveetii@gmail.com', 'Pit Studio');     // Add a recipient
    $mail->AddCC('hello@pitstudio.co');    // Add a recipient
    $mail->addReplyTo('hello@pitstudio.co', 'Pit Studio');
    if (isset($_FILES['cus-file']) &&
        $_FILES['cus-file']['error'] == UPLOAD_ERR_OK) {
        $mail->AddAttachment($_FILES['cus-file']['tmp_name'],
            $_FILES['cus-file']['name']);
    }


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject_mail;
    $mail->Body = $content_mail;
    $mail->send();
    session_start();
    $_SESSION['name_join'] = $name;
    header("Location:".$url);
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
<script type="text/javascript">
    window.location.href = '<?php echo $url ?>';
</script>