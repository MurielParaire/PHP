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
start_page('test');
?>
    <?php
?>
<?php ;
    ?>
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