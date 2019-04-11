<?php
include __DIR__ . '/readingtime.php';

$readingtime = new ReadingTime(230);

$text = 'Tjänsten Pollenkoll har hängt med i flera år. Nu har de både en webbplats och en app. Hos Pollenrapporten kan man på en karta se hur pollen rör sig över Sverige. Det kan vara bra för att skapa sig en egen uppfattning om när en pollenperiod börjar och slutar och i vilket skede den befinner sig i just nu. Datan hämtas från Naturhistoriska Riksmuseet. Därför finns det även alternativa webbplatser som innehåller samma information.';

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