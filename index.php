
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header><h1>ToDo List</h1></header>
    <main>
        <section id="todoitems">
            <?php include('list.php'); ?>
        </section>
        <section id="additem">
            <h2 class="additem">Add Item</h2>
            <form action="addItem.php" method="POST" id="add-item-form">
                <div class="add-item-boxes">
                    <input type="text" placeholder="Title" name="title">
                    <input type="text" placeholder="Description" name="description">
                </div>
                <div class="add-item-button-box">
                    <button class="add-button">Add Item</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>