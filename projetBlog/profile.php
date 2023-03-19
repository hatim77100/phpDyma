<?php 
require_once __DIR__ . '/database/database.php';
$authDB = require_once __DIR__ . '/database/security.php';
$articleDB = require_once __DIR__ . '/database/models/ArticleDB.php';

$article = [];
$currentUser = isLoggedin();
if (!$currentUser) {
  header('Location: /');
}

$articles = $articleDB->fetchUserArticle($currentUser['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'includes/head.php' ?>
    <link rel="stylesheet" href="/public/css/profile.css">
    <title>Mon profil</title>
</head>

<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>
        <div class="content">
            <h1>Espace personnel</h1>
            <h2>Informations</h2>
            <div class="info-container">
                <ul>
                    <li>
                        <strong>Prénom :</strong>
                        <p><?= $currentUser['firstname'] ?></p>
                    </li>
                    <li>
                        <strong>Nom :</strong>
                        <p><?= $currentUser['lastname'] ?></p>
                    </li>
                    <li>
                        <strong>Email :</strong>
                        <p><?= $currentUser['email'] ?></p>
                    </li>
                </ul>
            </div>
            <h2>Articles</h2>
            <div class="articles-list">
                <ul>
                    <?php foreach($articles as $a): ?>
                    <li>
                        <span><?= $a['title'] ?></span>
                        <div class="article-action">
                            <a href="/delete-article.php?id=<?= $a['id'] ?>" class="btn btn-primary btn-small">Supprimer</a>
                            <a href="/form-article.php?id=<?= $a['id'] ?>" class="btn btn-secondary btn-small">Modifier</a>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
    </div>

</body>

</html>