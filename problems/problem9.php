<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem9" && $_SESSION["code"] == "egafev")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>A B C D E F GRADES</h2>
                        <h3>The problem:</h3>
                        <p>Write a program in C to accept a grade and declare the equivalent description : 
                        </p>
                        <ul>
                            <li>E   -	Excellent</li>
                            <li>V	-   Very Good</li>
                            <li>G	-   Good</li>
                            <li>A	-   Average</li>
                            <li>F	-   Fail</li>
                        </ul>
                   
            
                         

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