<?php

    $header= "Programming Problems";
    $cur_dir = explode('\\', getcwd());
    $loc = $cur_dir[count($cur_dir)-1];
    if($loc == "problems"){
    $dir_loc = "../";
    }else if($loc == "it306"){
    $dir_loc = "../";
    $header = "Photography Basics";
    }else{
    $dir_loc = "";
    } 


?>



<!DOCTYPE html>

    <head>
        
        <title>Sir Mike's</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $dir_loc?>css/style.css">
        <link rel="stylesheet" href="<?php echo $dir_loc?>css/modal.css">
    </head>

    <body>
        <div class="main">
            <div class="header">
                <h1><?php echo $header?></h1>
                <h3>Welcome to Sir Mike's Class</h3>
            </div>

            <div class="topnav">
                <a href="<?php echo $dir_loc ?>index.php">Home</a>
                <a href="../../W3Schools/java">Learn Java</a>
                <a href="../W3Schools/c">Learn C</a>
                <a href="<?php echo $dir_loc?>it306/photograph.php">Photography</a>
            </div>