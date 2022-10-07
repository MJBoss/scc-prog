<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem11" && $_SESSION["code"] == "onumif")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Admitted Admission</h2>
                        <h3>The problem:</h3>
                        <p>Write a C program to find the eligibility of admission for a professional course based on the following criteria:
                        </p>

                        <ul>
                            <li>Marks in Maths >=65</li>
                            <li>Marks in Phy >=55</li>
                            <li>Marks in Chem>=50</li>
                            <li>Total in all three subject >=190</li>
                            <li>or</li>
                            <li>Total in Math and Physics >=140</li>
                        </ul>
                   
                   
                            <h3>Output:</h3>
                            Eligibility Criteria :
                                <!-- Marks in Maths >=65
                                and Marks in Phy >=55
                                and Marks in Chem>=50
                                and Total in all three subject >=190
                                or Total in Maths and Physics >=140
                                -------------------------------------
                                Input the marks obtained in Physics :65
                                Input the marks obtained in Chemistry :51
                                Input the marks obtained in Mathematics :72
                                Total marks of Maths, Physics and Chemistry : 188
                                Total marks of Maths and  Physics : 137
                                The candidate is not eligible. -->
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