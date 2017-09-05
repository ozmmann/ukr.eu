<?php
/**
 * Created by PhpStorm.
 * User: PERTURABO
 * Date: 05.09.2017
 * Time: 11:03
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller
{
        public function behaviors()
        {
           return [
               'access' =>[
                   'class'=>AccessControl::className(),
                   'rules' =>[
                       [   'allow'=>true,
                           'roles'=>['@']
                       ]
                   ]
               ]
           ];
        }
}