<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

// Menu item that should be active
$active = ABOUT;

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

    .selected {
        background-color: #fea799;
    }
    </style>
</head>
<body>
<header>
    <h1>Menu active item</h1>
    <nav id="navigation">
    <ul>
        <li class="menu-item <?=($active===HOME)?'selected':''?>"> <?=HOME?></li>
        <li class="menu-item <?=($active===PRODUCT)?'selected':''?>"> <?=PRODUCT?></li>
        <li class="menu-item <?=($active===ABOUT)?'selected':''?>"> <?=ABOUT?></li>
        <li class="menu-item <?=($active===IDEA)?'selected':''?>"> <?=IDEA?></li>
    </ul>
</nav>
</header>
</body>
<main></main>
</html>