<?php 
require_once "./part1.php";
require_once "./part1.php";
require_once "./part1.php";
require_once "./part1.php";

require "./variables.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $name;?></title>
</head>
<body>

    <table border="1">
        <tr>
            <th>NAME</th>
            <td><?=$name;?></td>
        </tr>
        <tr>
            <th>ID</th>
            <td><?=$id;?></td>
        </tr>
        <tr>
            <th>ADDRESS</th>
            <td><?=$address;?></td>
        </tr>
    </table>
    
</body>
</html>