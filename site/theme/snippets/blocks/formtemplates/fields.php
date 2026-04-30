
<?php foreach ($form->fields() as $field) : ?>

    <div class="formfield__container uk-margin" data-id="<?= $field->slug() ?>">

        <?php if($field->hasOptions() && $field->type(true) != "select"): ?>
            <fieldset class="formblock__option__container" data-id="<?= $field->slug() ?>">
                
                <legend class="formblock_field__label" for="<?= $field->slug() ?>">

                    <span class="formfield__label__text"><?= $field->label() ?></span>
                    <span class="formfield__label__required" aria-hidden="true"><?= $field->required('asterisk') ?></span>

                </legend>
                
                <?= $field->toHtml() ?>
                
                <?= $form->template('field_error', ['field' => $field]) ?>

            </fieldset>

        <?php else: ?>

            <label class="formblock_field__label uk-form-label" for="<?= $field->slug() ?>">

                <span class="formfield__label__text" style="color: #878787; font-size:14px;"><?= $field->label() ?></span>
                <span class="formfield__label__required" style="color: red; font-size:14px;" aria-hidden="true"><?= $field->required('asterisk') ?></span>

            </label>
            
            <?= $field->toHtml() ?>
            
            <?= $form->template('field_error', ['field' => $field]) ?>

        <?php endif ?>

    </div>
<?php endforeach ?>
