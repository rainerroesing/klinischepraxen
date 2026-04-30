<?php

$minwidth = site()->coverWidth()->isNotEmpty() ? site()->coverWidth()->toInt() : '600';
$minheight = site()->coverHeight()->isNotEmpty() ? site()->coverHeight()->toInt() : '800';
$ratio = site()->coverRatio()->isTrue() ? '' : 'fixed';

return [
    'type' => 'image-clip',
    'clip' => [
      'minwidth' => $minwidth,
      'minheight' => $minheight,
      'ratio' => $ratio,
    ],
];