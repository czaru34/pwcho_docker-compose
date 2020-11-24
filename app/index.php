<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Docker compose</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
<div class="wrapper">
        <h1>Hemlo!</h1>
<?php
$servername = "mysql";
$username = "root";
$password = "abc123";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_errno)
    printf($conn->connect_error);
else {
    $results = $conn->query('show databases');

    while($row = $results->fetch_assoc())
        $databases[]=$row['Database'];
?>
        <table>
            <tr>
                <th>Databases</th>
            </tr>
            <?php foreach($databases as $value)
                echo '<tr><td>'.$value.'</td></tr>';
            ?>
        </table>
</div>
<?php } ?>
    </body>
</html>