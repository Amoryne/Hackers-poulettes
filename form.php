<?php
//INITIALISATION PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//ON VERIFIE SI LES CHAMPS SONT REMPLIS

if(isset($_POST['name']) && !empty($_POST['name'])
&& isset($_POST['lastname']) && !empty($_POST['lastname'])
&& isset($_POST['country']) && !empty($_POST['country'])
&& isset($_POST['subject'])
&& isset($_POST['email']) && !empty($_POST['email'])
&& isset($_POST['gender'])
&& isset($_POST['message']) && !empty($_POST['message'])) {

//ON NETTOIE LES DATA ENTREES PAR L'UTILISATEUR

    $name= strip_tags($_POST['name']);
    $lastname= strip_tags($_POST['lastname']);
    $country=strip_tags($_POST['country']);
    $message=strip_tags($_POST['message']);
    $email= strip_tags($_POST['email']);

$name=$_POST['name'];

    // // EXECUTE FUNCTION -> RECUPERER DATA FORMULAIRE
    //                     -> SEND TO EMAIL
if(isset($_POST['submit'])){
    echo '<pre>';
    var_dump($_POST['name']);
    die();
}


}
    

?>