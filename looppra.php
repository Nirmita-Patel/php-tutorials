<?php
$start = 1;
$end = 10;
$num = 2 ;

$i = 1;
$j = 1;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While</title>
    </head>

    <body>

        <div>
            <pre>
            **********************************
            *                                *
            *                                *
            *                                *
            *                                *
            *                                *
            *                                *
            **********************************
        </pre>

        <table border="1"> 
            <tr>
                <th>Number1</th>
                <th>Number2</th>
                <th>Ans</th>
            </tr>
           <?php while($start<=$end):?>
            <tr>
                    <td><?=$start?></td>
                    <td><?=$num?></td>
                    <td><?=$num*$start++?></td>
                </tr>
            <?php endwhile;?>

        </table>>
        
        <table border="1"> 
        <tr>
                <th>#</th>
                <th>Pattern</th>
            </tr>
            <tr>
                <td>1</td>
                <td>
<pre>
<?php while($i < 8):?>
<?php $j = 1;?>
<?php while($j <= $i):?>
<?="* "?>
<?php $j++;?>
<?php endwhile;?>
<br>
<?php $i++;?>
<?php endwhile;?>
</pre>
                </td>
            </tr>
        </table>
    </div>   

    </body>

    </html>