<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nama_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_pasien'); ?>
		<?php echo $form->textField($model,'alamat_pasien',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'alamat_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->dropDownList($model,'jenis_kelamin',array('Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan')); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php echo $form->dateField($model,'tanggal_lahir'); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_telp'); ?>
		<?php echo $form->textField($model,'nomor_telp',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nomor_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_kunjungan'); ?>
		<?php echo $form->dateField($model,'tanggal_kunjungan'); ?>
		<?php echo $form->error($model,'tanggal_kunjungan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->