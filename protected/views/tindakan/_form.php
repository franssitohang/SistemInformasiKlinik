<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tindakan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa'); ?>
		<?php echo $form->textField($model,'diagnosa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pemeriksaan'); ?>
		<?php echo $form->textField($model,'nama_pemeriksaan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_pemeriksaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_pemeriksaan'); ?>
		<?php echo $form->dateField($model,'waktu_pemeriksaan'); ?>
		<?php echo $form->error($model,'waktu_pemeriksaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->