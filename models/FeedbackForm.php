<?php
/**
 * Created by PhpStorm.
 * User: PERTURABO
 * Date: 03.09.2017
 * Time: 12:10
 */

namespace app\models;
use yii\base\Model;
use Yii;
class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $text1;
    public $company;

    public function rules()
    {
        return [
            [['name','email','subject','company','text1'],'required'],
            ['name', 'string','min'=>3, 'tooShort'=>'Слишком мало символов'],
            ['text','safe'],
        ];
    }

    public function feedback ($email)
    {
        if ($this->validate()) {
            $sent = Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setHtmlBody($this->text1)
                ->send();

            return true;
        }
        return false;
    }


}