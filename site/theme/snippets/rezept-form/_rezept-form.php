<a class="tm-contact" id="rezept"></a>
<?php if($success): ?>
<div class="uk-alert-success" uk-alert>
    <p><?= $success ?></p>
</div>
<?php else: ?>
<?php if (isset($alert['error'])): ?>
<div class="uk-alert-danger" uk-alert>
    <p><?= $alert['error'] ?></p>
</div>
<?php endif ?>
<form class="uk-grid-small " method="post" action="<?= $page->url() ?><?php e($page->isHomePage(), '/') ?>#rezept" uk-grid>
    <div class="tm-hon">
        <input type="checkbox" name="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off">
    </div>

    <?php // Name und Email ?>
    <div class="uk-width-1-2@s">
        <label for="name">
        <?= $site->labelName()->html() ?> <abbr title="Pflichfeld">*</abbr>
        </label>
        <input class="uk-input" type="text" id="name" name="name" value="<?= esc($data['name'] ?? '') ?>" required>
        <?= isset($alert['name']) ? '<span class="uk-text-danger">' . html($alert['name']) . '</span>' : '' ?>
    </div>
    <div class="uk-width-1-2@s">
        <label for="email">
          <?= $site->labelEmail()->html() ?> <abbr title="Pflichtfeld">*</abbr>
        </label>
        <input class="uk-input" type="email" id="email" name="email" value="<?= esc($data['email'] ?? '') ?>" required>
        <?= isset($alert['email']) ? '<span class="uk-text-danger">' . html($alert['email']) . '</span>' : '' ?>
    </div>
    <?php // end ?>

    <?php // REZEPT 1 ?>
    <div id="r1" class="uk-grid-small uk-width-1-1@s" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_a" name="r_an_a" min="1" value="<?= esc($data['r_an_a'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_a" name="r_med_a" value="<?= esc($data['r_med_a'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">        <select id="select_a" class="uk-select" name="select_a" value="<?= esc($data['select_a'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept2in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
    </div>

    <?php // REZEPT 2 ?>
    <div id="r2" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_b" name="r_an_b" min="1" value="<?= esc($data['r_an_b'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_b"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_b" name="r_med_b" value="<?= esc($data['r_med_b'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select class="uk-select" id="select_b" name="select_b" value="<?= esc($data['select_b'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept3in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept2out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 3 ?>
    <div id="r3" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_c" name="r_an_c" min="1" value="<?= esc($data['r_an_c'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_c"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_c" name="r_med_c" value="<?= esc($data['r_med_c'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select class="uk-select" id="select_c" name="select_c" value="<?= esc($data['select_c'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept4in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept3out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 4 ?>
    <div id="r4" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_d" name="r_an_d" min="1" value="<?= esc($data['r_an_d'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_d"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_d" name="r_med_d" value="<?= esc($data['r_med_d'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_d" class="uk-select" name="select_d" value="<?= esc($data['select_d'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept5in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept4out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 5 ?>
    <div id="r5" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_e" name="r_an_e" min="1" value="<?= esc($data['r_an_e'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_e"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_e" name="r_med_e" value="<?= esc($data['r_med_e'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_e" class="uk-select" name="select_e" value="<?= esc($data['select_e'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept6in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept5out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>
    
    <?php // REZEPT 6 ?>
    <div id="r6" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_f" name="r_an_f" min="1" value="<?= esc($data['r_an_f'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_f"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_f" name="r_med_f" value="<?= esc($data['r_med_f'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_f" class="uk-select" name="select_f" value="<?= esc($data['select_f'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept7in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept6out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 7 ?>
    <div id="r7" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_g" name="r_an_g" min="1" value="<?= esc($data['r_an_g'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_g"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_g" name="r_med_g" value="<?= esc($data['r_med_g'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_g" class="uk-select" name="select_g" value="<?= esc($data['select_g'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept8in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept7out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 8 ?>
    <div id="r8" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_h" name="r_an_h" min="1" value="<?= esc($data['r_an_h'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_h"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_h" name="r_med_h" value="<?= esc($data['r_med_h'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_h" class="uk-select" name="select_h" value="<?= esc($data['select_h'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept9in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept8out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 9 ?>
    <div id="r9" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_i" name="r_an_i" min="1" value="<?= esc($data['r_an_i'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_i"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_i" name="r_med_i" value="<?= esc($data['r_med_i'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_i" class="uk-select" name="select_i" value="<?= esc($data['select_i'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept10in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
      <a onclick="rezept9out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // REZEPT 10 ?>
    <div id="r10" class="uk-grid-small uk-width-1-1@s uk-hidden" uk-grid style="padding-left:0px; margin-left:0;">
      <div class="uk-width-1-6@s">
        <input class="uk-input" type="number" placeholder="Anzahl" aria-label="Anzahl" id="r_an_j" name="r_an_j" min="1" value="<?= esc($data['r_an_j'] ?? '') ?>">
      </div>
      <div class="uk-width-expand@s">
        <label for="r_med_j"></label>
        <input class="uk-input" type="text" placeholder="Namen des Medikamentes eingeben ..." aria-label="Medikament" id="r_med_j" name="r_med_j" value="<?= esc($data['r_med_j'] ?? '') ?>">
      </div>
      <div class="uk-width-1-5@s">
        <select id="select_j" class="uk-select" name="select_j" value="<?= esc($data['select_j'] ?? '') ?>">
          <option value="" selected>Pack.Größe</option>
          <option value="N1">N1</option>
          <option value="N2">N2</option>
          <option value="N3">N3</option>
        </select>
      </div>
      <a onclick="rezept10out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>


    <?php // Message ?>
    <div class="uk-width-1-1">
        <label for="text">
        <?= $site->labelMessage()->html() ?>
        </label>
        <textarea class="uk-textarea uk-height-small" id="text" name="text"><?= esc($data['text']?? '') ?></textarea>
    </div>

    <?php // DSGVO Abfrage ?>
    <div class="uk-width-1-1">
      <p style="font-size: 14px;">Mit dem Absenden des Formulars über den „Senden-Button“ erklären Sie Ihre Einwilligung zur Datenverarbeitung gemäß unserer Datenschutzerklärung und bestätigen diese. <a href="/datenschutz">Hier finden Sie unsere Datenschutzerklärung</a>.</p>
    </div>
    <div class="uk-width-1-1">
        <label><input class="uk-checkbox" id="privacy" name="privacy" type="checkbox" required> <?= $site->labelFormPrivacy()->or('I agree to the privacy policy') ?></label>
    </div>

    <?php // Absenden ?>
    <div class="uk-width-1-2@s">
      <button class="uk-button uk-button-primary uk-margin-top-small" type="submit" name="submit" value="Submit"><?= $site->labelSubmit()->html() ?></button>
    </div>

    <div class="uk-width-1-1 uk-margin-large-bottom uk-margin-top">
      <p style="font-size: 14px;">Ihre Daten werden über unseren Provider per E-Mail an uns weitergeleitet und nach Beantwortung umgehend gelöscht, sofern keine gesetzlichen Aufbewahrungspflichten bestehen. <strong>Eine Nutzung zu einem anderen Zweck oder eine Datenweitergabe an Dritte findet nicht statt</strong>.</p>
    </div>
</form>
<?php endif ?>
