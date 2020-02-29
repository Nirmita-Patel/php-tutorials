<?php
    $marks = 200;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ifelse</title>
</head>

<body>
    <p>Marks: <?=$marks?></p>
     
    <?php if (100>=$marks && $marks>=80): ?>
        <h1>Grade : A</h1> 
    <?php elseif (80>$marks && $marks>=60): ?>
        <h1>Grade : B </h1>
    <?php elseif (60>$marks && $marks>=50): ?>
        <h1>Grade : C </h1>
    <?php elseif (50>$marks && $marks>=35): ?>
        <h1>Grade : D </h1>
    <?php elseif (35>$marks && $marks>=0): ?>
        <h1>Grade : Fail </h1>
    <?php else : ?>
        <h1>Grade : Invalid</h1>
    <?php endif; ?>
    
</body>

</html>