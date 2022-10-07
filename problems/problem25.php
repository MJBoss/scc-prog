<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem25" && $_SESSION["code"] == "ocokev")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Third degree num</h2>
                        <h3>The problem:</h3>
                        <p>Write a C program to perform addition, subtraction, multiplication,  division, average of three numbers, also include finding the maximum value of the three input.
                        </p>
                   
                   
                            <h3>Output:</h3>
                            <!-- Test Data :
                            Input the grade :A
                            Expected Output :
                            You have chosen : Average -->
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