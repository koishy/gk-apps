
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
            <blockquote style="border-left: 1px solid #ccc; padding: 10px 40px; word-wrap: break-word;">
                <h2><b><?=$post[1]?></b></h2>
                <p><?=$post[2].substr(0, 200).((strlen($post[2]) > 200)?'...':'')?></p>
            </blockquote>  
        </a>
        <a href="/editpost.php?id=<?=$post[0]?>">Edit</a>
        <hr>
    <?php }} ?> 
</body>
</html>