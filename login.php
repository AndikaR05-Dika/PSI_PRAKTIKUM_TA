<html>

<head>
    <title>Login Session</title>
</head>

<body>
<br><br><br><br><br><br><br><br>
<h1><center>Login</center></h1>
<br><br><br>
<?php

session_start();
if(isset($_SESSION["login"]))
{
    header("location:index.php");
    exit;
}

if( isset($_POST["submit"] ) )
{
    $hakakses = $_POST["hakakses"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($hakakses == "admin")
    {
        if(($username == "admin") && ($password == "admin"))
        {
            $_SESSION["login_admin"] = true;
            header("location: add.php");
        }
        else
        {
            $error = true;
        }
    }

    
    else if($hakakses == "staff")
    {
        if(($username == "staff") && ($password == "staff"))
        {
            $_SESSION["login_staff"] = true;
            header("location: add1.php");
        }
        else
        {
            $error = true;
        }
    }

    else if($hakakses == "user")
    {
        if(($username == "user") && ($password == "user"))
        {
            $_SESSION["login_user"] = true;
            header("location: user.php");
        }
        else
        {
            $error = true;
        }
    }
   
    $error = true;

    if($error)
    {
        $message = "Password / Username anda salah";
    }
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<center>
<form action="" method="post" name="form">

        <label for="username">Username</label>
        <input
            type="text"
            id="username"
            name="username"
        />
        </br>
        </br>
        <label for="Password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
        />
        <br/>
        <br/>
        <label for="hakakses">Login Sebagai</label>
        <br/>
        <select name="hakakses" id="hakakses">
        <option value="">---Mau Login Sebagai---</option>
        <option value="admin">Admin</option>
        <option value="staff">Staff</option>
        <option value="user">User</option>
        </select>
        <br/>
        <br/>
        <input
            type="submit"
            value="Login"
            class="Buttoninput"
            name="submit"
            onclick=""
        />
        </form>
</center>

</body>

</html>