<?php 
    require 'CommentModel.php';
    if (isset($_POST['nickname'], $_POST['comment']))
    {

        addNewComment($_POST['nickname'], $_POST['comment']);
    }

    $comments = getComments();
    require 'CommentView.php';
?>