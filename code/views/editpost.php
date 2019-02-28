<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/updatepost.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <label>
            Title:
            <br>
            <input type="text" name="title" id="name">
        </label>
        <br>
        <label>
            Text:
            <br>
            <textarea name="text"></textarea> 
        </label>
        <input type="submit">
    </form>
    <form action="/removepost.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" name="sub" value="Remove" style="border: 1px solid red;">
    </form>
</body>
</html>