<?php include "../../inc/settings.php" ?>
<?php include "../../inc/functions.php" ?>
<?php include "../logincheck.php" ?>
<?php include "../../inc/connection.php" ?>
<?php
if(isset($_GET["id"])){
    $id = intval($_GET["id"]);
    $sql  = "DELETE FROM `pages` WHERE `id`=$id";
    mysqli_query($kap,$sql);
    header("Location: index.php");

}
?>