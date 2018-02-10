<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Freight Costs</title>
    </head>
    <body>
        <table>
            <tr>
                <td style="background: #ccc; text-align: center;">Distance</td>
                <td style="background: #ccc; text-align: center;">Costs</td>
            </tr>
            
            <?php
                $distance = 50;
                while ($distance <= 250) {
                    echo "<tr>
                          <td style=\"text-align: left;\">".$distance."</td>
                          <td style=\"text-align: left;\">".($distance/10)."</td>
                          </tr>\n";
                    $distance += 50;
                }
                for ($distance = 300; $distance < 451; $distance += 50) {
                    echo "<tr>
                            <td style=\"text-align: left;\">".$distance."</td>
                            <td style=\"text-align: left;\">".($distance/10)."</td>
                          </tr>\n";
                }
            ?>
        </table>
    </body>
</html>