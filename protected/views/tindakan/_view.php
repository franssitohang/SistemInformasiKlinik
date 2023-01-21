<?php
/* @var $this TindakanController */
/* @var $data Tindakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_pemeriksaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_pemeriksaan), array('view', 'id'=>$data->no_pemeriksaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pemeriksaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pemeriksaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_pemeriksaan')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_pemeriksaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />


</div>