<?php

    require_once('database.php');

    $item_num = filter_input(INPUT_POST, 'itemnum', FILTER_VALIDATE_INT);

    if($item_num) {
        $query = 'DELETE FROM ToDoItems
                  WHERE ItemNum = :item_num';
        $statement = $db->prepare($query);
        $statement->bindValue(':item_num', $item_num);
        $statement->execute();
        $statement->closeCursor();
    }

    include('index.php');