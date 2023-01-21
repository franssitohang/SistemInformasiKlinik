<?php
/* @var $this PasienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pasien',
);

$this->menu=array(
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>Daftar Pasien</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pasien-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pasien',
		'nama_pasien',
		'alamat_pasien',
		'jenis_kelamin',
		'tanggal_lahir',
		'nomor_telp',
		'tanggal_kunjungan'
	),
)); ?>
