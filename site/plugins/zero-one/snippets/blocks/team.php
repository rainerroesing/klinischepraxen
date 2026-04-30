<?php
$image      = $block->image()->toFile();
$text       = $block->text()->html();
$facharzttitel = $block->facharzttitel()->html();
$toggleArzt  = $page->toggleArzt()->toBool();
$imageLebenslauf = $block->imageLebenslauf()->toFile();
$textLebenslauf = $block->textLebenslauf()->kt();
$modalLebenslauf = $block->modalLebenslauf();
?>


<?php if($block->isNotEmpty()): ?>
  <?php if ($imageLebenslauf): ?>
    <a href="#<?= $modalLebenslauf ?>" class="uk-link-toggle uk-margin uk-display-inline-block uk-transition-toggle" uk-toggle>
    <?php else: ?>
      <div>
  <?php endif; ?>
    <div class="uk-inline-clip uk-transition-slide-bottom-small uk-transition-opaque " tabindex="0">
      <?php if($image): ?>
        <div style="position: relative;">
          <picture>
            <source type="image/webp" srcset="<?= $image->thumb(['crop' => 'true', 'width' => 800, 'height' => 800, 'format' => 'webp'])->url() ?>" />
            <img  src="<?= $image->crop(800,800)->url() ?>" width="800" height="800" alt="<?= $image->alt() ?>" loading="lazy" class="uk-border-pill">
          </picture>
          <?php if ($imageLebenslauf): ?>
            <img src="/assets/img/icon-team-cv.svg" style="position: absolute; bottom:15px; right:15px; width:68px; height: 68px;">
          <?php endif; ?>
        </div>
      <?php endif ?>
      <h4 class="uk-text-normal uk-text-center uk-margin-remove-bottom"><?= $text ?></h4>
      <p class="uk-text-center uk-text-light uk-margin-remove-top"><?= $facharzttitel ?></p>
    </div>
  <?php if ($imageLebenslauf): ?>
    </a>
    <div id="<?= $modalLebenslauf ?>" class="uk-modal-full" style="z-index:1300;" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-top" uk-grid>
                <div class="uk-background-contain" style="background-image: url('<?= $imageLebenslauf->url() ?>'); background-color:#ece1d7;" uk-height-viewport></div>
                <div style="height:100vh; overflow: scroll;">
                  <div class="uk-padding-large">
                    <?= $textLebenslauf ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
  <?php else: ?>
    </div>
  <?php endif; ?>
<?php endif; ?>