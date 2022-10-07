<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem22" && $_SESSION["code"] == "agonoh")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Temp temp temp</h2>
                        <h3>The problem:</h3>
                        <p>Write a C program to read temperature in centigrade and display a suitable message according to temperature state below : 

                        <ul>
                            <li>Temp < 0 then Freezing weather</li>
                            <li>Temp 0-10 then Very Cold weather</li>
                            <li>Temp 10-20 then Cold weather</li>
                            <li>Temp 20-30 then Normal in Temp</li>
                            <li>Temp 30-40 then Its Hot</li>
                            <li>Temp >=40 then Its Very Hot</li>
                        </ul>
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