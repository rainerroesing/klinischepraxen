<?php

echo '<title>';
if ($page->isHomePage() and $site->HomePage()->metaTitle()->isNotEmpty()) {
    echo $site->HomePage()->metaTitle();
}
elseif ($page->isHomePage() and $site->metaTitle()->isNotEmpty()) {
    echo $site->metaTitle();
    } elseif($page->is($site->children()->findBy('template', 'blog'))) {
    if ($category OR $tag OR $year) {
        echo $page->title() . ' ' . $site->labelArchivesTitle()->html() . '&nbsp;' . Str::ucfirst($category), Str::ucfirst($tag), $year . ' | ' . $site->title();
    } elseif($page->metaTitle()->isNotEmpty()) {
        echo $page->metaTitle() . ' | ' . $site->title();
    } else {
        echo $page->title() . ' | ' . $site->title();
    } 
}
elseif($page->is($site->children()->findBy('template', 'shop'))) {
    if ($category OR $tag) {
        echo $page->title() . ' ' . $site->labelArchivesTitle()->html() . '&nbsp;' . Str::ucfirst($category), Str::ucfirst($tag) . ' | ' . $site->title();
    } elseif($page->metaTitle()->isNotEmpty()) {
        echo $page->metaTitle() . ' | ' . $site->title();
    } else {
        echo $page->title() . ' | ' . $site->title();
    } 
} else {
    if($page->metaTitle()->isNotEmpty()) {
        echo $page->metaTitle() . ' | ' . $site->title();
    } else {
    echo $page->title() . ' | ' . $site->title();
    }
};
echo '</title>';