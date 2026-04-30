<?php 
    $author = $page->author()->isNotEmpty() ? $page->author()->toUser()->name() : kirby()->site()->author();
    $desc = $page->metaDescription()->isNotEmpty() ? $page->metaDescription() : ($page->template() == "article" ? ($page->desc()->isNotEmpty() ? $page->desc() : kirby()->site()->metaDescription()) : kirby()->site()->metaDescription());
    $robot = (urldecode(param('tag') ?? '') OR urldecode(param('category') ?? '') OR (urldecode(param('year') ?? '') and urldecode(param('month') ?? ''))) ? 'noindex,nofollow' : 'index,follow,noodp';
?>

<meta content="<?= $author ?>" name="author" />
<meta content="<?= $desc ?>" name="description" />
<meta content="<?= $robot ?>" name="robots" />