<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem14" && $_SESSION["code"] == "ebicev")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Body Masser Index</h2>
                        <h3>The problem:</h3>
                        <p>Write a program that calculates and displays a person's body mass index (BMI). A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2. Where weight is measured in pounds and height is measured in inches. Display a message indicating whether the person has optimal weight, is underweight, or is overweight. A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25. If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.
                        </p>

                            <h3>Output:</h3>

                            <!-- This program will calculate your body mass index, or BMI.
                            Enter your weight, in pounds: 220
                            Enter your height, in inches: 68
                            Your body mass index (BMI) is 33.44723183391003
                            You are overweight. -->
                  
                            <p>Not Available ...</p>

                            <img src="../images/BMI.png" alt="Girl in a jacket" style="width: 75%;">
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