<?php
session_start();


$errors = [];


    if(!empty($_POST)) {
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['days'] = $_POST['days'];

        $date = $_SESSION['date'];
        $days = $_SESSION['days'];

        if (preg_match('/(\d{4})-(\d{2})-(\d{2})/', $date)) {
            $errors = 'the date is correct!';
        } else {
            $errors = 'The date is incorrect!';
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
    <form method="post">
        <p style="color:red"><?=$errors?></p>
        <label>Date:</label>
        <input name="date">
        <label>Days:</label>
        <select name="days">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        <button>Submit</button>
    </form><br><br>
    <table style="border: 1px solid black">
        <th style="border: 1px solid black">Date:</th>
        <th style="border: 1px solid black">Days:</th>
        <tr>
            <td style="border: 1px solid black"><?=$date?></td>
            <td style="border: 1px solid black"><?=$days?></td>
        </tr>
    </table>
</body>
</html>
