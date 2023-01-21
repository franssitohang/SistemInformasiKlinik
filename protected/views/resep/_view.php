<?php
/* @var $this ResepController */
/* @var $data Resep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_resep')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_resep), array('view', 'id'=>$data->id_resep)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_resep')); ?>:</b>
	<?php echo CHtml::encode($data->nama_resep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_obat')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />


</div>