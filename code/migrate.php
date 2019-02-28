<?php
    require 'config.php'; 
    $migrator = new mysqli(getconfig()['DB_HOST'], getconfig()['DB_LOGIN'], getconfig()['DB_PASSWORD'], getconfig()['DB_NAME']);
    if (!$migrator) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }
    $result = $migrator->query('CREATE TABLE comments (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                       post_id INT(6) UNSIGNED,
                                                       name VARCHAR(50), 
                                                       comment TEXT
                                                      )
                                                      CHARACTER SET utf8
                                                      COLLATE utf8_unicode_ci;');

    $result = $migrator->query('CREATE TABLE posts (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                      title VARCHAR(50), 
                                                      contents TEXT
                                                    )
                                                    CHARACTER SET utf8
                                                    COLLATE utf8_unicode_ci;');

    if (!$result)
    {
        echo 'Couldn\'t create a table';
    }
    else
    {
        header('Location: /');
    }
    $migrator->close();
?>