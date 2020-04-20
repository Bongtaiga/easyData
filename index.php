<?php
include 'connect.php';
?>
<li>
    <h1>Category</h1>
</li>
    <div class="row"">
            <?php
                $listCat = 'SELECT * FROM categories';
                $result = mysqli_query($conn,$listCat);
                while ($row = mysqli_fetch_assoc($result)){
            ?>
                    <div class="card col-4">
                    <a class="btn btn-primary" href="section.php?id=<?php echo $row["categoryID"] ?>"><?php echo $row["categoryName"] ?></a>

                    </div>
    <!--    <li >-->
<!--        <a href="section.php?id=--><?php //echo $row["categoryID"] ?><!--">--><?php //echo $row["categoryName"] ?><!--</a>-->
<!--    </li>-->
    <?php
}
?>
</div>
<?php
include 'Footer.php';
?>