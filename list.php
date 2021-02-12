<?php

    require_once('database.php');

    $query = 'SELECT *
                FROM todoitems';
    $statement = $db->prepare($query);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();

    if(count($items) === 0) {
        echo "<p id='no-items'>There are no items on your to do list yet.</p>";
    } else {
        foreach ($items as $item): ?>
         <div class="full-width-item-div">
            <div class="item-div">
                <p class="title"><?php echo $item['Title']; ?> </p>
                <p class="description"><?php echo $item['Description']; ?> </p>
            </div>
            <div class="delete-form">
                <form action="remove_item.php" method="POST">
                    <input type="hidden" name="itemnum" value="<?php echo $item['ItemNum']?>">
                    <button class="delete-x">X</button>
                </form>
            </div>
        </div>
   <?php endforeach;
    
    } 
?>

