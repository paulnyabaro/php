<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending data to form</title>
</head>
<body>
    <form method="post" action="data.php">
        <label for="yourName">Name</label>
        <input type="text" name="name" id="yourName">
        <label for="yourAge">Age</label>
        <input type="number" name="age" id="yourAge">

        <button type="submit">Submit</button>
    </form>
</body>
</html>