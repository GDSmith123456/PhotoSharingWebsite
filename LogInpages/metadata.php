
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
						<li><a href="metadata.php">Metadata</a><li>
                    </ul>
                </nav>
            </div>
		<div class = metaContain>
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
				<input type="file" name="photo" />
				<input type="submit" name="submit" value="submit"/>

				<?php
					$error = "";
					
					if(!empty($_POST['submit'])) {
						$uploadDir = ".";
						$temp = $_FILES['photo']['tmp_name'];

					$exif = exif_read_data($temp);

					print_r ($exif);

					$temp = new Imagick();
					$temp->newImage(300, 200, "black");

					$temp->setImageProperty('Exif:Make', 'Imagick');
					$temp->setImageProperty('Exif:Date', 'DateAndTime');
					$temp->setImageProperty('Exif:Location', 'Somewhere');
					echo $temp->getImageProperty('Exif:Make');
					echo $temp->getImageProperty('Exif:Date');
					echo $temp->getImageProperty('Exif:Location');

				}
			?>
		</form>
        </div>

</body>
</html>


</body>
</html>