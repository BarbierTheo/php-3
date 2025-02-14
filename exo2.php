<?php
    $i = 1;

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ol>
            <?php 
            
            while ($i <= 14){

                $i == 14 ? print '<li>février : Saint Valentin</li>' : print '<li>février</li>';
                $i++;
                echo '<br>';
            }
            
            ?>

    </ol>

    </body>
    </html>