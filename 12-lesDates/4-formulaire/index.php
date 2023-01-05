<pre>
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['timezone'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $timezone = $_SESSION['timezone'];

    // $timestamp = strtotime("$date $time");
    // $dateformat = date(DateTime::ATOM, $timestamp);
    $datetime = new DateTime("$date $time", new DateTimeZone(($_SESSION['timezone'])));
    $dateTz = $datetime->format(DateTime::ATOM);
    $datetime->setTimezone(new DateTimeZone('UTC'));
    $dateNoTz =  $datetime->format(DateTime::ATOM);
}

?>
</pre>
<?php if (!isset($_SESSION['timezone'])) : ?>
    <script>
        fetch('/timezone.php', {
            method: "POST",
            body: JSON.stringify({
                timezone: Intl.DateTimeFormat().resolvedOptions().timeZone
            })
        }).the(res => location.reload())
    </script>
<?php endif; ?>
<form action="/" method="POST">
    <input type="date" name="date">
    <input type="time" name="time">
    <button>submit</button>
</form>

<h1>Timezone : <?= $timezone ?? '' ?></h1>
<h1>Date with tz  : <?= $dateTz ?? '' ?></h1>
<h1>Date UTC  : <?= $dateNoTz ?? '' ?></h1>