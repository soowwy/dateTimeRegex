<?php

$errors = [];

if(!empty($_POST)) {
    $month = isset($_POST['month']) ? $_POST['month'] : '';
    $day = isset($_POST['day']) ? $_POST['day'] : '';
    $year = isset($_POST['year']) ? $_POST['year'] : '';


        if (checkdate($month, $day, $year)) {
            $errors = 'The date is valid!';
        } else {
            $errors = 'The date is not valid!';
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p style="color:red"><?=$errors?></p>
    <form method="post">
        <label>Month:</label>
        <input type="number" name="month" value="<?= htmlentities("$month")?>">
        <label>Day:</label>
        <input type="number" name="day" value="<?= htmlentities("$day")?>">
        <label>Year:</label>
        <input type="number" name="year" value="<?= htmlentities("$year")?>">
        <button>Submit</button>
    </form>
</body>
</html>