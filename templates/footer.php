<?php
    $cur_dir = explode('\\', getcwd());
    $loc = $cur_dir[count($cur_dir)-1];
    if($loc == "problems"){
    $dir_loc = "../";
    }else{
    $dir_loc = "";
    } 
?>

<div class="footer">
    <img src="<?php echo $dir_loc?>images/scc.png" alt="SCC Logo">
</div>

<script src="<?php echo $dir_loc?>js/modal.js"></script>