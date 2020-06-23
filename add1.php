<html>
<head>

    <title>Add VGA</title>


</head>

<body>

<br><br><br><br>
<h1 align="center">Database VGA Toko</h1>
<br><br><br>

    <form action="add1.php" method="post" name="form">
        <table width="18.5%" border="0" align="center">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk" size="35"></td>
            </tr>
            <tr> 
                <td>Unit</td>
                <td><input type="text" name="unit" size="35"</td>
            </tr>
            <tr> 
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Add to VGA">
                </td>
            </tr>
        </table>
    </form>

    <p align="center"><a href='indexvga.php'>View VGA</a></p>
    <br>
    <br>

    <p align="center" style="margin-top:20%">

    <?php
    if(isset($_POST['Submit']))
    {
        $merk = $_POST['merk'];
        $unit = $_POST['unit'];

        include_once("config1.php");

        $result = mysqli_query($mysqli, "INSERT INTO vga(merk, unit) VALUES('$merk','$unit')");

        echo "VGA added successfully.";
    }
    ?>

    </p>

    <center> <a href="login.php" style="text-decoration:none"><span style=" color: #000000 ">Logout</span> </a> <center>



</body>

</html>