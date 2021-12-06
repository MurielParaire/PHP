<?php
include 'utils.inc.php' ?>

<?php
start_page('TD2');
?>

<?php
//Correspond à l'adresse IP de celui qui visualise la page
echo getenv('REMOTE_ADDR');
//Correspond à l'adresse IP du serveur
echo getenv('HTTP_Host');
//Correspond au logiciel serveur Web utilisé
echo getenv('SERVER_SOFTWARE');
//Correspond à tous les renseignements sur l'environnement
phpinfo();
?>

