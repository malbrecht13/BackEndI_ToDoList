<?php
    require_once('database.php');

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

    //they don't need a description to add an item; it is optional
    if($title) {
        $query = 'INSERT INTO todoitems (Title, Description)
                  VALUES (:title, :description)';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
    }
 
    include('index.php');

?>
    
    