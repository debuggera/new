<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg', 'maxFiles' => 3],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $id = Ads::find()->orderBy('id DESC')->one();
            $id2 = $id->id + 1;
            $i = 1;
            $file1 = array();
            foreach ($this->imageFile as $file) {
                $file->saveAs('photos/' . $id2 . '-'.$i.'.' . $file->extension);
                $i++;
            }
            for ($j=1;$j<$i;$j++) {
                copy('photos/' . $id2 . '-' . $j . '.' . "jpg", 'photos/img/' . $id2 . '-' . $j . '.' . "jpg");
            }

            return true;
        } else {
            return false;
        }
    }




}