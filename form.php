<?php 
session_start(); 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

//TEST RECUP DATA FORM

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$country=$_POST['country'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$subject=$_POST['subject'];




// //INITIALISATION PHP MAILER
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

//ON VERIFIE SI LES CHAMPS SONT REMPLIS

if(isset($_POST['name']) && !empty($_POST['name'])
&& isset($_POST['lastname']) && !empty($_POST['lastname'])
&& isset($_POST['country']) && !empty($_POST['country'])
&& isset($_POST['subject'])
&& isset($_POST['email']) && !empty($_POST['email'])
&& isset($_POST['gender'])
&& isset($_POST['message']) && !empty($_POST['message'])) {

// ON NETTOIE LES DATA ENTREES PAR L'UTILISATEUR

    $name= strip_tags($_POST['name']);
    $lastname= strip_tags($_POST['lastname']);
    $country=strip_tags($_POST['country']);
    $message=strip_tags($_POST['message']);
    $email= strip_tags($_POST['email']);


    
    echo '<pre>';
    var_dump($_POST);
    die();

    // // EXECUTE FUNCTION -> RECUPERER DATA FORMULAIRE
    //                     -> SEND TO EMAIL


require 'vendor/autoload.php';


   
    try{   
    $mail = new PHPMailer();
    $mail->isSMTP(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = 2525;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    
    $mail->Username = '3c3bcb0059fda7';
    $mail->Password = '80ad540886ee20';
    
    $mail->setFrom($email);
    $mail->addAddress('amoryne.jolimont@gmail.com', 'Amo Joli');
    //CONTENT 
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;
    echo 'mail send';
    $mail->send();
    echo 'mail send';
  }  catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}





}else{

 if(empty($_POST["name"])){
    $_SESSION['empty_name'] = "Please enter you name in the blanks field !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php');
 }if(empty($_POST["lastname"])){
    $_SESSION['empty_lastname'] = "Please enter you lastname in the blanks field !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
        
}if(empty($_POST["email"])){
    $_SESSION['empty_email'] = "Please enter you email in the blanks field !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
}if(empty($_POST["country"])){
    $_SESSION['empty_country'] = "Please enter you country in the blanks field !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
}if(empty($_POST["message"])){
    $_SESSION['empty_message'] = "Please enter you message in the blanks field !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
}if(empty($_POST["gender"])){
    $_SESSION['empty_gender'] = "Please pick you gender !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
}if(empty($_POST["subject"])){
    $_SESSION['empty_subject'] = "Please select your subject message in the text area !";

    //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
        header('Location: index.php'); 
}
}


// else if(empty($_POST['name'])
// && empty($_POST['lastname'])
// && empty($_POST['country'])
// && empty($_POST['subject'])
// && empty($_POST['email'])
// && empty($_POST['gender'])
// && empty($_POST['message'])) {
//     $_SESSION['empty_all'] = "Please fill all the blanck area !";

//     //NE MARCHE PAS SI MESSAGE OU ECHO AVANT
//         header('Location: index.php'); }

?>
