<?php include "../../inc/settings.php" ?>
<?php include "../../inc/functions.php" ?>
<?php include "../logincheck.php" ?>
<?php include "../../inc/connection.php" ?>
<!DOCTYPE html>
<html>
    <head>
         <title>Admin</title>
        <?php include "../../templates/tpl_meta.php" ?>
        <?php include("../../templates/tpl_styles.php"); ?>
        
    </head>
    <body class="big-box" style = "background-image:url('../../images/admin.jpg')">
           <article>
            <div class="container">
                <h1 style = "color:white">Admin Products</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                    	<h2 style = "color:white">All products</h2>
                      <a href='create.php' id="create" class='btn btn-primary btn-xm' role="button">New Product</a>
                      <table class="table" id="myTable">
                                <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Title</th>
                                  <th>Order</th>
                                  <th>Edit.</th>
                                  <th>Del.</th>
                                </tr>
                                </thead>
                                
                                <tbody>
                                <?php $sql = "SELECT * FROM products";
                                     $res = mysqli_query($kap,$sql); 
                                     $products = mysqli_fetch_all($res,MYSQLI_ASSOC);
                                     foreach($products as $p)
                                     {
                                        echo "<tr>";
                                        echo "<td>".$p["id"]."</td>";
                                        echo "<td>".$p["title"]."</td>";
                                        echo "<td>".$p["content"]."</td>";
                                        echo "<td>".$p["price"]."</td>";
                                        echo "<td>".$p["img"]."</td>";
                                        echo "<td>".$p["categoryid"]."</td>";
                                       
                                        echo "<td><a href='edit.php?id=".$p["id"]."' class='btn btn-xs btn-primary smallik'>
                                                        <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                                                  </a>
                                               </td>";
                                        echo "<td>
                                                    <a href='delete.php?id=".$p["id"]."' class='btn btn-xs btn-danger smallik'>
                                                          <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                                                     </a>
                                              </td>";
                                        echo "</tr>";
                                     }
                                ?>
                                </tbody>
                                
                           </table>
 	                  <?php include("../templates/sidebar.php"); ?>
                    </div>
                 </div>
             </div>
          </article>
        <?php include("../../templates/tpl_footer.php"); ?>
        <?php include("../../templates/tpl_scripts.php"); ?>

    </body>
</html>