<?php
include_once("config1.php");

$result = mysqli_query($mysqli, "SELECT * FROM vga ORDER BY Unit ASC");
?>

<!DOCTYPE html>
<html>
<header>
<br>
<br>
<br>
<br>
    <center><h1>Graphic Card</h1></center>

</header>
<head>

    <title>Profile</title>

    <style>
        header 
        {
            background-image: url("f195f73ad91ea.png");
            background-size:100%;
            width:100%;
            height:280px;
            size:100%;
            color:#FFFFFF;
            text-shadow: 0.5px 0.5px 7px grey;
		}

        table 
        {
            margin-top: 0.8%;
            margin-left: 1%;
            margin-right: 1%;
            background-color:grey;
            font-family: Segoe UI;
            border-collapse: collapse;
            width: 98%;
        }

        td, th
        {
            color: white;
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        body 
        {
            margin-top:0%;
            font-family: Segoe UI;
            margin: 0;
        }     

        .box-content
        {
            margin-top: 0%;
            margin-left: 0%;
            margin-bottom:25%;
            width: 100%;
            height: 100px;
            position: absolute;
            background: #FFFFFF;
        }

        footer
        {
            margin-top:29%;
            width:100%;
            height:100%;
            color: white;
            position: absolute;
            background: #20165B;
		}

        .navbar 
        {
            overflow: hidden;
            background-color: #20165B;
        }

        .navbar a 
        {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown 
        {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn 
        {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn 
        {
            background-color: red;
        }

        .dropdown-content 
        {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a 
        {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover 
        {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content
        {
            display: block;
        }

        .indexfoto
        {
            text-align:center;
		}

    </style>

</head>

<body>

<div class="navbar">
    <a href="#home">Home</a>
    <a href="#news">About</a>
    <div class="dropdown">
        <button class="dropbtn">Our Product</button>
        <div class="dropdown-content">
            <a href="#">AMD Series</a>
            <a href="#">NVIDIA Series</a>
        </div>
    </div>
    <a href="login.php">Logout</span> </a>
</div>

    <div class="box-left"> </div>

    <div class="box-middle"></div>

    <div class="box-right"></div>

    <div class="box-content">
        <table width='100%' border=1>
    
        <tr>
            <th>Merk</th> <th>Unit</th>
        </tr>

        <?php  
        while($user_data = mysqli_fetch_array($result)) 
        {         
            echo "<tr>";

            echo "<td>".$user_data['Merk']."</td>";
            echo "<td>".$user_data['Unit']."</td>";      
        }
        ?>
        
        
    </div>

    <div class="indexfoto">
        <p><a href=indexfoto.php>index foto</a><p>
    </div>

<footer>
    <center><h1>13.2018.1.00691</h1></center>
</footer>

</body>

</html>