<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Flex Layout</title>
    <link rel='stylesheet' type='text/css' href='flex.css'>
</head>
<body>
    <div id='container'>
        <aside>
            <div><a href='#'>Главная</a></div>
            <div><a href='#'>Каталог</a></div>
            <div><a href='#'>Доставка</a></div>
            <div><a href='#'>О нас</a></div>
        </aside>
        <section>
            <?php for ($i = 1; $i <= 30; $i ++) :?>
                <div>
                    <h2>Товар<?php echo $i;?></h2>
                    <h3>Производитель<?php echo $i;?></h3>
                    <img src='images/article.jpg'/>
                </div>
            <?php endfor;?>
        </section>
    </div>
</body>
</html>