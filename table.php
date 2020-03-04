<?php

if(isset($_POST['create']))

{

$rows=$_POST['r'];

$cols=$_POST['c'];

echo "<table border='1'>";

for($i=0;$i<$rows;$i++)

{

echo "<tr>";

for($j=0;$j<$cols;$j++)

{

echo "<th>"."r".$i."c".$j."</th>";

}

echo "</tr>";

}

echo "</table>";

}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form method="post">

            <table width="400" border="1">

                <tr>

                    <td width="177">Enter number of rows </td>

                    <td width="207"><input type="text" name="r" /></td>

                </tr>

                <tr>

                    <td>Enter number of column </td>

                    <td><input type="text" name="c" /></td>

                </tr>

                <tr>

                    <td colspan="2">

                        <input type="submit" value="Create Table" name="create" />

                    </td>

                </tr>

            </table>

        </form>

        <table align="left" border="2" cellpadding="3" cellspacing="0">
            <?php
            for($i=1;$i<=10;$i++)
            {
            echo "<tr>";
            for ($j=1;$j<=10;$j++)
              {
              echo "<td>$i * $j = ".$i*$j."</td>";
              }
              echo "</tr>";
              }
            ?>
        </table>



    </body>

    </html>