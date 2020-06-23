<?php
include_once("config1.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $merk=$_POST['merk'];
    $unit=$_POST['unit'];

    $result = mysqli_query($mysqli, "UPDATE vga SET Merk='$merk',Unit='$unit' WHERE ID=$id");

    header("Location: indexvga.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM vga WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $merk = $user_data['Merk'];
    $unit = $user_data['Unit'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="add1.php">Home</a>

    <form name="update_user" method="post" action="editvga.php">
        <table border="0">
            
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk" value=<?php echo $merk;?>></td>
            </tr>
            <tr> 
                <td>Unit</td>
                <td><input type="text" name="unit" value=<?php echo $unit;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>