<header>
    <h1>
        Main title
    </h1>
    <nav>
        <ul>
            <?php
            $query = 'SELECT * FROM categories';
            $select_all_categories_query = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                $category_title = $row['title'];
            ?>

                <li>
                    <?php echo $category_title; ?>
                </li>

            <?php } ?>
        </ul>
    </nav>

</header>