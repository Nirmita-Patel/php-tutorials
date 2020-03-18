<?php
$heading = array('#ID','NAME','AGE','SALARY','STATUS','DOB');
$data = array(
                array(1,'sumit1',10,12500.022,True,'2000-03-03'),
                array(2,'sumit2',11,12500.022,True,'2000-03-03'),
                array(3,'sumit3',12,12500.022,True,'2000-03-03'),
                array(4,'sumit4',13,12500.022,True,'2000-03-03'),
                array(5,'sumit5',14,12500.022,True,'2000-03-03'),
                array(6,'sumit6',15,12500.022,True,'2000-03-03')
        );

        var_dump($data);
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
        <?php foreach($data as $k=>$v):?>
        <tr>
            <?php foreach($v as $a=>$b):?>        
                <?php if($a !== 4):?>
                    <td><?=$b?></td>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>