
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body>
    <a href="/newpost.php">Create a new post</a>
    <?php if(isset($posts)) {?>
    <?php foreach ($posts as &$post) { ?>
        <?php ?>
        <a href="/viewcertain.php?id=<?=$post[0]?>">
            <blockquote style="border-left: 1px solid #ccc; padding: 10px 40px;">
                <p><b><?=$post[1]?></b></p>
                <p><?=$post[2]?></p>
            </blockquote>  
        </a>
        <a href="/editpost.php?id=<?=$post[0]?>">Edit</a>
        <hr>
    <?php }} ?> 
</body>
</html>