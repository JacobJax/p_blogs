<?php
    include 'config/db_config.php';
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT email, title, content, created_on FROM blogs WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        $blog = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/header.php' ?>

    <?php if($blog){ ?>
        <div class="blog-header">
            <h3><?php echo $blog['title'] ?></h3>
            <p>Created on <?php echo $blog['created_on'] ?></p>
        </div>
        <div class="blog-content">
            <h5 style="border-left: #ff5252 3px solid; padding: 3px; width: 400px;">Written By:<br> <small><?php echo $blog['email'] ?></small>  </h6>
            <p> <?php echo $blog['content'] ?> </p>
        </div>
    <?php }?>
    <?php include 'templates/footer.php' ?>

</body>
</html>