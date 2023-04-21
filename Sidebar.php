<div class="sidebar">

    <h4 style="text-align: center;"><u>CATEGORIES
            <hr></u></h4>

    <ul id="categories">
        <?php
        $cats = "SELECT * FROM categories";
        $run_query = mysqli_query($conn, $cats);

        while ($row_cats = mysqli_fetch_assoc($run_query)) {

            $cat_id = $row_cats['cat_id'];
            $cat_name = $row_cats['cat_name'];

            echo "<li><a href='structCat.php?cat_name=$cat_name'>$cat_name<a></li>";
        }
        ?>
    </ul>

</div>