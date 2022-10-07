<?php


if($_POST["location"] == "problem1"){
    $code ="upegat";
}else if($_POST["location"] == "problem2"){
    $code ="akicag";
}else if($_POST["location"] == "problem3"){
    $code ="uzekos";
}else if($_POST["location"] == "problem4"){
    $code ="ufusem";
}else if($_POST["location"] == "problem5"){
    $code ="oxitor";
}else if($_POST["location"] == "problem6"){
    $code ="oguduc";
}else if($_POST["location"] == "problem7"){
    $code ="uzabah";
}else if($_POST["location"] == "problem8"){
    $code ="ucetar";
}else if($_POST["location"] == "problem9"){
    $code ="egafev";
}else if($_POST["location"] == "problem10"){
    $code ="ugazud";
}else if($_POST["location"] == "problem11"){
    $code ="onumif";
}else if($_POST["location"] == "problem12"){
    $code ="azetis";
}else if($_POST["location"] == "problem13"){
    $code ="ebuyib";
}else if($_POST["location"] == "problem14"){
    $code ="ebicev";
}else if($_POST["location"] == "problem15"){
    $code ="ozomiz";
}else if($_POST["location"] == "problem16"){
    $code ="akifif";
}else if($_POST["location"] == "problem17"){
    $code ="ixedix";
}else if($_POST["location"] == "problem18"){
    $code ="evayux";
}else if($_POST["location"] == "problem19"){
    $code ="iwejup";
}else if($_POST["location"] == "problem20"){
    $code ="imahuh";
}else if($_POST["location"] == "problem21"){
    $code ="ocovaq";
}else if($_POST["location"] == "problem22"){
    $code ="agonoh";
}else if($_POST["location"] == "problem23"){
    $code ="awodug";
}else if($_POST["location"] == "problem24"){
    $code ="ewavas";
}else if($_POST["location"] == "problem25"){
    $code ="ocokev";
}else if($_POST["location"] == "problem26"){
    $code ="eboduj";
}else if($_POST["location"] == "problem27"){
    $code ="ijasub";
}else if($_POST["location"] == "problem28"){
    $code ="aratig";
}else if($_POST["location"] == "problem29"){
    $code ="awekih";
}else if($_POST["location"] == "problem30"){
    $code ="aqajob";
}else{
    $code = "error";
}

if (isset($_POST["continue"]) && $_POST["code"] == $code){
    var_dump($_POST);
    session_start();

    $_SESSION["continue"] = "continue";
    $_SESSION["code"] = $_POST["code"];
    $_SESSION["location"] = $_POST["location"];

    var_dump($_SESSION);

    $url = "location:../problems/".$_POST["location"].".php";
    header($url);
}else{

    
    $url = "location:../index.php?error=invalidcode";
    header($url);
}




?>