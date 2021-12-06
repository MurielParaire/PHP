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
start_page("utils.inc");
?>


<?php
function end_page($title)
{
    ?>
    <footer></footer>
    </body>
    </html>
    <?php
}
end_page("util.inc");
?>