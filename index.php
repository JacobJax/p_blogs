<?php
   include 'config/db_config.php';
   $sql = 'SELECT id, title, email, description, illustration, created_on FROM blogs';

   $result = mysqli_query($conn, $sql);
   $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);

   mysqli_free_result($result);
   mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
    <?php $title = 'Home' ?>
<?php include 'templates/header.php' ?>
    <header>
        <h3 style="color: #fff;">Welcome to P-Blogs</h3>
        <p style="color: #fff;">One stop online platform for latest juicy gossip</p>
    </header>

    <section class="blogs-section">
        <div class="blogs">
            <?php foreach($blogs as $blog){ ?>
                <div class="blog">
                    <div class="card-header">
                        <h5><small><?php echo htmlspecialchars($blog['email']) ?> | <?php echo htmlspecialchars($blog['created_on']) ?></small></h5>
                    </div>
                    <div class="card-img">
                        <img src="<?php echo htmlspecialchars($blog['illustration'])?>" alt="">
                    </div>
                    <div class="card-content">
                        <h5><?php echo htmlspecialchars($blog['title']) ?></h5>
                        <p><?php echo htmlspecialchars($blog['description']) ?></p>
                        <a style="font-size: 20px;" href="details.php?id=<?php echo $blog['id'] ?>" class="card-link">Read More ></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
   
    <?php include 'templates/footer.php' ?>
</body>
</html>