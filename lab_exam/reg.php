
<?php
session_start();

    if(isset($_POST['sign_in']))
    {
        
        header("Location: login.php");
    }
    if(isset($_POST['register']))
    {
        
        header("Location: reg.php");
    }
    if(isset($_POST["sign_up"])){

        if($_POST["password"]!=$_POST["confirm_password"]){
            echo "password don't match";
        }
        else{
            $_SESSION["user"]["id"]=$_POST["id"];
            $_SESSION["user"]["password"]=$_POST["password"];
            $_SESSION["user"]["name"]=$_POST["name"]; 
            $_SESSION["user"]["type"]=$_POST["type"];  
            header("Location: login.php");

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >`
        <label for="ID" name="id">ID</label><br>
        <input type="text" name="id"><br>
        <label for="password" name="password">PASSWORD</label><br>
        <input type="text" name="password"><br>
        <label for="confirm_password" name="confirm_password">CONFIRM PASSWORD</label><br>
        <input type="text" name="confirm_password"><br>
        <label for="NAME" name="name">NAME</label><br>
        <input type="text" name="name">
        <table>
            <th>USER TYPE</th>
            <tr>
                <td>
                    <label for="user" >USER</label><br>
                    <input type="radio" name="user_type" value="user"><br>
                </td>
                <td>
                    <label for="user" >ADMIN</label><br>
                    <input type="radio" name="user_type" value="admin"><br>
                </td>
                
            </tr>
        </table>
        <button type="submit" name="sign_up">Sign up</button>
        <button type="submit" name="sign_in">Sign in</button>

    </form>
</body>
</html>




