<?php 

$wishlist = [
    'RTX2080TI'                 => 1299,
    'SilverstoneMidTowerCase'   => 89,
    'Ryzen7'                    => 399,
    'G.Skill16'                 => 199,
    'MSIB350'                   => 99,
    'SeaSonic750'               => 109,
    'SanDisk480'                => 139,
    'Toshiba2000'               => 59
];

arsort($wishlist);

foreach ($wishlist as $component => $price) {
    echo "<li><b>$component: </b>€$price,-</li>";
}

$sum = array_sum($wishlist);

echo "<br>Total price: €" . $sum . ",-";

?>


