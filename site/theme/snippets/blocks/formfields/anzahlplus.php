<label class="formblock_field__label uk-form-label" for="email">
  <span class="formfield__label__text" style="color: #878787; font-size:14px;">Anzahl</span>
</label>
<div class="uk-form-controls">
    <input
        class="formfield__input uk-input"
        type="number"
        id="anzahl1"
        name="<?= $formfield->slug() ?>"
        placeholder="Anzahl"
        value="<?= $formfield->value() ?>"
        data-form="field"
        <?= $formfield->autofill(true) ?>
        <?= $formfield->required('attr') ?>
        <?= $formfield->ariaAttr() ?>
    />
</div>