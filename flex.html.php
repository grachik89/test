<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Flex Layout</title>
    <link rel='stylesheet' type='text/css' href='flex.css'>
</head>
<body>
    <div id='container'>
        <div id='flex_container'>
            <?php for ($i = 1; $i <= 30; $i ++) :?>
                <div class='flex_item'>
                    <h2>Товар<?php echo $i;?></h2>
                    <h3>Производитель<?php echo $i;?></h3>
                    <img src='images/article.jpg'/>
                </div>
            <?php endfor;?>
        </div>
    </div>
</body>
</html>