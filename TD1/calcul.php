<?php
include 'calculator.php';
start_page("calcul");
?>

<?php
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_POST['op'];

$action = $_POST['action'];
echo ($action);

/*echo ($op1);
echo('*');
echo($op2);
echo('=');*/

if('*' == $op)
{

}
elseif ('+' == $op)
{

}
elseif ('-' == $op)
{

}
elseif ('/' == $op)
{

}
else
{
    //ca sort ca car $op n'existe plus
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}


?>


<?php
end_page();
?>