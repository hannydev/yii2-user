<?php
	/**
	 * Created by PhpStorm.
	 * User: Abhimanyu
	 * Date: 27-02-2015
	 * Time: 10:37
	 */

	use kartik\alert\AlertBlock;
	use yii\widgets\ActiveForm;

	/** @var $this \yii\web\View */
	/** @var $model \abhimanyu\user\models\User */

	$this->title = 'Update User - ' . Yii::$app->name;

	echo AlertBlock::widget([
		                        'delay'           => 5000,
		                        'useSessionFlash' => TRUE
	                        ]);
?>

<div class="panel panel-default">
	<div class="panel-heading">Update User</div>

	<div class="panel-body">
		<?php
			$form = ActiveForm::begin([
				                          'enableAjaxValidation' => FALSE,
			                          ]);
		?>

		<div class="form-group">
			<?= $form->field($model, 'email')->textInput([
				                                             'class'        => 'form-control',
				                                             'autocomplete' => 'off',
				                                             'autofocus'    => 'on'
			                                             ]) ?>
		</div>

		<div class="form-group">
			<?= $form->field($model, 'username')->textInput([
				                                                'class'        => 'form-control',
				                                                'autocomplete' => 'off',
			                                                ]) ?>
		</div>

		<div class="form-group">
			<?= $form->field($model, 'password')->passwordInput([
				                                                    'class' => 'form-control',
			                                                    ])->hint('Enter new password here otherwise leave
			                                                    it blank') ?>
		</div>

		<div class="form-group">
			<div class="checkbox">
				<?= $form->field($model, 'super_admin')->checkbox() ?>
			</div>
		</div>

		<div class="form-group">
			<?= \yii\helpers\Html::submitButton('Update User', ['class' => 'btn btn-primary']) ?>
		</div>

		<?php $form::end(); ?>
	</div>
</div>