<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY name ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>

    <table width='100%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) 
    {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>

    </table>
    <br>
    <a href="add.php">Back to Home</a><br/><br/>
</body>
</html>