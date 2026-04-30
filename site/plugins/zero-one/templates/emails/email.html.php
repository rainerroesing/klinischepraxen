<?php
    
	$kirby = kirby();
    $visitor = $kirby->visitor();
	$ip = $visitor->ip();
	$url = $kirby->site()->page()->url();
    
?>
<p>E-Mail Adresse des Patienten:<br />
<?= $senderEmail ?></p>
<br />
---
<br />
<p>Guten Tag,</p>

<p><?= $text ?></p>

<p>Viele Grüße,</p>
<p><?= $sender ?></p>
<br />
<br />
<p>Page URL: <?= $url ?></p>