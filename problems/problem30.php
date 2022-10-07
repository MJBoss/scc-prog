<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem30" && $_SESSION["code"] == "aqajob")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Gross Sal</h2>
                        <h3>The problem:</h3>
                        <p>Write a program to accept Name and Basic Salary of an employee, then Allowance is 10 percent of that salary and should be added to the basic salary to calculate the total salary for the month.
            <br/><br>
                        Health Benefits is 5 percent of the salary to be deducted from the total salary for this month, by deducting the total amount of health benefits from the total salary you can get the total gross salary for this month.
            <br><br>
                        Display the Employee's Name, Total Allowance, Total Health Benefits, Total Salary and Gross Salary.
                        </p>

                            <h3>Output:</h3>
                        
                            <!-- This program will calculate your body mass index, or BMI.
                            Enter your weight, in pounds: 220
                            Enter your height, in inches: 68
                            Your body mass index (BMI) is 33.44723183391003
                            You are overweight. -->
                  
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