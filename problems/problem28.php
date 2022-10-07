<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem28" && $_SESSION["code"] == "aratig")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Pay Day</h2>
                        <h3>The problem:</h3>
                        <p>Write a C program that accepts an employee's ID, total worked hours for the month and his total slary per hour. Print the employee's ID and salary.
                        </p>

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