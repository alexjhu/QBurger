<?php

namespace app\models\FileUpload;

use Yii;
use yii\base\Model;


class UploadForm extends Model
{
    public $image;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['image'], 'required'],

            // tip 1 yii validator
//            [['image'], 'file', 'extensions' => 'png, jpg, xls'],
        ];
    }

    public function upload()
    {
        $this->image->saveAs('FileUpload/' . $this->image->baseName . '.' . $this->image->extension);
    }
}
