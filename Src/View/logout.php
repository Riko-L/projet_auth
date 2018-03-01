<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<h1>Compte</h1>
<?php
if (isset($_SESSION['message'])) {
    echo '<p style="color:red">' . $_SESSION['message'] . '</p>';
}
?>

<p>Bonjour <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : null ?></p>

<div>
    <p>Paramètres Cookies et Sesion: </p>
    <p> - les cookies
        /// <?= isset($_COOKIE['login']) ? 'Votre login est : <strong>' . $_COOKIE['login'] . '</strong> et le mot de passe est : <strong>' . $_COOKIE['passwd'] . ' </strong>' : 'sont vides !' ?> </p>
    <p> - la session
        /// <?= isset($_SESSION['login']) ? 'Votre login est : <strong>' . $_SESSION['login'] . '</strong> et le mot de passe est : <strong>' . $_SESSION['passwd'] . ' </strong>' : 'sont vides !' ?> </p>

</div>

<form action="/?page=logout" method="post">
    <button type="submit" name="logout" value="logout">Me déconnecter</button>
    <button type="submit" name="nocookies" value="nocookies">Suprimer mes cookies et se déconnecter</button>
</form>


<hr>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/?page=logout">Compte</a></li>
</ul>
</body>
</html>