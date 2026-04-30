<?php snippet('header') ?>

<?php if($page->headersection() == "false"): ?><?php else: ?>
<?php snippet('page/heading') ?>
<?php endif ?>
<main role="main">
  <section class="uk-section uk-animation-slide-bottom-small">
    <div class="uk-container uk-container-xsmall">
      <div class="uk-margin-medium">
        <?= $page->editor()->toBlocks() ?>
      </div>
      <?php snippet('rezept/rezept') ?>
    </div>
  </section>
</main>
<?php snippet('footer') ?>