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
    //echo date('1 F d; Y'); ?> <br/>
    <?php
    //$jour = date('1 F d; Y') ; ?> <br/>
    <?php
    //echo $jour;
    ?>
    <?php
    //$jour2 = date('d/m/Y', strtotime('2020-04-01'));
    //echo $jour2;
    ?>
    <?php
echo date('d/m/Y'); ?> <br/>
<?php echo date('F d, Y, g:i a');
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
