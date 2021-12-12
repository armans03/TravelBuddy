<?php
    session_start();
    require_once('header.php');
    require_once('../model/transAdminModel.php');

    $id = $_REQUEST['id'];
    $user = getTransAdminByID($id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
</head>
    <body>
        <form method="post" action="../controller/editTransAdminCheck.php?id=<?= $user['taid'] ?>">
            <fieldset>
                <legend>Edit</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?= $user['name'] ?>"></td>
                    </tr>
                    <tr>
                       <td>User Name:</td>
                        <td><input type="text" name="username" value="<?= $user['username'] ?>"></td>
                    </tr>
                    <tr>
                        <td>email:</td>
                        <td><input type="email" name="email" value="<?=$user['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Contact Number:</td>
                        <td><input type="text" name="number" value="<?=$user['num']?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" value="<?= $user['password']?>"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>