<?php
/**
 * @link https://entero.co.in/
 * @copyright Copyright (c) 2012 Entero Software Solutions Pvt.Ltd
 * @license https://entero.co.in/license/
 * @author Jomon Johnson <jomon@entero.in>
 */

use codexten\yii\web\widgets\Page;

/* @var $this \yii\web\View */

$this->title = Yii::t('entero:admin', 'Dashboard')
?>
<?php $page = Page::begin([
    'layout' => 'blank',
    'title' => $this->title,
]) ?>

<?php $page->beginContent('content') ?>

    contents here

<?php $page->endContent() ?>

<?php $page->end() ?>