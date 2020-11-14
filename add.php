<?php 

    include 'config/db_config.php';

    $email = $title = $description = $imageIllustration = '';;
    $errors = ['email'=>'', 'title'=>'', 'content'=>'', 'description'=>''];

    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
        }

        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
        }

        if(empty($_POST['description'])){
            $errors['description'] = 'A description is required';
        } else {
            $description = $_POST['description'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $description)){
				$errors['description'] = 'Title must be letters and spaces only';
			}
        }

        if(empty($_POST['content'])){
            $errors['content'] = 'Content is required';
        } else {
            $content = $_POST['content'];
        }

        // handle image upload
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileTmpDes = $file['tmp_name'];
        $fileError = $file['error'];

        $fileExt = explode('.', $fileName);
        $actualFileExt = strtolower(end($fileExt));

        if($fileError === 0){
            $fileNewName = uniqid('', true) . '.' . $actualFileExt;
            $destination = "uploads/" . $fileNewName;
            $imageIllustration = $destination;
            move_uploaded_file($fileTmpDes, $destination);
        } else {
            echo 'An error occured';
        }
        

        if(!array_filter($errors)){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $illustration = $imageIllustration;
            

            $sql = "INSERT INTO blogs(title, email, description, content, illustration) VALUES('$title', '$email', '$description', '$content', '$illustration')";

            if(mysqli_query($conn, $sql)){
                header('Location: index.php');
            }
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Blog</h4>
		<form class="white" action="add.php" method="POST" enctype="multipart/form-data">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Blog Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<label>Blog Description</label>
			<input type="text" name="description" value="<?php echo htmlspecialchars($description) ?>">
			<div class="red-text"><?php echo $errors['description']; ?></div>
			<label>Blog content</label><br>
			<br><textarea name="content" id="" cols="30" rows="10" style="height: 90px;"></textarea><br>
			<div class="red-text"><?php echo $errors['content']; ?></div><br>
            <label>Add image illustration</label>
            <input class='btn' type="file" name="file"><br>
			<br><div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
    <?php include 'templates/footer.php' ?>
</body>
</html>