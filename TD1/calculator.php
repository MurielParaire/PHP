<?php
include Exo3.php;

start_page("Calculator");
?>
<form action="calcul.php" method="post">
    <input type="text" name="op1"/>
    <input type="text" name="op2"/>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
    <input type="submit" name="action" value="mailer"/> </br>
</form>


<?php
end_page();
?>
