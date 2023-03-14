<?php
if ($_POST["pwd"] == "123movies")
{
    echo "You entered the protected page successfully";
    die();
}
?>

<form action="" method="post">
<p><input type="password" name="pwd" autofocus></p>
<p><input type="submit" /></p>
</form>
