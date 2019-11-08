<?php
$name = 'php page';
define('MY_NAME','my_name');
define('MINUTES',60*15);
const RICH = true;
//php  code at top of file
?>

<html>
    <head>
</head>
<body>
    <header>
        <h1><?= $name ?></h1>
</header>
<main>
    <?php
    echo "this is the $name ";
    echo MY_NAME;
    ?>
    <p>It takes <?= MINUTES ?> minutes to come here ! </p>
    <p>Your mortage level is  <?= RICH?20000:10000 ?> </p>
    <?php if(RICH) {?>
        <p> your level is high !.. you are rich </p>
    <?php } else  { ?>
    <p> your level is high !.. you are rich </p>
    <?php } ?>

    <?php
    if (RICH)
    {
        echo '<p> Your are at the top </p>';

    }else 
    {
        echo '<p> Your are at the bottom </p>';
    }
    ?>

    <?php for ($i = 0;$i<5;$i++)
    {
        ?> <span><?= $i ?></span>

    <?php } ?>
</main>
</body> 
<html>
