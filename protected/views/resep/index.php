<?php
/* @var $this ResepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resep',
);

$this->menu=array(
	array('label'=>'Create Resep', 'url'=>array('create')),
	array('label'=>'Manage Resep', 'url'=>array('admin')),
);
?>

<h1>Resep</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'resep-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_resep',
		'nama_resep',
		'id_obat',
		'jumlah_obat',
		'id_pasien',
	),
)); ?>