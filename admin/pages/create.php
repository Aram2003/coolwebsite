<?php include "../../inc/settings.php" ?>
<?php include "../../inc/functions.php" ?>
<?php include "../logincheck.php" ?>
<?php include "../../inc/connection.php" ?>
<?php include"../../templates/tpl_meta.php" ?>
<?php

if(isset($_POST["title"])){
    $title = addslashes($_POST["title"]);
    $content = addslashes($_POST["content"]);
    $order = floatval($_POST["order"]);

    $sql = "INSERT INTO `pages` (`title`,`content`,`order`) 
                 VALUES ('$title','$content',$order)";

    mysqli_query($kap,$sql);
    echo mysqli_error($kap);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <?php include("../../templates/tpl_styles.php"); ?>
    </head>
    <body class = "big-box" style="background-image:url('../../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style = "color:white">Admin Pages</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <h2 style = "color:white">Create New Page</h2>
                      <form action="" method="POST" class="form-group">
                        <input type="text" name="title" placeholder="Վերնագիր" class="form-control"><br>
                        <textarea id="content" name="content" rows="13" placeholder="Բովանդակություն" class="form-control"></textarea><br>
                        <input type="text" name="order" placeholder="Հերթական համար" class="form-control"><br>
                        <input type="submit" value="Պահպանել" class="btn btn-default navbar-btn">
                      </form>
                 </div>
                  <?php include("../templates/sidebar.php"); ?>
             </div>
          </article>
        <?php include("../../templates/tpl_footer.php"); ?>
        <?php include("../../templates/tpl_scripts.php"); ?>
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