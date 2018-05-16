 <?php
    if(isset($_GET["id"])){
        $id = intval($_GET["id"]);
    }
    else{
        $id = 1; 
    }
    $sql = "SELECT `title`,`content`,`price`,`img` FROM  `games`  WHERE `id`=$id";
    $res = mysqli_query($kap, $sql);
    $gdesc = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<?php 
foreach($gdesc as $d){
	$title = $d["title"];
	$content = $d["content"];
	$price = $d["price"];
    $url= $d["img"];
    echo "<div class='col-md-12'>
                                <div class='panel panel-default  panel--styled prod-cart'>
                                    <div class='panel-body'>
                                        <div class='col-md-12 panelTop'>
                                            <div class='col-md-6 col-lg-6 col-sm-12'>
                                                <img class='img-responsive' class='col-md-12 col-lg-12 col-sm-12' src='$url' alt=''/>
                                                
                                            </div>
                                            <div class='col-md-6 col-lg-6'>
                                                <h2>$title</h2>
                                                <p>$content</p>
                                            </div>
                                        </div>
                                        
                                        <div class='col-md-12 panelBottom'>
                                            <div class='col-md-10 text-left'>
                                                <h5>Price <span class='itemPrice'>$price<span>Դր.</span></span></h5>
                                            </div>
                                            <div class='col-md-2 text-center'>
                                                <a href='cart.php?id=$id'><button class='btn btn-sm btn-add-to-cart kochak'><span class='glyphicon glyphicon-shopping-cart'></span>   Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>";
					}
 ?>
 <p style="color:white">Other products in the same category</p>
 <?php
$sql =  "SELECT `id`,`title`,`img`,`price`,`content` FROM `games` ORDER BY `id` LIMIT 3,3";
$res = mysqli_query($kap, $sql);
$game = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<article>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-10 col-md-10">
                <div class="container">

 <?php
foreach ($game as $p) {
            $title=$p["title"];
            $content = $p["content"];
            $id = $p["id"];
            $price = $p["price"];
            $url= $p["img"];
            echo "
                <div class='col-md-4'>
                 <div class='panel panel-default  panel--styled '>
                            <div class='panel-body'>
                                <div class='col-md-12 panelTop'>
                                    <div class='col-md-12 col-lg-12 col-sm-12'>
                                        <img class='img-responsive' class='col-md-12 col-lg-12 col-sm-12' src='$url' alt=''/>                                            </div>
                                    <div class='col-md-12'>
                                        <h2>$title</h2>
                                        <p>$content</p>
                                    </div>
                                </div>
                                <div class='col-md-12 panelBottom'>
                                    <div class='col-md-4 text-left'>
                                        <h5>Price <span class='itemPrice'>$price<span>Դր.</span></span></h5>
                                    </div>
                                    <div class='col-md-4 text-center'>
                                        <a href='edesc.php?id=$id'><button class='btn btn-sm btn-add-to-cart'><span class='glyphicon glyphicon-shopping-cart'></span>   see more</button></a>
                                    </div>
                                </div>
                            </div>
                            </div>        
                        </div>";
                   }
                ?>
                </div>
            </div>
        </div>
    </div>
</article>