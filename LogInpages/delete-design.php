<?php
		include("delete-code.php"); // Include delete code Script page.
?>
<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Delete Image from Database and Folder - Campuslife</title>
	<style>
		body{background: #ececec;color: #333;}
		.main{text-align: center;margin-top: 20px;}
		.main .login-box{margin-top: 30px;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px;	margin-bottom: 10px;}
		.main .btn{width: 100%;	background: #27a465; color: #f7f7f7;}
		.main .msg{color: #d14269;}
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
	<div class="container main" >
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h2>Delete image from Database</h2>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="col-sm-12 login-box">
					<input type="text" placeholder="Enter image id" name="img-id" class="tb" />
					<input type="submit" value="Delete" name="btn_delete" class="btn" />
				</div>
				<div class="col-lg-12">
					<div class="msg">
                        <strong>
		                    <?php if(isset($error)){echo $error;}?>
	                    </strong>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	</body>
	</html>