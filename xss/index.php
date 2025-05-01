<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'Everyone';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rentan | Uji Coba XSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <h1>Hello, <?php echo $name; ?>!</h1>
        <form method="GET" class="form">
            <label for="name">What should I call you?</label>
            <input type="text" name="name" id="name">
            <button type="submit" class="send">Kirim</button>
        </form>
    </div>
</body>

</html>