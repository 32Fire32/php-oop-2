<?php

require_once __DIR__ . '../../classes/Food.php';
require_once __DIR__ . '../../classes/Game.php';
require_once __DIR__ . '../../classes/House.php';
require_once __DIR__ . '../../classes/Category.php';

$dog = new Category('cane');
$cat = new Category('gatto');

$foods = [
    new Food('UltraPremium', 2, [$dog], 'https://ik.imagekit.io/yynn3ntzglc/italy/production/catalog/products/001005/1.jpg?tr=q-50,w-550,h-550&v=-1074417128', 'SuperDog', 'Crocchette'),
    new Food('Le Ghiottonerie', 1, [$cat], 'https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613287484147_c1n1_44102442.jpg', 'Felix', 'Umido')
];

$games = [
    new Game('Kong', 15, [$dog], 'https://www.amoreanimaleshop.it/wp-content/uploads/2017/01/Ferribiella-Classic-Kong-Portabiscotto.jpg', 'Cane Felice', 'Ferribiella Classic Kong Portabiscotto è un giocattolo per il vostro cane'),
    new Game('Karlie Groffia', 22, [$cat], 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', 'Zoo Plus', 'Compatta colonna tiragraffi per gatti, in zostera intrecciata naturale e resistente'),
];

$houses = [

];