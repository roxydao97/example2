<?php include "menu.php"; ?>
<form class="" action="login.php" method="post">
    <table>
        <tr>
            <td> Username </td>
            <td> <input type="text" name="user" value="" placeholder="type username" required> </td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type="password" name="" value="" placeholder="type password" required> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="btnLogin" value="Login"> </td>
        </tr>
    </table>
</form>

<?php
session_start();
if(isset($_POST['btnLogin']))  // btn is pressed
{
    $_SESSION['username']= $_POST['user'];
    echo 'Hello '.$_POST['user'];
}
?>
<?php include "footer.php"; ?>
