 <div class="whole">
 <?php
$search= addslashes($_GET["search"]);
$sql =  "SELECT `id`,`title`,`img`,`price`,`content` FROM `products` WHERE `title` LIKE '%$search%' ORDER BY `id`";
$res = mysqli_query($kap, $sql);
$products = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<div>
<form action="../pages/res.php" method="GET">
    <input class="search bw" type="text" name="search" placeholder="Search Items..">
    <input class="results bw" type="submit" name="searchsubmit" value="Search">
</form>
    </div>
    <div class="whole row">
 <?php
         foreach ($products as $p) {
            $title = $p["title"];
            $id = $p["id"];
            $price = $p["price"];
            $url= $p["img"];
            echo "<div class='col-md-4 oneproduct'>
                                <div class='panel panel-default  panel--styled prod-cart de'>
                                    <div class='panel-body'>
                                        <div class='col-md-12 panelTop'>
                                            <div class='col-md-12 col-lg-12 col-sm-12 store-product-img'>
                                                <img class='img-responsive' class='col-md-12 col-lg-12 col-sm-12' src='$url' alt=''/>                                            </div>
                                            <div class='col-md-12'>
                                                <h2>$title</h2>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class='col-md-12 panelBottom'>
                                            <div class='col-md-4 text-left'>
                                                <h5>Price <span class='itemPrice'>$price<span>Դր.</span></span></h5>
                                            </div>
                                            <div class='col-md-4 text-center see-more'>
                                                <a href='descr.php?id=$id'><button class='btn btn-sm btn-add-to-cart see-more-button ko'><span class='glyphicon glyphicon-shopping-cart ay'></span>  see more </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>";
                            }
                        ?>
                        </div>