<?php
  include_once 'templates/header.php'
  
?>
<?php

    
    if(!(empty($_GET))){
    if($_GET["error"] == "invalidcode"){
        echo "<script type='text/javascript'> alert('Invalid Code');</script>";
        
    }
}

    session_start();

    if(isset($_SESSION["continue"])){
        
        $url ="location:problems/".$_SESSION["location"].".php";
        //echo $url;
        header($url);
        //header("location:problem/?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <h2>Problem 1</h2>
                        <p>Restaurant Bill</p>
                        <input type="hidden" value="problem1" id="p1">
                        <button class="button" onclick='getProb("problem1");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                <div class="card">
                    <h2>Problem 2</h2>
                    <p>Bank Charges</p>
                    <input type="hidden" value="problem2" id="prop">
                    <button class="button" onclick='getProb("problem2");' style="vertical-align:middle"><span>See Details </span></button>
                </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 3</h2>
                    <p>TestScores</p>
                    <button class="button" onclick='getProb("problem3");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <h2>Problem 4</h2>
                        <p>Book Club Points</p>
                        <button class="button" onclick='getProb("problem4");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                <div class="card">
                    <h2>Problem 5</h2>
                    <p>Budget Analysis</p>
                    <button class="button" onclick='getProb("problem5");' style="vertical-align:middle"><span>See Details </span></button>
                </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 6</h2>
                    <p>Pennies for pay</p>
                    <button class="button" onclick='getProb("problem6");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 7</h2>
                    <p>Temp temp temp</p>
                    <button class="button" onclick='getProb("problem7");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 8</h2>
                    <p>Elecrify</p>
                    <button class="button" onclick='getProb("problem8");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 9</h2>
                    <p>A B C D E F GRADES</p>
                    <button class="button" onclick='getProb("problem9");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 10</h2>
                    <p>Third degree num</p>
                    <button class="button" onclick='getProb("problem10");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 11</h2>
                    <p>Admitted Admission</p>
                    <button class="button" onclick='getProb("problem11");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 12</h2>
                    <p>Bill Divider</p>
                    <button class="button" onclick='getProb("problem12");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                    <h2>Problem 13</h2>
                    <p>Pay Day</p>
                    <button class="button" onclick='getProb("problem13");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
            
                <div class="column">
                    <div class="card">
                    <h2>Problem 14</h2>
                    <p>Body Masser Index</p>
                    <button class="button" onclick='getProb("problem14");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
            
                <div class="column">
                    <div class="card">
                    <h2>Problem 15</h2>
                    <p>Gross Sal</p>
                    <button class="button" onclick='getProb("problem15");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h2>Problem 16</h2>
                        <p>Restaurant Bill</p>
                        <input type="hidden" value="problem1" id="p1">
                        <button class="button" onclick='getProb("problem16");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                <div class="card">
                    <h2>Problem 17</h2>
                    <p>Bank Charges</p>
                    <input type="hidden" value="problem2" id="prop">
                    <button class="button" onclick='getProb("problem17");' style="vertical-align:middle"><span>See Details </span></button>
                </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 18</h2>
                    <p>TestScores</p>
                    <button class="button" onclick='getProb("problem18");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <h2>Problem 19</h2>
                        <p>Book Club Points</p>
                        <button class="button" onclick='getProb("problem19");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                <div class="card">
                    <h2>Problem 20</h2>
                    <p>Budget Analysis</p>
                    <button class="button" onclick='getProb("problem20");' style="vertical-align:middle"><span>See Details </span></button>
                </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 21</h2>
                    <p>Pennies for pay</p>
                    <button class="button" onclick='getProb("problem21");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 22</h2>
                    <p>Temp temp temp</p>
                    <button class="button" onclick='getProb("problem22");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 23</h2>
                    <p>Elecrify</p>
                    <button class="button" onclick='getProb("problem23");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 24</h2>
                    <p>A B C D E F GRADES</p>
                    <button class="button" onclick='getProb("problem24");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 25</h2>
                    <p>Third degree num</p>
                    <button class="button" onclick='getProb("problem25");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 26</h2>
                    <p>Admitted Admission</p>
                    <button class="button" onclick='getProb("problem26");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                    <h2>Problem 27</h2>
                    <p>Bill Divider</p>
                    <button class="button" onclick='getProb("problem27");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                    <h2>Problem 28</h2>
                    <p>Pay Day</p>
                    <button class="button" onclick='getProb("problem28");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
            
                <div class="column">
                    <div class="card">
                    <h2>Problem 29</h2>
                    <p>Body Masser Index</p>
                    <button class="button" onclick='getProb("problem29");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>
            
                <div class="column">
                    <div class="card">
                    <h2>Problem 30</h2>
                    <p>Gross Sal</p>
                    <button class="button" onclick='getProb("problem30");' style="vertical-align:middle"><span>See Details </span></button>
                    </div>
                </div>  
            
            </div>
           
            
        </div>

        <?php
            include_once 'templates/footer.php'
        ?>


        <div id="id01" class="modal">
        
        <form class="modal-content animate" action="includes/auth.inc.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/ITDEPTLOGO.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="uname"><b>Enter Code</b></label>
            <input type="password" placeholder="Enter Code" name="code" required>

            <input type="hidden" id="modalloc" name="location">
            <button type="submit" name="continue">Continue</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
        </div>

        
    </body>


</html>