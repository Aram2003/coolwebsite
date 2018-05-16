<?php
$sql =  "SELECT `id`,`title` FROM `pages` ORDER BY `order`";
$res = mysqli_query($kap, $sql);
$pages = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>

<header>
 <img class="image" src="images/asa.png">
 <p class="asd">098319009(Phone 1)<br>098453011(Phone 2)</p>
  

<ul class="menu">
   <?php  foreach ($pages as $p) {
                                $id = $p["id"];
                                $title = $p["title"]; 
                                echo "<li>
                                <a href='index.php?id=$id'>$title</a>
                                </li>";
                            }
                            ?>
  <div class="dropdown">
    <li><a href="pages/store.php">Store</a></li>
    <div class = "dropdown-content">    
    <li><a href ="pages/electronics.php">Electronics</a></li><br>
    <li><a href ="pages/games.php">Game Store</a></li><br>
    </div>
  </div>
</ul>
</header>