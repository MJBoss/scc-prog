<?php

    $cur_dir = explode('\\', getcwd());
    $loc = $cur_dir[count($cur_dir)-1];
    if($loc == "problems"){
    $dir_loc = "../";
    }else{
    $dir_loc = "";
    } 


?>



<!DOCTYPE html>

    <head>
        
        <title>Programming Problems</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $dir_loc?>css/style.css">
        <link rel="stylesheet" href="<?php echo $dir_loc?>css/modal.css">
    </head>

    <body>
        <div class="main">
            <div class="header">
                <h1>Programming Problems</h1>
                <h3>Good Luck and Happy Coding</h3>
            </div>

            <div class="topnav">
                <a href="<?php echo $dir_loc ?>index.php">Home</a>
                <a href="../../W3Schools/java">Learn Java</a>
                <a href="../W3Schools/c">Learn C</a>
            </div>