<?php
include __DIR__ . '/readingtime.php';

$readingtime = new ReadingTime(230);

$text = 'Sugar plum chocolate bar marshmallow brownie powder sesame snaps chupa chups. Fruitcake jelly dragée cotton candy. Sesame snaps wafer croissant danish apple pie lollipop muffin. Marshmallow carrot cake sweet dessert pastry oat cake muffin cupcake dessert.';

$time = $readingtime->set($text);
$time = strtr($time, [
  'seconds' => 'sec',
  'second' => 'sec',
  'minutes' => 'min',
  'minute' => 'min'
]);
?>
<li><strong>Reading time:</strong> <?= $time; ?></li>
<li><strong>Seconds:</strong> <?=  $readingtime->seconds(); ?></li>
<li><strong>Minutes:</strong> <?=  $readingtime->minutes(); ?></li>