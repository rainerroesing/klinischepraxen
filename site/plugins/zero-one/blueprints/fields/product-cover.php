<?php

$minwidth = site()->productImageratio() == "3:4" ? '900' : '800';
$minheight = site()->productImageratio()->isNotEmpty() ? (site()->productImageratio() == "4:3" ? '600' : '1200') : '800';

return [
    'type' => 'image-clip',
    'clip' => [
      'minwidth' => $minwidth,
      'minheight' => $minheight,
      'ratio' => 'fixed'
    ],
];
