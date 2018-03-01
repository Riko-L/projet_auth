<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<h1>Login</h1>
<?php

if (isset($_SESSION['message'])) {
    echo '<p style="color:red">' . $_SESSION['message'] . '</p>';
}
?>
<form action="/" method="post">
    <fieldset>
        <legend>Connection</legend>

        <label for="login">Login: </label>
        <input type="text" name="login" id="login" value="" placeholder="Votre login">

        <label for="psswd">Mot de passe : </label>
        <input type="password" name="passwd" id="psswd" placeholder="Votre mot de passe">

        <label for="remember">Se souvenir</label>
        <input type="checkbox" name="remember" id="remember">

        <button type="submit">Valider</button>


    </fieldset>
</form>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/?page=logout">Compte</a></li>

</ul>
</body>
</html>