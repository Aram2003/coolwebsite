 <?php
    if(isset($_GET["id"])){
        $id = intval($_GET["id"]);
    }
    else{
        $id = 1; 
    }
    $sql = "SELECT `title`,`content` FROM  `pages`  WHERE `id`=$id";
    $res = mysqli_query($kap, $sql);
    $page = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<?php
  if($id==1){
    echo '<div id="Gallery" class="col-md-6">
          <img class="page" src="images/home.jpg">
          <ul id="carousel">
            <li class="abc"> <img class="home"  src="images/home.jpg"></li>
      <li class="abc"> <img class="home1"  src="images/home1.jpg"></li>
      <li class="abc"> <img  class="home2" src="images/home2.jpg"></li> 
    </ul>
    </div>';
  }
?>
<div classs="jur col-md-6">
<?php echo $page[0]["content"] ?>
</div>
