<?php 

function getPosts()
{
    $posts = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);
    $res = $posts->query('SELECT * FROM posts ORDER BY id DESC');
    $posts->close();
    return $res->fetch_all();
}

function addNewPost($title, $text)
{
    $posts = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);

    $username = $posts->real_escape_string($title);
    $text = $posts->real_escape_string($text);
    $posts->query('INSERT INTO posts (title, contents) VALUES ("'.$title.'", "'.$text.'")');
    $posts->close();
}

function alterPost($title, $text, $id)
{
    $posts = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);

    $username = $posts->real_escape_string($title);
    $text = $posts->real_escape_string($text);
    $posts->query('UPDATE posts SET title="'.$title.'", contents="'.$text.'" WHERE id = '.$id);
    $posts->close();
}

function removePost($id)
{
    $posts = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);

    $username = $posts->real_escape_string($title);
    $text = $posts->real_escape_string($text);
    $posts->query('DELETE FROM posts WHERE id = '.$id);
    $posts->close();
}
?>