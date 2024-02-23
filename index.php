
<?php require("php/index.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Services</h1>
        </div>
        <div class="card-body">
            <ul>
                <?php foreach ($services as $service) {
                        echo "<li>
                            <a href=''>" . $service['name'] . "</a>
                            <p>" . $service['description'] . "</p>
                        </li>";
                    }
                ?>

                <?php foreach($services as $service): ?>
                    <li>
                        <a href=""><?= $service['name'];?></a>
                        <p><?= $service['description'];?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>