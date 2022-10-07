<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem17" && $_SESSION["code"] == "ixedix")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Bank Charges</h2>
                        <h3>The problem:</h3>
                        <p>A bank account charges $10 per month plus the following check fees for a commercial checking account:</p>

                            <ul>
                                <li>$.10 each for fewer than 20 checks</li>
                                <li>$.08 each for 20-39 checks</li>
                                <li>$.06 each for 40-59 checks</li>
                                <li>$.04 each for 60 or more checks</li>
                            </ul>
                        
                        <h3>Level Up:</h3>
                            <ul>
                            <li>Create a function called checkFee that returns a double to calculate the total check fee into this function.</li>
                            <li>Write a unit test for checkFee and for the determining the check fees, is there an error?</li>
                        </ul>
                        
                            <h3>Output:</h3>
                            <p>Not Available ...</p>
                            
                            
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