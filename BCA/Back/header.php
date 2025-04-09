<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BCA: Bonsai Coach Academie</title>
    <meta name="description" content="Plateforme d'apprentissage de l'art du bonsaï">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <script src="https://kit.fontawesome.com/b30f5d3ef8.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">

        <?php

        session_start();

        if (isset($_COOKIE['mail']) || isset($_SESSION['mail'])) {
            $id = isset($_COOKIE['mail']) ? $_COOKIE['mail'] : $_SESSION['mail'];
            echo '
            <nav>
                <ul id="connection">
                    <li id="signup">
                        <i class="fas fa-user"></i> ' . $id . '
                    </li>
                    <li>
                        <i class="fas fa-lock"></i> <a href="userPasswordReset.php">Change password</a>
                    </li>
                    <li id="signout">
                        <a href="userDisconnection.php"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </nav>
            ';
        } else {
            echo '
            <nav>
                <ul id="connection">
                    <li id="signup">
                        <a href="userRegistrationForm.php"><i class="fas fa-user-plus"></i> Inscription</a>
                    </li>
                    <li id="signin">
                        <a href="userConnectionForm.php"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
                </ul>
            </nav> 
            ';
        }
        ?>

        <section>
            <div id="inside">
                <header>
                    <div class="cleared"></div>
                    <h1>Bonsai Coach Academie</h1>
                    <p>Plateforme d'apprentissage de <em>l'art du bonsaï</em></p>

                </header>


                <div class="square">
                    <div class="squareLeft"><i class="fa fa-circle"></i> Non suivi</div>
                    <div class="squareMiddle">Socle numérique 1</div>
                    <div class="squareRight"><a href=""><i class="fa fa-play"></i> Suivre</a></div>
                </div>

                <div class="square">
                    <div class="squareLeft"><i class="fa fa-circle"></i> Non suivi</div>
                    <div class="squareMiddle">Socle numérique 2</div>
                    <div class="squareRight"><a href=""><i class="fa fa-play"></i> Suivre</a></div>
                </div>

                <div class="square">
                    <div class="squareLeft"><i class="fa fa-circle"></i> Non suivi</div>
                    <div class="squareMiddle">POEC Dev Cyber</div>
                    <div class="squareRight"><a href=""><i class="fa fa-play"></i> Suivre</a></div>
                </div>

                <p id="badge">Badges : <i class="fa fa-circle"></i> Non suivi <i class="fa fa-graduation-cap"></i>
                    Apprenti <i class="fa fa-code"></i> Développeur <i class="fa fa-hand-holding-medical"></i> Passeur
                    <i class="fa fa-star"></i> Guide
                </p>
            </div>
        </section>
    </div>
    <div id="background">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>

</body>