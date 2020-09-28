<?php
$euro = filter_input(INPUT_POST, 'euro');
$kc = 27;
$submit = filter_input(INPUT_POST, 'submit');
$switch = filter_input(INPUT_POST, 'switch');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if (isset($submit)) {
        if ($switch == 1) { ?>
        <?=$euro ?> Korun je <?=$euro / $kc ?> Eur
        <?php
        } elseif ($switch == 2) { ?>
            <?=$euro ?> Eur je <?=$euro * $kc ?> KČ
            <?php 
        }
    }
else { ?>
    <form action="index.php" method="post">
    
    Peníze : <input type="text" name="euro" id="euro">
    KČ na Euro: <input type="radio" name="switch" value="1" id="switch">
    Euro na KČ: <input type="radio" name="switch" value="2" id="switch">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
} ?>


</body>
</html>