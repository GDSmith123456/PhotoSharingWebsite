<?php
	
		include('upload-code.php'); 
		
	?>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Upload Image</title>
	<style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homescreen</title>
    <link href="home.css" rel="stylesheet">
</head>
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
	<div class="container main" >
		<div class="image-box">
			<h2>Image Upload</h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Enter image name" name="img-name" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
            <strong>
		        <?php if(isset($error)){echo $error;}?>
	        </strong>
			</div>
		</div>
	</div>
</body>