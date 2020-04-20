<?php
include 'connect.php';
//mysqli_num_rows($query);

?>
<body>

<?php
$listCat = "SELECT * FROM categories WHERE categoryID= " .$_GET['id'];
$headLink = mysqli_query($conn, $listCat);
$catName = mysqli_fetch_assoc($headLink);
echo  $catName['categoryName'];
?>

<?php
$sqlSection = "SELECT * FROM sections WHERE categoryID= " .$_GET['id'];
$result = mysqli_query($conn, $sqlSection);
while ($row = mysqli_fetch_assoc($result)){
    ?>

    <li>
        <a href="phrase.php?code=<?php echo $row['sectionID']?>"><?php echo $row['sectionName']?></a>
    </li>

    <?php
}

include 'Footer.php';
?>
</body>
