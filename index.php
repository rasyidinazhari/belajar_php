<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= 5; $j++) {
                    echo '<td>' . "Row $i, Col $j" . '</td>';
                }
                echo '</tr>';
            }
        ?>
 </table>

</body>
</html>