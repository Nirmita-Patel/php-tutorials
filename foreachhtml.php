<?php
$heading = array('#ID','NAME','AGE','SALARY','STATUS','DOB');
$data = array(1,'sumit',10,12500.022,True,'2000-03-03');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
        <tr>
            <?php foreach($heading as $k=>$v):?>
                <?php if($v !== 'STATUS'):?>
                    <td><?=$v?></td>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach($data as $k=>$v):?>
                <?php if($k !== 4):?>
                    <td><?=$v?></td>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
        </tbody>
    </table>
</body>
</html>