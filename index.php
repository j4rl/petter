
<!DOCTYPE html>
<?php require_once 'func.php'; ?>
<?php require_once 'sv.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="ktm.css">
</head>
<body>
    <header>
        <div class="logo">⁂</div></div><div class="logo_text">Logotvpe</div>
    </header>
    <nav>
        <?php require_once '_nav.php'; ?>
    </nav>
    <div class="main">
        <section>
        <?=getArticle('Mom\'s spaghetti', 'Marshal')?>
            <?=getArticle('My name is...', 'Slim Shady')?>
            <?=getArticle('Nisses dilemma', 'Petter')?>
            <?=getArticle('More coffee?', 'Betty')?>
            <?=getArticle('I\'m a teapot', 'Kermit')?>
            <?=getArticle('Where is the manager?', 'Karen')?>
            <?=getArticle('Sick days', 'Ola')?>
            <?=getArticle('I\'m a bit of a party animal', 'Kurt')?>
        </section>
    </div>
    <footer>
        j4rl&copy; Copyright 2022
    </footer>

</body>
</html>