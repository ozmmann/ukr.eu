<?php

namespace app\controllers;

use app\models\FeedbackForm;
use app\models\RegForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    /**
     * Displays Domain Management page.
     *
     * @return string
     */
    public function actionDomainsManagement()
    {
        return $this->render('domains-management');
    }


    /**
     * Displays Domain Management page.
     *
     * @return string
     */
    public function actionFaq()
    {
        return $this->render('faq');
    }

    /**
     * Displays Docs page.
     *
     * @return string
     */
    public function actionDocs()
    {
        return $this->render('docs');
    }
    /**
     * Displays Domain Registration page.
     *
     * @return string
     */
    public function actionDomainRegistration()
    {
        return $this->render('domain-registration');
    }
    /**
     * Displays Domain Pricing page.
     *
     * @return string
     */
    public function actionDomainDali()
    {
        return $this->render('domain-dali');
    }
    /**
     * Displays Hosting Registration page.
     *
     * @return string
     */
    public function actionHostingRegistration()
    {
        return $this->render('reghost');
    }
    /**
     * Displays Mail Registration page.
     *
     * @return string
     */
    public function actionMailRegistration()
    {
        $userReg = new RegForm();
        if($userReg->load(Yii::$app->request->post())){

            if($userReg->save()){
                return $this->refresh();
            }
        }
        return $this->render('regmail', ['userReg'=>$userReg,]);
    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionHp()
    {
        return $this->render('hp');
    }
    public function actionTyp()
    {
        return $this->render('typ');
    }

    /**
     * Displays Contacts page.
     * @return string|Response
     */

    public function actionContacts()
    {
        $model = new FeedbackForm();


        if ($model->load(Yii::$app->request->post()) && $model->feedback(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contacts', [
            'model' => $model,
        ]);

    }

    public function actionManager()
    {
        return $this->render('manager');
    }

    /**
     * Displays Hosting page.
     *
     * @return string
     */
    public function actionHosting()
    {
        return $this->render('hosting');
    }

}
