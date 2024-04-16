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
                <h2>
                    colonna destra
                </h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga ullam veniam repellendus dolor dolore. Laboriosam assumenda iusto odio fugiat saepe excepturi non, vero nemo veritatis, dolore ratione esse voluptate dolor?
                    Cum, aliquid. Error natus quisquam autem nobis corporis nostrum incidunt at vitae nemo, eligendi, ducimus non. Praesentium doloribus, veniam vel, corporis perferendis quibusdam ratione in, odit placeat nostrum ad error.
                    Error repellendus inventore, ad voluptatem nobis blanditiis ducimus accusantium repellat a ipsum reprehenderit atque quasi dolore modi deleniti exercitationem est corrupti minima necessitatibus illo. Expedita consectetur provident eveniet ipsum ipsam?
                    Odit, vitae suscipit! Alias quo nisi deserunt odio ipsam quaerat, ad voluptas sed exercitationem magnam dicta laudantium culpa ab itaque explicabo a magni soluta officiis, dolores assumenda, consectetur sequi velit.
                    Ex optio nulla consectetur autem minus tenetur sequi et fugiat dolor corporis? Debitis, itaque. Repudiandae ipsum, ab necessitatibus obcaecati ex fugit officiis id iusto voluptatum laboriosam quam sint corporis ad.
                </p>
            </div>

        </div>
    </main>
    <?php include './partials/footer.php' ?>
</body>


</html>