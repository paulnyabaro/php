<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting data from a form</title>
</head>
<body>
    <h1>Data sent here</h1>
    <p>Name: <?php echo $_REQUEST['name'] ?></p>
    <p>Age: <?php echo $_REQUEST['age'] ?></p>
</body>
</html>