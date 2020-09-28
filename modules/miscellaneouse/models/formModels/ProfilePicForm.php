<?php

namespace app\modules\miscellaneouse\models\formModels;

use app\components\FormModel;
use Yii;

class ProfilePicForm extends FormModel
{
	const SCENARIO_USER = 'user';
	const SCENARIO_ORGANISATION = 'organisation';
	const SCENARIO_TEAM = 'team';

	public $id;
	public $file;

	public function scenarios()
	{
		return [
			ProfilePicForm::SCENARIO_USER => $this->attributes(),
            ProfilePicForm::SCENARIO_ORGANISATION => $this->attributes(),
            ProfilePicForm::SCENARIO_TEAM => $this->attributes(),
            ProfilePicForm::SCENARIO_CARDS => $this->attributes(),
		];
	}

	/**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['file', 'id'],
                'required'
            ],
            [
                'file',
                'image',
                'extensions' => 'png',
                'maxSize' => 1024 * 1024 * 5
            ]
        ];
    }

    /**
     * Creates a new user, or updates an existing one.
     *
     * @return void true, if the user was saved successfully
     */
    public function save()
    {
        $docRoot = Yii::getAlias("@app") . '/web/images/avatars/' . $this->getScenario() . '/';

        $filePathPng = $docRoot . $this->id . '.png';
        $filePathWebp = $docRoot . $this->id . '.webp';

        if (!is_dir($docRoot)) {
            mkdir($docRoot, 0777, true);
        }

        $this->file->saveAs($filePathPng);

        //Buggy mit 7.0.33, sollte ab 7.1.x aufwärts laufen, wenn "WebP Support === true"
        $im = imagecreatefrompng($filePathPng);
        imagewebp($im, $filePathWebp);

        // Workaround
        //$cmd = escapeshellcmd('cwebp ' . $filePathPng . ' -o ' . $filePathWebp);
        //shell_exec($cmd);
    }
}