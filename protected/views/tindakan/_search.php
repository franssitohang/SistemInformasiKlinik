<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_pemeriksaan'); ?>
		<?php echo $form->textField($model,'no_pemeriksaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diagnosa'); ?>
		<?php echo $form->textField($model,'diagnosa',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pemeriksaan'); ?>
		<?php echo $form->textField($model,'nama_pemeriksaan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_pemeriksaan'); ?>
		<?php echo $form->textField($model,'waktu_pemeriksaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->