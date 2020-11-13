<?php 

    include 'config/db_config.php';

    $email = $title = '';
    $errors = ['email'=>'', 'title'=>'', 'content'=>''];

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

        if(empty($_POST['content'])){
            $errors['content'] = 'Content is required';
        } else {
            $content = $_POST['content'];
        }

        if(!array_filter($errors)){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);

            $sql = "INSERT INTO blogs(title, email, content) VALUES('$title', '$email', '$content')";

            if(mysqli_query($conn, $sql)){
                header('Location: index.php');
            }
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Add blog' ?>
<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Blog</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Blog Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Blog content</label><br>
			<textarea name="content" id="" cols="30" rows="10" style="height: 90px;"></textarea><br>
			<div class="red-text"><?php echo $errors['content']; ?></div>
			<br><div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
    <?php include 'templates/footer.php' ?>
</body>
</html>