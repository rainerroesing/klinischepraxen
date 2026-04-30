<?php
    
	$kirby = kirby();
    $visitor = $kirby->visitor();
	$ip = $visitor->ip();
	$url = $kirby->site()->page()->url();
    
?>
E-Mail Adresse des Patienten: <?= $senderEmail ?>

Guten Tag,

<?= $text ?>

Mit freundlichen Grüßen,
<?= $sender ?>

Page URL: <?= $url ?>