<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

    <h1>ITEMS</h1>
    <section class="articles">
        <ul>
           <?php foreach($articles as $article):?>
           <li><?php echo $article['a_article_id'] . 
           ' - ' . $article['a_name']?></li>
           <?php endforeach; ?>
        </ul>
    </section>

    <section class="pagination">
        <ul>
        <!-- Deshabilitando el botón de retroceso -->
        <?php if($page == 1):?>
            <li class="disabled">&laquo;</li><!--left arrow-->
        <?php else:?>
            <li><a href="?page=<?php echo $page - 1?>">&laquo;</a></li><!--left arrow-->
        <?php endif;?>
            <!-- Ciclo for para mostrar la lista de páginas -->
        <?php
        for ($i=1; $i <= $numberPages; $i++) { 
            if($page == $i) {
                echo "<li class='active'><a href='?page=$i'>$i</a></li>";
            } else {
                echo "<li><a href='?page=$i'>$i</a></li>";
            }
        }
        
        ?>
        <!-- Deshabilitando el botón de avance -->
        <?php if($page == $numberPages):?>
            <li class="disabled">&raquo;</li><!--left arrow-->
        <?php else:?>
            <li><a href="?page=<?php echo $page + 1?>">&raquo;</a></li><!--left arrow-->
        <?php endif;?>

        <!-- Esto sirivió para maquetar los botones de las páginas:
            <li class="disabled">&laquo;</li>left arrow
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">&raquo;</a></li>right arrow
            -->
        </ul>
    </section>

    </div>
</body>
</html>