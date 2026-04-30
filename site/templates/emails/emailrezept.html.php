<?php
    
	$kirby = kirby();
  $visitor = $kirby->visitor();
	$ip = $visitor->ip();
	$url = $kirby->site()->page()->url();
    
?>
Hallo zusammen,

hier eine schöne Nachricht.

<table>
  <thead>
    <tr>
      <td>Anzahl</td>
      <td>Medikament</td>
      <td>Pack.N</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $r1az ?></td>
      <td><?= $r1med ?></td>
      <td><?= $r1n ?></td>
    </tr>
  </tbody>
</table>

<p><?= $text ?></p>

<p>Beste Grüße,</p>
<p><?= $sender ?></p>

<p>Visitor IP: <?= $ip ?></p>
<p>Page URL: <?= $url ?></p>