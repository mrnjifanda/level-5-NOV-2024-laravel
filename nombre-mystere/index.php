<?php

    $message = null;
    $message_class = '';
    if (isset($_GET['message'])) {

        $message = !empty($_GET['message']) ? $_GET['message'] : null;
        $message_class = $message == 'Success' ? 'success' : 'danger';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/app.js" defer></script>
    <title>Nombre mystère</title>
</head>

<body>
    <div class="card">
        <form action="/php/form.php" method="post">
            <div class="group">
                <label for="">Your number: </label>
                <input type="text" name="number" placeholder="Enter your number">
            </div>

            <div class="message <?= $message_class ?>"><?= $message ?></div>
            <button value="submit">Check</button>
        </form>
    </div>
</body>
</html>