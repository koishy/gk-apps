<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body> 
    <a href="/">Go back</a>           
    <blockquote style="border-left: 1px solid #ccc; padding: 10px 40px;">
        <p><b><?=$post[1]?></b></p>
        <p><?=$post[2]?></p>
    </blockquote>  
    <a href="/editpost.php?id=<?=$_GET['id']?>">Edit</a>
    
    <form action="/newcomment.php" method="POST">
        <input type="hidden" name="post_id" value="<?= $_GET['id'] ?>">
        <label>
            Name:
            <br>
            <input type="text" name="name" id="name">
        </label>
        <br>
        <label>
            Comment:
            <br>
            <textarea name="comment"></textarea> 
        </label>
        <input type="submit">
    </form>
    <hr>

    Comments (<?=sizeof($comments)?>):

    <?php if(isset($comments)) {?>
    <?php foreach ($comments as &$comment) { ?>
                <p><b><?=$comment[0]?></b></p>
                <p><?=$comment[0]?></p>  
        <hr>
    <?php }} ?> 
</body>
</html>