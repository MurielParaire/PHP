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
?>
<?php
    start_page('titre');
?>
<?php
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
?>



<?php
    echo '<strong> Voici mon premier programme PHP </strong> <br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>'; ?>
    <?php echo "$var1 + $var2 = "; ?>
    <?php echo $var1 + $var2;?> <br/>
    <!-- echo $var1 + $var3; -> Warning: A non-numeric value encountered in /home/sturm/www/TD1.php on line 28 -->

</body>
</html>