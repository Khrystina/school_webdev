<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>H2O Empire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/solar/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>

    <body>
	    <header>
	        <img src="img/logo.png" alt="H2O Empire">
	        
	        <?php include '../resources/navigation.php'; ?>

          </div>
        </nav>
	        <hr>
	    </header>


        <p>
            <a class="btn btn-secondary" href="login.php" role="button">Login</a>  
            <a class="btn btn-secondary" href="signup.php" role="button">Sign-up</a>
        </p>

        <div class="container">

            <h2>About us!</h2>

            <p>
                H2O Empire was created by Blake Dalmas and Tanner Alderson.<br>
                You can contact us with the information below:
            </p>

            <table>
                <thead>
                    <tr>
                        <th><span id ="contactinfo">Name</span></th>
                        <th><span id ="contactinfo2">Email</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Blake Dalmas</td>
                        <td>blake.dalmas@my.simpson.edu</td>
                    </tr>

                    <tr>
                        <td>Tanner Alderson</td>
                        <td>Tanner.alderson@my.simpson.edu</td>
                    </tr>   
                </tbody>
            </table>

            <p>
                <i>You can also contact our legal team at 712-308-4640</i>
            </p>

            <h3>Our Staff:</h3>

            <ul>
                <li>Chief Executive Officer: Tanner Alderson</li>
                <li>Chief Financial Officer: Blake Dalmas</li>
                <li>Chief Administrative Officer: Blake Dalmas</li>
                <li>Chief Information Officer: Tanner Alderson</li>
                <li>Chief Operations Officer: Blake Dalmas</li>
                <li>Chief Technology Officer: Blake Dalmas</li>
                <li>Human Resources (Senior Executive): Tanner Alderson</li>
                <li>Marketing / Communications Executive: Tanner Alderson</li>
            </ul>

            <p>
                You can also stop by our office at any time!
                <br><br>
                We are located at 605 N D st, Indianola, Iowa.
                <br><br>
                We are open Monday-Friday from 8:00am to 5:00 pm.
            </p>
            
            <?php include '../resources/footer.php'; ?>
        
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>