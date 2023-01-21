<?php  foreach($dataProvider->getData() as $i=>$row): ?>  
    <h1>Detail Pembayaran Resep #<?php echo $row['id_resep']; ?></h1>
    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$row,
	'attributes'=>array(
		'id_pasien',
		'nama_pasien',
		'id_resep',
		'nama_obat',
        'jumlah_obat',
        'harga_obat',
        'total_pembayaran',
	),
    )); ?>    
    <br>
   <?php echo CHtml::button('Proses Pembayaran', array('onclick' => 'js:document.location.href="index.php?r=pembayaran/proses&id='.$row['id_resep'].'"')); ?>
<?php endforeach;?>

