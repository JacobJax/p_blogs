<?php
    include 'config/db_config.php';
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT email, title, content, illustration, created_on FROM blogs WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        $blog = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php $title = $blog['title'] ?>
<?php include 'templates/header.php' ?>

    <?php if($blog){ ?>
        <div class="blog-header">
            <h3><?php echo $blog['title'] ?> | <small>By: <?php echo $blog['email'] ?></small></h3>
            <p>Created on <?php echo $blog['created_on'] ?></p>
        </div>
        <div class="blog-content">
            <div class="the-blog">
                <img src="<?php echo $blog['illustration'] ?>" style="width: 800px;">
                <div class="the-blog-content">
                    <p> <?php echo $blog['content'] ?> </p>
                </div>
            </div>
        </div>
    <?php }?>
    <?php include 'templates/footer.php' ?>

</body>
</html>