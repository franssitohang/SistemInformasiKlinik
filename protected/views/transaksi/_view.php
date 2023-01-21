<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_transaksi), array('view', 'id'=>$data->no_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_resep')); ?>:</b>
	<?php echo CHtml::encode($data->id_resep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_bayar); ?>
	<br />


</div>