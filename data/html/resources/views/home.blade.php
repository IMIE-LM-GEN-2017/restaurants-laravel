@extends('template.default')
        <!DOCTYPE html>
<html>
<head>
    <title>Pour les gourmands</title>

    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/welcome.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>








    <h1>Pour les gourmands!</h1>


</head>



</br>
</br>

<body>

<nav id="menu">
    <div class="menu menu-horizontal table">
        <div id="contenu">
            <div id="screen">
            </div>

            <div id="login">
                <form id="login-form" method="post" action="/ident/login/">
                    <div id="loginpseudo">
                        <label for="login-name">
                                <span>Pseudo :
                                </span>
                            <input id="login-name" class="input-mini" type="text" title="pseudo" value="" name="name"/>
                        </label>
                        <label for="login-pass">
                                <span>Mot de passe :
                                </span>
                            <input id="login-pass" class="input-mini" type="password" title="mot de passe" value="" name="password"/>
                        </label>
                        <a><input class="btnA1 btn-default"  type="button" id="login-submit" type="submit" name="login-submit" value="Valider"/>
                        </a>
                    </div>

                </form>
            </div>
        </div>







        <a><input href="Inscriptions.html"class="btnA btn-default "  type="button" value="Inscription"/></a>
        <a><input href="reservation.html"class="btnA btn-default"  type="button" value="Reservation"/></a>
        <a><input href="Listeresto.html"class="btnA btn-default"  type="button" value="Restaurant"/></a>


    </div>

    <div class="row">


        <div class="restaurant">
            <p>Bienvenue sur notre site "Pour les gourmands", un site de réservation pour ceux qui souhaites trouver un restaurant sur Le Mans sans difficultés. Nous mettons également à votre disposition des activités proche du restaurant choisi ainsi que les transports pour y accéder. </p>

            <table  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><a href="Laplanchagourmande.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/0d/e6/fa/4f/photo1jpg.jpg" style="width:200px; height:200px; margin-left:500px; "alt="Laplanchagourmande" ></a></td>
                    <td><a href="Lenezrouge.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/09/6f/f2/ea/photo0jpg.jpg" style="width:200px; height:200px; margin-left:2.5px"alt="Lenezrouge"href="Lenezrouge.html" ></a></td>
                    <td><a href="LetablierdeJaures.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/09/b3/3a/dc/le-tablier-de-jaures.jpg" alt="LetablierdeJaures" style="width:200px; height:200px;"></a></td>
                </tr>
                <tr>
                    <td><a href="Lavieilleporte.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/08/c4/4c/d2/la-vieille-porte.jpg" alt="Lavieilleporte"style="width:200px; height:200px;margin-left:500px"></td>
                    <td><a href="Legrenierasel.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/08/fa/c0/e6/le-grenier-a-sel.jpg" alt="Le grenier à sel" style="width:200px; height:200px;  margin-left:2.5px"></td>
                    <td><a href="Leparvissthilaire.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/0f/d3/07/35/mi-cuit-choccolat.jpg" alt="Le parvis st hilaire"style="width:200px; height:200px;"></td>

                </tr>
                <tr>
                    <td><a href="Lafontainedessaveurs.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/0a/59/e7/7d/la-fontaine-des-saveurs.jpg" alt="La fontaine des saveurs" style="width:200px; height:200px;margin-left:500px"></td>
                    <td><a href="Aubergedebagatelle.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/0f/42/6a/d1/photo2jpg.jpg" alt="Auberge de bagatelle" style="width:200px; height:200px;  margin-left:2.5px"></td>
                    <td><a href="Lebellifontain.html"><IMG SRC="https://media-cdn.tripadvisor.com/media/photo-s/0e/31/84/e4/photo2jpg.jpg" alt="Le Bellifontain" style="width:200px; height:200px;  "></td>
                </tr>
            </table>



        </div>


</body>


</html>