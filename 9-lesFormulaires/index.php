<pre>
<?php

print_r($_POST);
// pour se protéger on utilise ces méthodes
//# filter_var();
// $text = "jean(du52)@-toto.fr";
// $text2 = "1,110.5";
// echo $text2;
// echo "<br/>";
// #echo filter_var($text, FILTER_SANITIZE_EMAIL);
// echo filter_var($text2, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND);

//# filter_var_array()
// $arr = [
//     'email' => 'jean(a)@<gmail>.com',
//     'text' => '<script> const a = 1</script>',
//     'number' => 'aa12aa'
// ];

// print_r(filter_var_array($arr,[
//     'email' => FILTER_SANITIZE_EMAIL,
//     'text' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
//     'number' => FILTER_SANITIZE_NUMBER_INT
// ]));

//# filter_input() ET filter_input_array()
// echo filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// echo "<br/>";
// print_r(filter_input_array(INPUT_POST,[
//     'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
//     'Email' => FILTER_SANITIZE_EMAIL,
// ]));


// ####on va appliquer les filtres sur tout nos champs
//$_POST = filter_input_array(INPUT_POST, [
//    'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
//    'Email' => FILTER_SANITIZE_EMAIL,
    // 'date' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    // 'gender' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    // 'cgu' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    // 'favorite' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
//]);

//##Valider les données utilisateur

const ERROR_REQUIRE = 'Veuillez renseigner ce champ';
const ERROR_LENGTH = 'Le champ doit faire entre 2 et 10 caractères';
const ERROR_EMAIL = "L'email n'est pas valide";

$errors = [
    'firstname' => '',
    'Email' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, [
        'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'Email' => FILTER_SANITIZE_EMAIL,
    ]);

    $firstname = $_POST['firstname'] ??'';
    $email = $_POST['Email'] ?? '';

    if (!$firstname) {
        $errors['firstname'] = ERROR_REQUIRE;
    } elseif (mb_strlen($firstname) < 2 || mb_strlen($firstname) > 10) {
        $errors['firstname'] = ERROR_LENGTH;
    }

    if (!$email) {
        $errors['Email'] = ERROR_REQUIRE;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email'] = ERROR_EMAIL;
    }
 }

?>
</pre>
<h1>Bonjour <?= isset($firstname) ? $firstname : '!' ?></h1>
<form action="/" method="POST">
    <div>
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" value=<?= isset($firstname) ? "$firstname" : "" ?>><br>
        <?= $errors['firstname'] ? '<p style="color: red">' . $errors['firstname'] . "</p>" : ''?>
    </div>
    <div style="margin-top: 1rem;">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname">
    </div>

    <div style="margin-top: 1rem;">
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" value=<?= isset($email) ? "$email" : "" ?>>
        <?= $errors['Email'] ? '<p style="color: red">' . $errors['Email'] . "</p>" : '' ?>
    </div>
    <!-- <div style="margin-top: 1rem;">
        <label for="Date">Date</label>
        <input type="date" name="Date" id="Date">
    </div>
    
    <div style="margin-top: 1rem;">
        <label for="femelle">femelle</label>
        <input type="radio" name="gender" id="femelle" value="femelle">
        <label for="male">male</label>
        <input type="radio" name="gender" id="male" value="male">
    </div>
    <div style="margin-top: 1rem;">
        <label for="cgu">cgu</label>
        <input type="checkbox" name="cgu" id="cgu">
    </div>
    <div style="margin-top: 1rem;">
        <label for="favorite">favorite</label>
        <select name="favorite" id="favorite">
            <option value="wifi">wifi</option>
            <option value="tv">tv</option>
            <option value="fibre">fibre</option>
        </select>
    </div> -->
    <br>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>