

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php $title=get_title();?>
        <title><?php echo $title ;//get the title for the page your currently on based on Page id?></title>
    </head>
    <body>
    <header>
        <ul style="list-style: none;">
            <li><a href="links2.php?page=1&title=Home">Page 1</a></li><!--path to page1-->
            <li><a href="links2.php?page=2&title=Contact">Page 2</a></li><!--path to page2-->
            <li><a href="links2.php?page=3&title=us">Page 3</a></li><!--path to page3-->
            <li><a href="links2.php?page=4&title=you">Page 4</a></li><!--path to page4-->
            <li><a href="links2.php?page=5&title=we">Page 5</a></li><!--path to page5-->
        </ul>
    </header>