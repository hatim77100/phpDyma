<pre>
<?php

print_r($_POST);
// pour se protéger on utilise ces méthodes
//# filter_var();
$text = "jean(du52)@-toto.fr";
$text2 = "1,110.5";
echo $text2;
echo "<br/>";
// echo filter_var($text, FILTER_SANITIZE_EMAIL);
echo filter_var($text2, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND);

?>
</pre>
<h1>Bonjour <?= isset($firstname) ? $firstname : '!'?></h1>
<form action="index.php" method="POST">
    <div>
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname">
    </div>
    <!-- <div>
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div style="margin-top: 1rem;">
        <label for="Date">Date</label>
        <input type="date" name="Date" id="Date">
    </div>
    <div style="margin-top: 1rem;">
        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email">
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
    </div>
    <br> -->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>


