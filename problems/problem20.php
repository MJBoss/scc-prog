<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem20" && $_SESSION["code"] == "imahuh")){
        header("location:../index.php?error=wrongcode");
    }
?>


            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Budget Analysis</h2>
                        <h3>The problem:</h3>
                        <p>Write a program that asks the user to enter the amount that he or she has budgeted for a month. Then prompt the user to enter 5 different expenses for the month and calculate the total of all these expenses. The program then should display wether the user is over the budget, under budget, or did the exact expense.</p>
                            <h3>Output:</h3>
                            <p>Not Available ...</p>
                            
                            <!-- <img src="../images/p2.png" alt="Girl in a jacket" style="width: 75%;"> -->
                            <h5><a href="../includes/unauth.inc.php">Back to Problems</a></h5>
                        
                    </div>
                </div>
                
            </div>
        </div>

        <?php
            include_once '../templates/footer.php'
        ?>

        
    </body>


</html>