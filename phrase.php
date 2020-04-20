<?php
include 'connect.php';
//mysqli_num_rows($query);

?>
<body>

<?php
$sqlPhrase = "SELECT * FROM phrases WHERE sectionID= " . '"'.$_GET['code'].'"' ;
$result = mysqli_query($conn, $sqlPhrase);
if ($result){
    while ($row = mysqli_fetch_assoc($result)){
        ?>

        <li>
            <?php echo $row['phraseData']?>
        </li>

        <?php
    }
}
else{
    echo "0 result";
}
include 'Footer.php';
?>
</body>
