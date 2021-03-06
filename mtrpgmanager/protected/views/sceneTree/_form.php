<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scene-tree-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->labelEx($model,'scenario_id'); ?>
		<?php echo $form->dropDownList($model,'scenario_id', CHtml::listData(Scenario::model()->findAll(), 'id', 'title')); ?>
		<?php echo $form->error($model,'scenario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tabletop_id'); ?>
		<?php echo $form->dropDownList($model,'tabletop_id', CHtml::listData(Tabletop::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'tabletop_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scene_parent_num'); ?>
		<?php echo $form->dropDownList($model,'scene_parent_num', CHtml::listData(Scene::model()->findAll(), 'num', 'title')); ?>
		<?php echo $form->error($model,'scene_parent_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scene_child_num'); ?>
		<?php echo $form->dropDownList($model,'scene_child_num', CHtml::listData(Scene::model()->findAll(), 'num', 'title')); ?>
		<?php echo $form->error($model,'scene_child_num'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
