<?php
  include_once '../templates/header.php'

?>


<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem16" && $_SESSION["code"] == "akifif")){
        header("location:../index.php?error=wrongcode");
    }
?>
            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Restaurant Bill</h2>
                        <h3>The problem:</h3>
                        <p>Write a program that computes the tax and tip for a restaurant bill. User is to enter the total amount of the bill. Tax is 6.75% of the bill. The tip is 15% of the meal after tax has been added. The meal charge, tax, tip, and total should be printed on the screen.</p>

                        <h3>Level Up:</h3>
                            <ul>
                                <li>Allow tax rate and tip to be inputed by userA</li>
                                <li>Validate user input charge of the meal</li>
                                <li>Pretty up ouput</li>
                                <li>Clean code with proper indentions</li>
                            </ul>
                        
                            <h3>Output:</h3>
                            
                            <img src="../images/p1.png" alt="Girl in a jacket" style="width: 75%;">
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