<?php 

function getComments()
{
    $comments = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);
    $res = $comments->query('SELECT * FROM comments');
    $comments->close();
    return $res->fetch_all();
}
function getPostComments($post_id)
{
    $comments = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);


    $res = $comments->query('SELECT comments.name, comments.comment FROM comments INNER JOIN posts ON posts.id = comments.post_id WHERE comments.post_id = '.$post_id);
    $comments->close();
    return $res->fetch_all();
}
function addNewComment($username, $text, $post_id)
{
    $comments = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);

    $username = $comments->real_escape_string($username);
    $text = $comments->real_escape_string($text);
    $comments->query('INSERT INTO comments (name, comment, post_id) VALUES ("'.$username.'", "'.$text.'", "'.$post_id.'")');
    $comments->close();
}


?>