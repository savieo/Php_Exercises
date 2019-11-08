<?php
$cegeps = array(
    "Collège Ahuntsic"              => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html",
    "Collège de Bois-de-Boulogne"   => "http://www.bdeb.qc.ca/",
    "Champlain Regional Collège"    => "http://www.crc-sher.qc.ca/home/",
    "Dawson College"                => "http://www.dawsoncollege.qc.ca/",
    "Collège Édouard-Montpetit"     => "http://www.college-em.qc.ca/",
    "John Abbott College"           => "http://www.johnabbott.qc.ca/",
    "Cégep régional de Lanaudière"  => "http://www.cegep-lanaudiere.qc.ca/",
    "Collège Lionel-Groulx"         => "http://www.clg.qc.ca/"
);
//var_dump($cegeps);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Menu active item</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }
    </style>
</head>

<body>
    <header>
        <h1>Menu active item</h1>
        <nav id="navigation">
            <ul>
                <?php foreach ($cegeps as $name => $addr) { ?>
                    <li> <a href="<?= $addr ?>"> <?= $name ?></a></li>
                <?php } ?>

            </ul>
        </nav>
    </header>
</body>
<main></main>

</html>