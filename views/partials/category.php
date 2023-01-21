<?php
use yii\helpers\Url;
?>

<div class="col-md-3" data-sticky_column>
    <aside class="widget border pos-padding">
        <h3 class="widget-title text-uppercase text-center">Categories</h3>
        <ul>
            <?php foreach ($categories as $category):?>
                <?php foreach ($articles as $article):?>

                <?php endforeach; ?>
                <li>
                    <a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id]); ?>"><?= $category->title ?></a>
                    <span class="post-count pull-right"> (<?= $category->getArticlesCount(); ?>)</span>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>