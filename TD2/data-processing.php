<?php
require 'utils.inc.php';
require 'main.php'?>

<?php
start_page("TD2");
?>



<?php
$action = $_POST('action');
$email = $_POST('email');
$password = $_POST('password');

 if ($action == 'mailer')
 {
    $message = 'Vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email .PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EPL . $password;
 }
 else
 {
     echo '<br/><strong>Bouton non géré !</strong><br/>>';
 }
?>


<?php
end_page("data-processing");
?>
