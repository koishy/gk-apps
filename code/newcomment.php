<?php

    require 'main.php';
    require $_SERVER['DOCUMENT_ROOT'].'/controllers/PostsController.php';
    publish_comment($_POST['name'], $_POST['comment'], $_POST['post_id']);
?>