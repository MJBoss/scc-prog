<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem12" && $_SESSION["code"] == "azetis")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Bill Divider</h2>
                        <h3>The problem:</h3>
                        <p>Write a C program to accept the total amount bill for the customer, the program should ask the customer wether to divide the payment or not, if the customer type yes, the program should then prompt the customer asking the number of friends, then divide the total bill to the number of friends inputted from the customer, if the customer type no the program will display the total bill automatically.
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