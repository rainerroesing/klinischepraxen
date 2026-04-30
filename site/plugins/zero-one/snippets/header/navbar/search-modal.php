<div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-container uk-flex uk-flex-center uk-flex-middle uk-flex-column" style="background: rgba(255,255,255,0.8);" uk-height-viewport>
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <h4 class="uk-text-muted uk-text-center"><?= $site->labelSearchText()->html() ?></h4>
        <form class="uk-search uk-search-large" method="post" action="<?= page('search')->url() ?>">
            <input class="uk-search-input uk-text-center" name="q" type="search" placeholder="<?= $site->labelSearchPlaceholder()->html() ?>" autofocus>
        </form>
    </div>
</div>