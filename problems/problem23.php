<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem23" && $_SESSION["code"] == "awodug")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Electrify</h2>
                        <h3>The problem:</h3>
                        <p>Write a program in C to calculate and print the Electricity bill of a given customer. The customer id., name and unit consumed by the user should be taken from the keyboard and display the total amount to pay to the customer. The charge are as follow:

                        </p>

                        <ul>
                            <li>upto 199	@1.20</li>
                            <li>200 and above but less than 400	@1.50</li>
                            <li>400 and above but less than 600	@1.80</li>
                            <li>600 and above	@2.00</li>
                        </ul>
                   
            
                         

                            <h3>Output:</h3>
                            <!-- <p>Expected Output :
                                Customer IDNO :1001
                                Customer Name :James
                                unit Consumed :800
                                Amount Charges @Rs. 2.00 per unit : 1600.00
                            </p> -->
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