<?php
$sql =  "SELECT `id`,`title`,`img`,`price`,`content` FROM `products` ORDER BY `id`";
$res = mysqli_query($kap, $sql);
$product = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>

<article>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-10 col-md-10">
                <div class="container">

 <?php
foreach ($product as $p) {
            $content = $p["content"];
            $id = $p["id"];
            $price = $p["price"];
            $url= $p["img"];

       
       
             echo "
                <div class='col-md-4'>
                 <div class='panel panel-default  panel--styled prod-cart'>
                            <div class='panel-body'>
                                <div class='col-md-12 panelTop'>
                                    <div class='col-md-12 col-lg-12 col-sm-12'>
                                        <img class='img-responsive' class='col-md-12 col-lg-12 col-sm-12' src='$url' alt=''/>                                            </div>
                                    <div class='col-md-12'>
                                        <h2>$content</h2>
                                        <p></p>
                                    </div>
                                </div>
                                
                                <div class='col-md-12 panelBottom'>
                                    <div class='col-md-4 text-left'>
                                        <h5>Price <span class='itemPrice'>$price<span>Դր.</span></span></h5>
                                    </div>
                                    <div class='col-md-4 text-center'>
                                        <a href='descr.php?id=$id'><button class='btn btn-sm btn-add-to-cart'><span class='glyphicon glyphicon-shopping-cart '></span>   see more</button></a>
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
