<?php

require_once __DIR__ . '../../classes/Food.php';
require_once __DIR__ . '../../classes/Game.php';
require_once __DIR__ . '../../classes/House.php';
require_once __DIR__ . '../../classes/Category.php';

$dog = new Category('<i class="fa-solid fa-dog"></i>');
$cat = new Category('<i class="fa-solid fa-cat"></i>');

$foods = [
    new Food('UltraPremium', 2, $dog, 'https://ik.imagekit.io/yynn3ntzglc/italy/production/catalog/products/001005/1.jpg?tr=q-50,w-550,h-550&v=-1074417128', 'SuperDog', 'Crocchette'),
    new Food('Le Ghiottonerie', 1, $cat, 'https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613287484147_c1n1_44102442.jpg', 'Felix', 'Umido')
];

$games = [
    new Game('Kong', 15, $dog, 'https://www.amoreanimaleshop.it/wp-content/uploads/2017/01/Ferribiella-Classic-Kong-Portabiscotto.jpg', 'Cane Felice', 'Ferribiella Classic Kong Portabiscotto è un giocattolo per il vostro cane'),
    new Game('Karlie Groffia', 22, $cat, 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', 'Zoo Plus', 'Compatta colonna tiragraffi per gatti, in zostera intrecciata naturale e resistente'),
];

$houses = [
    new House('VidaXl', 100, $dog, 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw2d92b137/hi-res/1/2/5/5094/45151/image_1_45151.jpg?sw=400', 'Cane Felice', 'XXL'),
    new House('Casetta Gatta', 212, $cat, 'https://i.ebayimg.com/images/g/1J4AAOSw7X1jPriW/s-l500.jpg', 'Zoo Plus', 'M'),
];