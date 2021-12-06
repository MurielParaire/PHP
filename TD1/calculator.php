<?php
function start_page($title)
{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<?php
}

start_page("Calculator");
?>
<form action="calcul.php" method="get">
    <input type="text" name="op1" placeholder="operande 1"/>
    <input type="text" name="op2" placeholder="operande 2"/> <br/>

    <!--<input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/> -->

    <?php
    /*$operateurs = '*+-/';
    for ($cpt = 0; $cpt <= 3; ++$cpt)
    {
        echo '<input ';
        if ($cpt == 0)
        {
            echo 'checked="checked"';
        }
        echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
    }*/
    ?>
    <input type="submit" name="action" value="*"/> </br>
    <input type="submit" name="action" value="+"/> </br>
    <input type="submit" name="action" value="-"/> </br>
    <input type="submit" name="action" value="/"/> </br>
    <!--http://sturm.alwaysdata.net/PHP/calcul.php AVANT
    http://sturm.alwaysdata.net/PHP/calcul.php?op1=4&op2=4&action=%2B APRES-->


    <input type="reset" value="Effacer">
    <input type="submit" name="action" value="mailer"/> </br>
</form>


<?php
function end_page()
{
?>
<footer></footer>
</body>
</html>
<?php
}
end_page();
?>
