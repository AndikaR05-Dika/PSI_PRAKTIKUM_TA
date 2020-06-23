<?php
include_once("config1.php");

$result = mysqli_query($mysqli, "SELECT * FROM vga ORDER BY merk ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add1.php">Back to Home</a><br/><br/>

    <table width='100%' border=1>

    <tr>
         <th>Merk</th> <th>Unit</th> <th>Update</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) 
    {         
        echo "<tr>";
        echo "<td>".$user_data['merk']."</td>";
        echo "<td>".$user_data['unit']."</td>";    
        echo "<td><a href='editvga.php?id=$user_data[id]'>Edit</a> | <a href='deletevga.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>

    </table>
</body>
</html>