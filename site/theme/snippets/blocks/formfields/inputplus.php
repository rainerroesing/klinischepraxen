<div class="uk-form-controls">
    <input
        class="formfield__input uk-input"
        type="<?= $formfield->inputtype() ?>"
        id="<?= $formfield->id() ?>"
        name="<?= $formfield->slug() ?>"
        placeholder="<?= $formfield->placeholder() ?>"
        value="<?= $formfield->value() ?>"
        data-form="field"
        <?= $formfield->autofill(true) ?>
        <?= $formfield->required('attr') ?>
        <?= $formfield->ariaAttr() ?>
    />
    <a onclick="rezept2in(event)" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>

    <?php // Rezept 2 ?>
    <div id="r2" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept2"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept3in()" class="uk-margin-small" uk-icon="icon: plus-circle; ratio: 1.5" uk-tooltip="Weiteres Rezept"></a>
			<a onclick="rezept2out()" class="uk-margin-small" uk-icon="icon: minus-circle; ratio: 1.5" uk-tooltip="Rezept entfernen"></a>
    </div>

    <?php // Rezept 3 ?>
    <div id="r3" class="uk-hidden">
        <input
            class="formfield__input uk-input"
            type="<?= $formfield->inputtype() ?>"
            id="rezept3"
            placeholder="<?= $formfield->placeholder() ?>"
            value="<?= $formfield->value() ?>"
            data-form="field"
            <?= $formfield->autofill(true) ?>
            <?= $formfield->required('attr') ?>
            <?= $formfield->ariaAttr() ?>
        />
        <a onclick="rezept4in()">Weiteres Rezept</a>
        <a onclick="rezept4out()">Delete Rezept</a>
    </div>

    <?php // Rezept 4 ?>
    <div id="r4" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept4"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept5in()">Weiteres Rezept</a>
			<a onclick="rezept5out()">Delete Rezept</a>
    </div>

    <?php // Rezept 5 ?>
    <div id="r5" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept5"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept6in()">Weiteres Rezept</a>
			<a onclick="rezept6out()">Delete Rezept</a>
    </div>

    <?php // Rezept 6 ?>
    <div id="r6" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept6"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept7in()">Weiteres Rezept</a>
			<a onclick="rezept7out()">Delete Rezept</a>
    </div>

    <?php // Rezept 7 ?>
    <div id="r7" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept7"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept8in()">Weiteres Rezept</a>
			<a onclick="rezept8out()">Delete Rezept</a>
    </div>

    <?php // Rezept 8 ?>
    <div id="r8" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept8"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept9in()">Weiteres Rezept</a>
			<a onclick="rezept9out()">Delete Rezept</a>
    </div>

    <?php // Rezept 9 ?>
    <div id="r9" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept9"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<a onclick="rezept10in()">Weiteres Rezept</a>
			<a onclick="rezept10out()">Delete Rezept</a>
    </div>

    <?php // Rezept 10 ?>
    <div id="r10" class="uk-hidden">
			<input
					class="formfield__input uk-input"
					type="<?= $formfield->inputtype() ?>"
					id="rezept10"
					placeholder="<?= $formfield->placeholder() ?>"
					value="<?= $formfield->value() ?>"
					data-form="field"
					<?= $formfield->autofill(true) ?>
					<?= $formfield->required('attr') ?>
					<?= $formfield->ariaAttr() ?>
			/>
			<p>Keine weiteren Bestellungen möglich.</p>
    </div>  
    <button onclick="">Alles zurücksetzen</button>
</div>