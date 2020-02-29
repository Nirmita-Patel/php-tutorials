<?php
$a = 10;
$b = 5;
$c = "-";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switchcase</title>
</head>
<body>

<div>
*******************************************************************
*                       Addition = 10                             *
*******************************************************************
</div>
    <?php switch ($c) : case '-':?>
        <p>$a - $b = <?=($a-$b)?></p>
    <?php break; case '+': ?>
        <p>$a + $b = <?=($a+$b)?></p>
    <?php break; default: ?>
        <p>Invalid Choice</p>
    <?php endswitch;?>


    <?php if($c === '-'):?>
        <p>$a - $b = <?=($a-$b)?></p>
    <?php endif;?>
</body>
</html>