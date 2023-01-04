<?php
const ERROR_REQUIRED = 'Veuillez renseigner ce champ';
const ERROR_TITLE_TOO_SHORT = 'Le titre est trop court';
const ERROR_CONTENT_TOO_SHORT = 'L\'article est trop court';
const ERROR_IMAGE_URL = 'L\'image doit être une url valide';

$errors = [
    'title' => '',
    'image' => '',
    'category' => '',
    'content' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_POST = filter_input_array(INPUT_POST, [
    'title' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'image' => FILTER_SANITIZE_URL,
    'category' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'content' => [
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'flags' => FILTER_FLAG_NO_ENCODE_QUOTES,
    ]
    ]);
    $title = $_POST['title'] ?? '';
    $image = $_POST['image'] ?? '';
    $category = $_POST['category'] ?? '';
    $content = $_POST['content'] ?? '';

    if(!title) {
        $errors['title'] = GlobalERROR_REQUIRED;
    } else (mb_strlen($title) < 5) {
        $errors['title'] = ERROR_TOO_SHORT;
    }
    if(!image) {
        $errors['image'] = GlobalERROR_REQUIRED;
    } else (mb_strlen($title) < 5) {
        $errors['image'] = ERROR_TOO_SHORT;
    }
};

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once './includes/head.php' ?>
    <link rel="stylesheet" href="./public/css/add-article.css">
    <title>Créer un article</title>
</head>

<body>
    <div class="container">
        <?php require_once './includes/header.php' ?>
        <div class="content">
            <div class="block p-20 form-container">
                <h1>Écrire un article</h1>
                <form action="/add-article.php" method="POST">
                    <div class="form-control">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title">
                        <!-- <p class="text-error"></p> -->
                    </div>
                    <div class="form-control">
                        <label for="image">Image</label>
                        <input type="text" name="image" id="image">
                        <!-- <p class="text-error"></p> -->
                    </div>
                    <div class="form-control">
                        <label for="category">Catégorie</label>
                        <select name="category" id="category">
                            <option value="technology">Technologie</option>
                            <option value="nature">Nature</option>
                            <option value="politic">Politique</option>
                        </select>
                        <!-- <p class="text-error"></p> -->
                    </div>
                    <div class="form-control">
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content"></textarea>
                        <!-- <p class="text-error"></p> -->
                    </div>
                    <div class="form-action">
                        <a href="/" type="button" class="btn btn-secondary mr-4">Annuler</a>
                        <a href="/" type="button" class="btn btn-primary">Sauvegarder</a>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once './includes/footer.php' ?>
    </div>
</body>

</html>