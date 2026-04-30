<?php
    
	$kirby = kirby();
  $visitor = $kirby->visitor();
	$ip = $visitor->ip();
	$url = $kirby->site()->page()->url();
    
?>

<style>
table, th, td {
  border-collapse: collapse;
}
tr {
  border-bottom: 1px solid #ddd;
}
th, td {
  padding: 15px;
}
</style>


<p>Guten Tag,</p>
<p>eine neue Rezeptbestellung ist angekommen:</p>

<p><strong>Name:</strong> <?= $sender ?></p>
<p><strong>E-Mail:</strong> <?= $email ?></p>
<p><strong>Geburtsdatum:</strong> <?= $geburtsdatum ?></p>
<p><strong>Rezept erhalten:</strong> <?= $rezept_erhalt ?></p>
<p>------</p>
<?php
  $rezepte = [
    ['anzahl' => $r_an_a ?? '', 'medikament' => $r_med_a ?? '', 'pack' => $select_a ?? ''],
    ['anzahl' => $r_an_b ?? '', 'medikament' => $r_med_b ?? '', 'pack' => $select_b ?? ''],
    ['anzahl' => $r_an_c ?? '', 'medikament' => $r_med_c ?? '', 'pack' => $select_c ?? ''],
    ['anzahl' => $r_an_d ?? '', 'medikament' => $r_med_d ?? '', 'pack' => $select_d ?? ''],
    ['anzahl' => $r_an_e ?? '', 'medikament' => $r_med_e ?? '', 'pack' => $select_e ?? ''],
    ['anzahl' => $r_an_f ?? '', 'medikament' => $r_med_f ?? '', 'pack' => $select_f ?? ''],
    ['anzahl' => $r_an_g ?? '', 'medikament' => $r_med_g ?? '', 'pack' => $select_g ?? ''],
    ['anzahl' => $r_an_h ?? '', 'medikament' => $r_med_h ?? '', 'pack' => $select_h ?? ''],
    ['anzahl' => $r_an_i ?? '', 'medikament' => $r_med_i ?? '', 'pack' => $select_i ?? ''],
    ['anzahl' => $r_an_j ?? '', 'medikament' => $r_med_j ?? '', 'pack' => $select_j ?? ''],
  ];
?>
<table>
<thead>
<tr>
  <td>Anzahl</td>
  <td>Medikament</td>
  <td>Pack.N</td>
</tr>
</thead>
<tbody>
<?php foreach ($rezepte as $rezept): ?>
<?php if (trim((string)$rezept['anzahl']) !== '' || trim((string)$rezept['medikament']) !== '' || trim((string)$rezept['pack']) !== ''): ?>
<tr>
  <td><?= $rezept['anzahl'] ?></td>
  <td><?= $rezept['medikament'] ?></td>
  <td><?= $rezept['pack'] ?></td>
</tr>
<?php endif ?>
<?php endforeach ?>
</tbody>
</table>
<p>------</p>
<p><strong>Mitteilung:</strong></p>
<p><?= $text ?></p>

<p>Viele Grüße</p>

<p>Page URL: <?= $url ?></p>
