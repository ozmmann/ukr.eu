<?php
/**
 * Created by PhpStorm.
 * User: PERTURABO
 * Date: 04.09.2017
 * Time: 16:57
 */

namespace app\models;
use yii\db\ActiveRecord;

class RegForm extends ActiveRecord
{
        public static  function tableName()
        {
            return 'users';
        }

        public function rules()
        {
            return [
                [['first_name','last_name','user_email','email','reserved_email','user_phone','password'],'required'],
                ['user_email','email'],
            ];
        }
}