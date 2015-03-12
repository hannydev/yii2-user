<?php
	/**
	 * Created by PhpStorm.
	 * User: Abhimanyu
	 * Date: 12-03-2015
	 * Time: 10:08
	 */

	namespace abhimanyu\user\models;

	use yii\base\Model;

	class SettingsForm extends Model
	{
		public $canRegister;
		public $canRecoverPassword;

		public function rules()
		{
			return [
				// Can Register
				['canRegister', 'boolean'],

				// Can Recover Password
				['canRecoverPassword', 'boolean']
			];
		}

		public function attributeLabels()
		{
			return [
				'canRegister'        => 'Allow Registration?',
				'canRecoverPassword' => 'Allow Password Recovery?'
			];
		}
	}