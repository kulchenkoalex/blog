<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой Блог</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Мой Блог</h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label>
                    Краткое описание
                    <input type="text" name="description" value="<?=$article['description']?>" class="form-item" required>
                </label>
                <label>
                    Cодержимое
                    <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                </label>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
        <footer>
            <p>Мой первый блог
            <br>
            Copyright &copy 2016
            </p>
        </footer>
        </div>
    </body>
</html>