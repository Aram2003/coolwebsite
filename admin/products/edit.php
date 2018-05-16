<?php include "../../inc/settings.php" ?>
<?php include "../../inc/functions.php" ?>
<?php include "../logincheck.php" ?>
<?php include "../../inc/connection.php" ?>
<title>Admin</title>
<?php
if(isset($_POST["submit"])){
    $id = intval($_GET["id"]);
    $title = addslashes($_POST["title"]);
    $content = addslashes($_POST["content"]);
    $price = addslashes($_POST["price"]);
    $img = addslashes($_POST["img"]);
    $categoryid = intval($_POST["categoryid"]);
   

    $sql = "UPDATE `products` 
                SET  `title` = '$title'
                        ,`content` = '$content'
                        ,`price` = '$price'
                        ,`img` = '$img'
                        ,`categoryid` = '$categoryid'
                        
                WHERE `id` = $id";

      mysqli_query($kap,$sql);

}
if(isset($_GET["id"])){
  $id  = intval($_GET["id"]);  //ներմուծված արժեքը կոնվերտացնում է integer -ի եթե կարողանում է, հակառակ դեպքում ՝ 0
  $sql = "SELECT * FROM `products` WHERE `id` = $id";
  $res = mysqli_query($kap, $sql);
  $product = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
}
else{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("../../templates/tpl_meta.php"); ?>
        <?php include("../../templates/tpl_styles.php"); ?>
        
    </head>
    <body class="big-box" style="background-image:url('../../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style = "color:white">Admin Product</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <h2 style = "color:white">Edit Your Product</h2>
                      <form action="" method="POST" class="form-group">
                       <label>Title</label>
                        <input type="text" name="title" placeholder="Վերնագիր" class="form-control" value="<?php echo $product["title"] ?>"><br>
                         <label>Content</label>
                        <textarea id="content" name="content" rows="13" placeholder="Բովանդակություն" class="form-control"><?php echo $product["content"] ?></textarea><br>
                         <label>Price</label>
                        <input type="number" name="price" class="form-control"  value="<?php echo $product["price"] ?>"><br>
                        <label>image</label>
                        <input type="text" name="img" class="form-control"  value="<?php echo $product["img"] ?>"><br>
                         <label>categoryid</label>
                        <input type="text" name="categoryid" class="form-control"  value="<?php echo $product["categoryid"] ?>"><br>
                        <input type="submit" name="submit" value="Պահպանել" class="btn btn-default navbar-btn">
                      </form>
                 </div>
                  <?php include("../templates/sidebar.php"); ?>
             </div>
          </article>
        <?php include("../../templates/tpl_footer.php"); ?>
        <?php include("../../templates/tpl_scripts.php"); ?>

      <!-- include summernote css/js-->
      <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              $('#content').summernote({
                height:"300px"
              });
          });
      </script>
    </body>
</html>