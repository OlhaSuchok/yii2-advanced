<?php

namespace frontend\widgets\myWidget;

use common\models\User;
use yii\base\Widget;

class myWidget extends Widget
{
    public function init()
    {

    }

    public function run()
    {
        $user = ['asdasd', 'asdas2d'];

        return $this->render('index', [compact('user')]);
    }
}