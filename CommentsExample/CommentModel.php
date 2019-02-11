<?php 

function getComments()
{
    $comments = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);
    $res = $comments->query('SELECT * FROM comments');
    $comments->close();
    return $res->fetch_all();
}
function addNewComment($username, $text)
{
    $comments = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);

    $username = $comments->real_escape_string($username);
    $text = $comments->real_escape_string($text);
    $comments->query('INSERT INTO comments (name, comment) VALUES ("'.$username.'", "'.$text.'")');
    $comments->close();
}
?>