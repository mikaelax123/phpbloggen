<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php

        $host = 'localhost';
        $user = 'axtelius_user';
        $pass = 'axtelius_pass';
        $database = 'axtelius_db';

    $conn = new mysqli($host, $user, $pass, $database);



    if ($conn->connect_error)
        die("error" . $conn-connect_error);

        $sql = "SELECT * FROM blog";

    $result = $conn->query($sql);
    if (!$result)
        die("kunde inte spara inlägg: " . $conn->error);
    else
        echo "inlägg registrerat";
while ($row = $result->fetch_assoc())
        {
            echo "<article>";
            echo "<h3>" . $row['title'] . "</h3><h4>" . $row['time'] . "</h4><p>" . $row['inlagg'] . "</p>";
            echo "</article>";
        }


    $conn->close();
        ?>
</body>

</html>
