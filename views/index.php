<?php
/**
 * @var $this \yii\web\View
 * @var $title string
 * @var $content string
 * @var $class string
 * @var $withBorder boolean
 * @var $afterContent string
 */
use yii\helpers\Html;

?>
<div class="box box-<?= $class ?>">
    <?= Html::beginTag('div', [
        'class' => ['box-header', $withBorder ? 'with-border' : '']
    ]); ?>
        <?= Html::tag('h3', $title, ['class' => [
            'box-title',
            $withBorder ? 'with-border' : ''
        ]]); ?>
    <?= Html::endTag('div'); ?>
    <div class="box-body">
        <?= $content; ?>
    </div>
    <?= $afterContent; ?>
</div>