<?php

$src = null;

if ($block->linkType() == "internal" && $button = $block->internalPage()->toPage()) {
    $src = $button->url();
} elseif ($block->linkType() == "url") {
    $src = $block->link()->toUrl();
} elseif ($block->linkType() == "file" && $button = $block->fileLink()->toFile()) {
    $src = $button->url();
} elseif ($block->linkType() == "email") {
    $src = 'mailto:' . Str::encode($block->emailLink());
} elseif ($block->linkType() == "telephone") {
    $src = 'tel:' . Str::encode($block->phoneLink());
}

?>
<a class="uk-flex uk-flex-middle uk-button<?= $block->buttonStyle() ?><?= $block->buttonSize() ?><?= $block->marginTop() ?>" style="font-weight: 300;" href="<?= $src ?>"<?php e($block->target() == "true", ' target="_blank"') ?>>
<?php e($block->buttonIcon()->isNotEmpty(), '<span class="" style="margin-right:5px;" uk-icon="icon:' . $block->buttonIcon() . '"></span>') ?><?= $block->text()->html() ?><?php e($block->buttonStyle() == " uk-button-link", '') ?>
</a>