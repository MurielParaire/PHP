<?php
include 'utils.inc.php' ?>

<?php
start_page('TD2');
?>

<?php
//Correspond à l'adresse IP de celui qui visualise la page
//echo getenv('REMOTE_ADDR');
//Correspond à l'adresse IP du serveur
//echo getenv('HTTP_Host');
//Correspond au logiciel serveur Web utilisé
//echo getenv('SERVER_SOFTWARE');
//Correspond à tous les renseignements sur l'environnement
//phpinfo();
?>


<!--Création d'un formulaire-->
<form>
<table>
    <tr>
        <td><label for="id">Identifiant</label></td>
        <td><input type="text"/> </br></td>
    </tr>
    <tr>
        <td><label for="sexe"> Civilité (sexe)</label></td>
        <td><label for="homme">Homme</label><input type="radio" id="homme" name="sexe" value="homme"/>
            <label for="femme">Femme</label><input type="radio" id="femme" name="sexe" value="femme"/>
            <label for="autre">Autre</label><input type="radio" id="autre" name="sexe" value="autre"/></br></td>
    </tr>
    <tr>
        <td><label for="email">E-mail</label></td>
        <td><input type="text"/> </br></td>
    </tr>
    <tr>
        <td><label for="motdepasse">Mot de passe</label></td>
        <td><input type="password"/> </br></td>
    </tr>
    <tr>
        <td><label for="verifmotdepasse">Vérification de mot de passe</label></td>
        <td><input type="password"/> </br></td>
    </tr>
    <tr>
        <td><label for="telephone">Téléphone</label></td>
        <td><input type="text"/> </br></td>
    </tr>
    <tr>
        <td><label for="pays">Pays</label></td>
        <td><select name="pays">
                <option>France</option>
                <option>Allemagne</option>
                <option>Angleterre</option>
            </select> </br></td>

    </tr>
    <tr>
        <td><label for="cg">Conditions générales</label></td>
        <td><input type="checkbox"/> </br></td>
    </tr>
    <tr>
        <td><label for="submit">Bouton de soumission</label></td>
        <td><input type="submit"/> </br></td>
    </tr>
</table>
</form>
<?php
end_page();
?>
