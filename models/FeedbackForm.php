<?php
/**
 * Created by PhpStorm.
 * User: PERTURABO
 * Date: 03.09.2017
 * Time: 12:10
 */

namespace app\models;
use yii\base\Model;

class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $text;
    public $company;

    public function rules()
    {
        return [
            [['name','email','subject','company'],'required'],
            ['name', 'string','min'=>3, 'tooShort'=>'Слишком мало символов'],
            ['text','safe'],
        ];
    }

}