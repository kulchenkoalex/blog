<?php
    
    require_once("../database.php");
    require_once("../models/articles.php");

    $link = db_connect();
//include("models/comments/main.php");
if (isset($_GET['action']))
        $action = $_GET['action'];
    else 
        $action = "";
 
    if ($action == "add")
    {
        if(!empty($_POST))
        {
            articles_new($link, $_POST['title'], $_POST['description'], $_POST['content']);
            header("Location: index.php");
        }
        include("../views/article_admin_add.php");
    }
        else if($action == "edit")
        {
            if(!isset($_GET['id']))
                header("Location: index.php");
            $id = (int)$_GET['id'];
            
            if(!empty($_POST) && $id > 0)
            {
                articles_edit($link, $id, $_POST['title'], $_POST['description'], $_POST['content']);
                header("Location: index.php");
            }

        $article = article_get($link, $id);
        include("../views/article_admin.php");
        }
        else if ($action == "delete")
        {
            $id = $_GET['id'];
            $article = articles_delete($link, $id);
            header("Location: index.php");
        }
    else
    {
        $articles = articles_all($link);
        include("../views/articles_admin.php");
    }

//function ModuleID($p1) 
//{
//    if ($p1 == 'article') return 1;
   // else if ($p1 == 'dd') return 2;
//   else Message(1, 'Модуль не найден.', '/');
//}


/*include 'index.php';
$db = new safeMysql();

$per_page = 10;

//получаем номер страницы и значение для лимита 
$cur_page = 1;
if (isset($_GET['page']) && $_GET['page'] > 0) 
{
    $cur_page = $_GET['page'];
}
$start = ($cur_page - 1) * $per_page;

//выполняем запрос и получаем данные для вывода
$sql  = "SELECT SQL_CALC_FOUND_ROWS * FROM Board LIMIT ?i, ?i";
$data = $db->getAll($sql, $start, $per_page);
$rows = $db->getOne("SELECT FOUND_ROWS()");

//узнаем общее количество страниц и заполняем массив со ссылками
$num_pages = ceil($rows / $per_page);

// зададим переменную, которую будем использовать для вывода номеров страниц
$page = 0;

//а дальше выводим в шаблоне днные и навигацию:
?>
Найдено сообщений: <b><?=$rows?></b><br><br>
<? foreach ($data as $row): ?>
<?=++$start?>. <a href="?id=<?=$row['id']?>"><?=$row['title']?></a><br>
<? endforeach ?> 

<br>
Страницы: 
<? while ($page++ < $num_pages): ?>
<? if ($page == $cur_page): ?>
<b><?=$page?></b>
<? else: ?> 
<a href="?page=<?=$page?>"><?=$page?></a>
<? endif ?> 
<? endwhile ?> 
    */
?>