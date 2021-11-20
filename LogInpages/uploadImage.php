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
                        <li><a href='Share.html'>Share</a></li>
                        <li><a href='SharedWithMe.html'>Shared with me</a></li>
                        <li><a href='upload.php'>Upload</a></li>
                        <li><a href='delete-design.php'>Delete</a></li>
                        <li><a href='view.php'>View</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
			<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
			<?php endif ?>
	<div class = "form_imageSelect">  
		<form action="upload.php" method="post" enctype="multipart/form-data">
           <input type="file" 
                  name="my_image">
           <input type="submit" 
                  name="submit"
                  value="Upload">
     	</form>
	</div>
        
</body>
</html>