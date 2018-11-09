<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.03.2018
 * Time: 19:48
 */

namespace wscvua\adminltebox;


use yii\base\Widget;
use yii\helpers\ArrayHelper;

class BoxWidget extends Widget
{
    const TYPE_DEFAULT = 1;
    const TYPE_PRIMARY = 2;
    const TYPE_DANGER = 3;
    const TYPE_WARNING = 4;

    public $type = self::TYPE_DEFAULT;
    public $withBorder = true;
    public $afterContent = '';
    public $title = 'Title';

    public function getClass()
    {
        return ArrayHelper::getValue([
            self::TYPE_DEFAULT  => 'default',
            self::TYPE_PRIMARY  => 'primary',
            self::TYPE_DANGER   => 'danger',
            self::TYPE_WARNING  => 'warning',
        ], $this->type);
    }

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        $class = $this->getClass();
        $withBorder = $this->withBorder;
        $afterContent = $this->afterContent;
        $title = $this->title;

        return $this->render('index', compact('content', 'class', 'withBorder', 'afterContent', 'title'));
    }
}