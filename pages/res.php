<?php include("../inc/settings.php"); ?>
<?php include("../inc/connection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("../templates/tpl_meta.php"); ?>
        <?php include("../templates/tpl_styles.php"); ?>
        <title>Search Results</title>
        <link rel="shortcut icon"  href="../images/search.ico">
        <style type="text/css">
            #list,#list2{
                color:black;
            }
        </style>
    </head>
    <body class = "big-box" style="background-image:url('../images/sbg.jpg')">
    <div class="searchbox">

</div>
        <?php include("../templates/tpl_header.php"); ?>
        <?php include("../templates/tpl_res_content.php"); ?>
        <?php include("../templates/tpl_footer.php"); ?>
        <?php include("../templates/tpl_scripts.php"); ?>
    </body>
</html>