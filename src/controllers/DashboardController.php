<?php
/**
 * @link https://entero.co.in/
 * @copyright Copyright (c) 2012 Entero Software Solutions Pvt.Ltd
 * @license https://entero.co.in/license/
 */

namespace codexten\yii\admin\controllers;

/**
 * Class DashboardController
 *
 * @package enyii\admin\controllers
 * @author Jomon Johnson <jomon@entero.in>
 */
class DashboardController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index.php');
    }
}
