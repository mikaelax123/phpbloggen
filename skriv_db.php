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
    <h2>Registrera inlägg</h2>
    <form action="spara_db.php" method="post">
        <label>Rubrik</label>
        <input type="text" maxlength="100" name="rubrik">
        <br>
        <label>text</label>
        <textarea name="inlagg"></textarea>
        <input type="submit" value="Spara">
    </form>
</body>

</html>
