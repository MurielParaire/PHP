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
    <hr/><br/><strong>Test</strong><br/><hr/></strong>
    <?php
    echo date('F d; Y'); ?> <br/>
    <?php
    $jour = date('F d; Y') ; ?> <br/>
    <?php
    echo $jour;
    ?>
    <?php
echo date('d/F/Y'); ?>
<?php echo date('F d, Y');
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
