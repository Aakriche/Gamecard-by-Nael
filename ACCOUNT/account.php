<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="account.css">
    <title>SIGN UP</title>
</head>

<body>


    <div class="FORM">

        <div class="FORM-text">
            <header><a href="../home.php">Game Card</a></header>
   
           
            <img src="../img-site/bo.png" width="150px">
            <p>Best Score</p><br>
            <p></p>
            <h1>Account</h1>
            <?php
                        if (isset($_GET['error'])){
                            if($_GET['error']=="usernametaken"){
                                echo'<p class="msg-erreur">Pseudo déjà pris !</p>';
                            } else if($_GET['error']=="emptyfields"){
                                echo'<p class="msg-erreur">Champs vides !</p>';
                            } else if($_GET['error']=="success"){
                                echo'<p class="msg-erreur">Mise à jour effectuée !</p>';
                            } 
                        }

                    ?>

            <form action="../extern/account.ext.php" method="post">

                <label>update name</label> <br>
                <input type="text" name="prenom" placeholder="Modifier votre prenom"> <br>


                <label>update username</label> <br>
                <input type="text" name="username" placeholder="Modifier votre nom d'utilisateur">

                <br>


                <button type="submit" name="validate-submit">Valider</button>



            </form>
            <form action="../extern/delete.ext.php" method="post">

                <button type="submit" name="delete-submit">Delete Account</button>
              
            </form>


        </div>

    </div>

</body>










</html>
