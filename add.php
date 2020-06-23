<html>
<head>

    <title>Add Users</title>


</head>

<body>

<br><br><br><br>
<h1 align="center">Database Pegawai Perpustakaan Andika</h1>
<br><br><br>

    <form action="add.php" method="post" name="form1">
        <table width="18.5%" border="0" align="center">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" size="35"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" size="35"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" size="35"</td>
            </tr>
            <tr> 
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Add to User">
                    <input type="submit" name="Submit1" value="Add to Admin">
                    <input type="submit" name="Submit2" value="Add to Staff">
                </td>
            </tr>
        </table>
    </form>

    <p align="center"><a href='index.php'>View Users</a>, <a href='index1.php'>View Admin</a>, <a href='index2.php'>View Staff</a></p>
    <br>
    <br>

    <p align="center" style="margin-top:20%">

    <?php
    if(isset($_POST['Submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        echo "User added successfully.";
    }
    elseif(isset($_POST['Submit1']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO admin(name,email,mobile) VALUES('$name','$email','$mobile')");

        echo "User added successfully.";
    }
    elseif(isset($_POST['Submit2']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO staff(name,email,mobile) VALUES('$name','$email','$mobile')");

        echo "User added successfully.";
    }
    ?>

    </p>

    <center> <a href="login.php" style="text-decoration:none"><span style=" color: #000000 ">Logout</span> </a> <center>



</body>

</html>