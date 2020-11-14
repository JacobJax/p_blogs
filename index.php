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

    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <?php foreach($blogs as $blog){ ?>
                <div class="col s12 m6">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="<?php echo htmlspecialchars($blog['illustration'])?>">
                            <span class="card-title"><?php echo htmlspecialchars($blog['title']) ?></span>
                        </div>
                        <div class="card-content">
                        <p><?php echo htmlspecialchars($blog['description']) ?></p>
                        <p><small>created on: <?php echo htmlspecialchars($blog['created_on']) ?></small></p>
                        </div>
                        <div class="card-action">
                        <a href="details.php?id=<?php echo $blog['id'] ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <p><small>Created on: <?php echo htmlspecialchars($blog['created_on']) ?></small> </p><hr>
                            <p><?php echo htmlspecialchars($blog['title'])?></p>
                        </div>
                        <div class="card-action">
                            <a href="details.php?id=<?php echo $blog['id'] ?>">Read More ></a>
                            <p>Written by: <?php echo htmlspecialchars($blog['email']) ?></p>
                        </div>
                    </div>
                </div> -->
            <?php } ?>
        </div>
    </div>
    <?php include 'templates/footer.php' ?>
</body>
</html>