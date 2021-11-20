<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Show Image in PHP - Campuslife</title>
	<style>
		body{background-color: #f2f2f2; color: #333;}
		.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
		h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
		.img-box{margin-top: 20px;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
	</style>
	</head>
    <meta charset="UTF-8">
    <title>Homescreen</title>
    <link href="home.css" rel="stylesheet">

<body>
    <div class="full-page">
        <div class="sub-page">
            <div class="navigation-bar">
                <div class="logo">
                    <a href='home.php'>Home Page</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='share.php'>Share</a></li>
                        <li><a href='sharewithme.php'>Shared with me</a></li>
                        <li><a href='upload-design.php'>Upload</a></li>
                        <li><a href='delete-design.php'>Delete</a></li>
                        <li><a href='show.php'>View</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
</div>
	<body>
		<div class="container main">
			<h3>Showing Images from database</h3>
			<div class="img-box"> 
                <?php
                    
                    /*-- we included connection files--*/
                    include "connection.php";

                    $result = mysqli_connect($sname,$uname,$password) or die("Could not connect to database." .mysqli_error());
                    mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
                    $image_query = mysqli_query($result,"select img_name,img_path from image_table");
                    while($rows = mysqli_fetch_array($image_query))
                    {
                        $img_name = $rows['img_name'];
                        $img_src = $rows['img_path'];
                    ?>
                    
                    <div class="img-block">
                    <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" />
                    <p><strong><?php echo $img_name; ?></strong></p>
                    </div>
                    
                    <?php
                    }
                ?>
			</div>
		</div>
	</body>
	</html>