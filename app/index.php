<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>PWCHO-LAMP</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/jpg" href="Pikacz.jpg"/>
    </head>
    <body>
<div class="wrapper">
        <h1>HEMLO!</h1>
<?php
    $serverName = "mysql";
    $userName = "root";
    $password = "abc123";
    $conn = new mysqli($serverName, $userName, $password);
    if ($conn->connect_errno)
        printf($conn->connect_error);
    else {
        $results = $conn->query('SHOW databases;');

        while($row = $results->fetch_assoc())
            $databases[] = $row['Database'];
?>
        <table>
            <tr>
                <th>Databases</th>
            </tr>
            <?php foreach($databases as $val)
                echo '<tr><td>'.$val.'</td></tr>';
    }
            ?>
        </table>
</div>
    </body>
</html>