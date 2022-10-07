<?php
  include_once '../templates/header.php'
?>

<?php
    session_start();

    if(!(isset($_SESSION["continue"]) && $_SESSION["location"] == "problem19" && $_SESSION["code"] == "iwejup")){
        header("location:../index.php?error=wrongcode");
    }
?>

            <div class="row">
                <div class="column-pr">
                    <div class="card-pr">
                        <h2>Book Club Points</h2>
                        <h3>The problem:</h3>
                        <p>Serendipity Booksellers has a book club that awards points to its customers based on the number of books purchased each month. The points are awarded as follows:</p>
                            <ul>
                                <li>If a customer purchases 0 books, he or she earns 0 points.</li>
                                <li>If a customer purchases 1 book, he or she earns 5 points.</li>
                                <li>If a customer purchases 2 books, he or she earns 15 points.</li>
                                <li>If a customer purchases 3 books, he or she earns 30 points.</li>
                                <li>If a customer purchases 4 or more books, he or she earns 60 points.</li>
                            </ul>
                        <p>Write a program that asks the user to enter the number of books that he or she has purchased this month and displays the number of points awarded.</p>

                       
                        
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