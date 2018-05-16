<?php include "../../inc/settings.php" ?>
<?php include "../../inc/functions.php" ?>
<?php include "../logincheck.php" ?>
<?php include "../../inc/connection.php" ?>
<title>Admin</title>
<?php
if(isset($_POST["submit"])){
    $id = intval($_POST["id"]);
    $title = addslashes($_POST["title"]);
    $content = addslashes($_POST["content"]);
    $order = floatval($_POST["order"]);

    $sql = "UPDATE `pages` 
                SET  `title` = '$title'
                        ,`content` = '$content'
                        ,`order` = '$order'
                WHERE `id` = $id";

      mysqli_query($kap,$sql);

}
if(isset($_GET["id"])){
  $id  = intval($_GET["id"]);  //ներմուծված արժեքը կոնվերտացնում է integer -ի եթե կարողանում է, հակառակ դեպքում ՝ 0
  $sql = "SELECT * FROM `pages` WHERE `id` = $id";
  $res = mysqli_query($kap, $sql);
  $page = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
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
    <body class = "big-box" style="background-image:url('../../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style = "color:white">Admin Pages</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <h2 style = "color:white">Edit Your Page</h2>
                      <form action="" method="POST" class="form-group">
                        <input type="text" name="title" placeholder="Վերնագիր" class="form-control" value="<?php echo $page["title"] ?>"><br>
                        <textarea id="content" name="content" rows="13" placeholder="Բովանդակություն" class="form-control"><?php echo $page["content"] ?></textarea><br>
                        <input type="text" name="order" placeholder="Հերթական համար" class="form-control" value="<?php echo $page["order"] ?>"><br>
                        <input type="hidden" name="id"  value="<?php echo $page["id"] ?>"><br>
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