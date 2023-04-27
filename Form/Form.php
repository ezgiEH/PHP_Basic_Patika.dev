<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: "100vh";
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
</style>
<body>
    <h1>Your Number</h1>
    <form action="control.php" method="post">
        <label>Your Full Name:</label>
        <input type="text" name="name" placeholder="Name Surname">
        <label>Your Number:</label>
        <input type="number" name="number" placeholder="Ex: 4">
        <button type="submit">Send</button>
    </form>
</body>
</html>