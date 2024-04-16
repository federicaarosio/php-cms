<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php cms</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php include './db/db.php' ?>
    <?php include './partials/header.php' ?>
    <main>
        <div class="main-container">
            <div class="post-container">

                <!-- Posts -->
                <?php
                $query = 'SELECT * FROM posts';
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_title = $row['title'];
                    $post_author = $row['author'];
                    $post_date = $row['date'];
                    $post_image = $row['image'];
                    $post_content = $row['content'];
                ?>

                    <p class="post-date">
                        <?php echo $post_date ?>
                    </p>
                    <h2 class="post-title">
                        <a href="#"><?php echo $post_title ?></a>
                    </h2>

                    <img class="post-img" src="<?php echo $post_image ?>" alt="">

                    <p class="post-content">
                        <?php echo $post_content ?>
                    </p>

                <?php
                }
                ?>

            </div>
            <div class="column-container">
                <div class="card">
                    <h4>
                        titoletto
                    </h4>
                    <input type="search">
                </div>
                <div class="card">
                    <h4>
                        titoletto
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam porro accusantium, culpa id commodi vero consequuntur, ipsa rerum maiores vel dignissimos deleniti cupiditate, ad eligendi dicta laudantium numquam in!
                    </p>
                </div>
                <div class="card">
                    <h4>
                        titoletto
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam porro accusantium, culpa id commodi vero consequuntur, ipsa rerum maiores vel dignissimos deleniti cupiditate, ad eligendi dicta laudantium numquam in!
                    </p>
                </div>
            </div>

        </div>
    </main>
    <?php include './partials/footer.php' ?>
</body>


</html>