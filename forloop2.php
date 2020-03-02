<?php

$i = 1;
$j = 1;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <?php for ($i=1; $i <= 5; $i++):
            $bgclass = ($i%2 == 0)?'dark':'success';?>
            <div class="row">
                <div class="col-md-12">
                    <h1>Multiplication Table for <?=$i?></h1>
                    <table class="table table-striped table-hover table-<?=$bgclass?> text-white">
                        <?php for ($j=1; $j <= 10; $j++):?>
                        <tr>
                            <td>
                                <?=$i?>
                            </td>
                            <td>x</td>
                            <td>
                            <?=$j?>
                            </td>
                            <td>=</td>
                            <td>
                            <?=$i*$j?>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </table>
                </div>
            </div>
            <?php endfor;?>


    </body>

    </html>