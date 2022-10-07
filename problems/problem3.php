<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem3" && $_SESSION["code"] == "uzekos")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>TestScores</h2>
                        <h3>The problem:</h3>
                        <p>Design a Test Scores Average program that returns the average of the test scores. The program should ask the user to enter 5 test scores from five different subjects with a perfect score of 100 from each test. Then the program should display the average of the scores, after getting the average test score, display a message base on average as follows:</p>


                        <ul>
                            <li>Below 70 "Fail"</li>
                            <li>Between 70-75 "Pass"</li>
                            <li>Between 76-80 "Good"</li>
                            <li>Above 81 "Excellent"</li>
                        </ul>
                        
                            <h3>Output:</h3>
                            <p>Not Available ...</p>
                            
                            <!-- <img src="../images/p2.png" alt="Girl in a jacket" style="width: 75%;">
                            <h5><a href="../includes/unauth.inc.php">Back to Problems</a></h5> -->

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