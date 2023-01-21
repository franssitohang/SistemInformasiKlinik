<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tindakan',
);

$this->menu=array(
	array('label'=>'Create Tindakan', 'url'=>array('create')),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>Tindakan</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tindakan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_pemeriksaan',
		'diagnosa',
		'nama_pemeriksaan',
		'waktu_pemeriksaan',
		'id_pasien',
	),
)); ?>