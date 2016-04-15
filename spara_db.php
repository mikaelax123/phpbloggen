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
    $rubrik = $_POST['rubrik'];
    $inlagg = $_POST['inlagg'];

        $host = 'localhost';
        $user = 'axtelius_user';
        $pass = 'axtelius_pass';
        $database = 'axtelius_db';

    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error)
        die("error" . $conn-connect_error);

        $sql = "INSERT INTO blog ('rubrik', 'inlagg') VALUES ('$rubrik', '$inlagg')";

    $result = $conn->query($sql);
    if (!$result)
        die("kunde inte spara inlägg: " . $conn->error);
    else
        echo "inlägg registrerat";

    $conn->close();
        ?>
</body>

</html>
