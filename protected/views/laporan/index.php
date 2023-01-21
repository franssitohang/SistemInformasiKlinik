<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Chart'=>array('index'),
	'Laporan',
);
?>

<li><?php echo CHtml::link('Jumlah Kunjungan', array('laporan/pasien')); ?></li>
<li><?php echo CHtml::link('Jumlah Pemeriksaan',array('laporan/tindakan'));?></li>