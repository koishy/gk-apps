<?php 
    require getm('PostsModel.php');
    require getm('CommentModel.php');
    function view_posts()
    {
        $posts = getPosts();
        require getv('viewallposts.php');
    }

    function view_post()
    {
        $posts = getPosts();
        $comments = getPostComments($_GET['id']);
        foreach ($posts as $post) {
            if ($post[0] == $_GET['id'])
            {

                require getv('viewcertainpost.php');
                return;                
            }
        }
    }

    function publish_comment($name, $title, $post_id)
    {
        addNewComment($name, $title, $post_id);
        echo '<script>location.href="/viewcertain.php?id='.$post_id.'"</script>';
    }

    function create_post()
    {
        require getv('newpost.php');
    }

    function edit_post()
    {
        require getv('editpost.php');
    }

    function store_post()
    {
        addNewPost($_POST['title'], $_POST['text']);
        echo '<script>location.href="/"</script>';
    }

    function update_post()
    {
        alterPost($_POST['title'], $_POST['text'], $_POST['id']);
        echo '<script>location.href="/"</script>';
    }

    function remove_post()
    {
        removePost($_POST['id']);
        echo '<script>location.href="/"</script>';
    }

?>