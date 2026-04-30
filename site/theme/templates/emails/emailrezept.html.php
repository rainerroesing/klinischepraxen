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
<p>------</p>
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
  <td><?= $r_an_a ?></td>
  <td><?= $r_med_a ?></td>
  <td><?= $select_a ?></td>
</tr>
<tr>
  <td><?= $r_an_b ?></td>
  <td><?= $r_med_b ?></td>
  <td><?= $select_b ?></td>
</tr>
<tr>
  <td><?= $r_an_c ?></td>
  <td><?= $r_med_c ?></td>
  <td><?= $select_c ?></td>
</tr>
<tr>
  <td><?= $r_an_d ?></td>
  <td><?= $r_med_d ?></td>
  <td><?= $select_d ?></td>
</tr>
<tr>
  <td><?= $r_an_e ?></td>
  <td><?= $r_med_e ?></td>
  <td><?= $select_e ?></td>
</tr>
<tr>
  <td><?= $r_an_f ?></td>
  <td><?= $r_med_f ?></td>
  <td><?= $select_f ?></td>
</tr>
<tr>
  <td><?= $r_an_g ?></td>
  <td><?= $r_med_g ?></td>
  <td><?= $select_g ?></td>
</tr>
<tr>
  <td><?= $r_an_h ?></td>
  <td><?= $r_med_h ?></td>
  <td><?= $select_h ?></td>
</tr>
<tr>
  <td><?= $r_an_i ?></td>
  <td><?= $r_med_i ?></td>
  <td><?= $select_i ?></td>
</tr>
<tr>
  <td><?= $r_an_j ?></td>
  <td><?= $r_med_j ?></td>
  <td><?= $select_j ?></td>
</tr>
</tbody>
</table>
<p>------</p>
<p><strong>Mitteilung:</strong></p>
<p><?= $text ?></p>

<p>Viele Grüße</p>

<p>Page URL: <?= $url ?></p>


