
<div id="fivecards" class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
  <?php
  $items = $block->fivecards()->toStructure();
  foreach ($items as $item): ?>

  <?php $fivecardsicons = null;
    if ($item->icon() == "erstgespraech") {
    $fivecardsicons = '<img class="icons" src="/assets/img/24_treatment.svg" width="100" height="100" alt="Erstgespräch">';
    } 
    elseif ($item->icon() == "untersuchung") {
      $fivecardsicons = '<img class="icons" src="/assets/img/34_stethoscope.svg" width="100" height="100" alt="Untersuchung">';
    }
    elseif ($item->icon() == "verlaufskontrolle") {
      $fivecardsicons = '<img class="icons" src="/assets/img/05_medical_monitor.svg" alt="Verlaufskontrolle">';
    }
    elseif ($item->icon() == "erfolgskontrolle") {
      $fivecardsicons = '<img class="icons" src="/assets/img/02_anatomy.svg" alt="Erfolgskontrolle">';
    }
    elseif ($item->icon() == "auswertung") {
      $fivecardsicons = '<img class="icons" src="/assets/img/23_patient.svg" alt="Auswertung">';
    }
    else {
      $fivecardsicons = '';
    }
  ?>

  <div class="fivecard">
    <div class="uk-card uk-card-body uk-card-default uk-card-hover">
      <div class="uk-flex uk-flex-center uk-flex-middle">
        <?= $fivecardsicons ?>
      </div>
        <h4 class="uk-text-center uk-text-normal" style="margin-bottom: 0.5rem;"><?= $item->head() ?></h4>
        <p class="uk-text-center uk-text-small uk-text-light" style="margin-top: 0.5rem;"><?= $item->infotext() ?></p>
    </div>
  </div>
  <?php endforeach ?>
</div>