<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->no_transaksi,
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'Create Transaksi', 'url'=>array('create')),
	array('label'=>'Update Transaksi', 'url'=>array('update', 'id'=>$model->no_transaksi)),
	array('label'=>'Delete Transaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_transaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksi', 'url'=>array('admin')),
);
?>

<h1>View Transaksi #<?php echo $model->no_transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_transaksi',
		'id_resep',
		'status',
		'tanggal_bayar',
	),
)); ?>
