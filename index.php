<?php include_once("logic.php");
    $sql = 'SELECT * FROM `characters` WHERE 1 ORDER BY `name`';
    $sth = $conn->prepare($sql);
    $sth->execute();
    $result = $sth->fetchall(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo count($result) ?> characters uit de database</h1>

</header>
<div id="container">


<?php

$position = "left";

foreach ($result as $value) {

?> 

    <a class="item" href="character.php?id=<?php print_r($value['id']) ?>">
        <div class="left">
            <img class="avatar" alt="<?php print_r($value['name']) ?>" src="resources/images/<?php print_r($value['avatar']) ?>">
        </div>
        <div class="right">
            <h2><?php print_r($value['name']) ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php print_r($value['health']) ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php print_r($value['attack']) ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php print_r($value['defense']) ?></li>
                </ul>
            </div>   
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>

<?php } ?>



</div>
<footer>&copy; Sven de Ruijter 2021</footer>
</body>
</html>