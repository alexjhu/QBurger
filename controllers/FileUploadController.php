<?php

namespace app\controllers;

use app\models\FileUpload\UploadForm;
use Yii;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\UploadedFile;

class FileUploadController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        $upload = new UploadForm();

        return $this->render('index', [
            'upload' => $upload,
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionUpload()
    {

        $upload = new UploadForm();

        if (Yii::$app->request->isPost) {
            $upload->image = UploadedFile::getInstance($upload, 'image');


            if ($upload->validate()
            // tip 2 getmime
//            && in_array(FileHelper::getMimeType($upload->image->tempName),
//                    [
//                        'image/png',
//                        'image/jpeg',
//                        'image/jpg',
//                        'application/vnd.ms-office',
//                        'application/vnd.ms-excel'
//                    ])
            ) {

                // tip 3 else function
//                if (!@imagecreatefrompng($upload->image->tempName)) {
//                    return $this->renderContent('fail: not image');
//                }

                $upload->upload();
                return $this->renderContent('success');
            } else {
                return $this->renderContent('fail: ' . implode($upload->getErrorSummary(true)));
            }
        } else {
            return $this->redirect(["file-upload/index"]);
        }

    }

    public function actionMoxie()
    {

        return $this->render('moxie');
    }

}
