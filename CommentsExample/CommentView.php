<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discuss</title>
</head>
<body>
    <h1>Discussion</h1>
    <?=file_get_contents('http://loripsum.net/api')?>

    <form action="/" method="POST">
        <input type="text" name="nickname" id="nickname">
        <input type="text" name="comment" id="comment">
        <input type="submit">
    </form>

    <?php if(isset($comments)) {?>
    <?php foreach ($comments as &$comment) { ?>
        <?php ?>
        <blockquote style="border-left: 1px solid #ccc; padding: 10px 40px;">
            <p><b><?=$comment[1]?></b></p>
            <p><?=$comment[2]?></p>
        </blockquote>    
        <hr>
    <?php }} ?>        
</body>
</html>