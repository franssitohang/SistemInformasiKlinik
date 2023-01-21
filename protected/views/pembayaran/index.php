<?php
/* @var $this PembayaranController */

$this->breadcrumbs=array(
	'Pembayaran',
);
?>
<h3>Jumlah pembayaran pasien</h3>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>    
<tr>
    <th>ID Pasien</th>
    <th>Nama Pasien</th>
    <th>Jumlah Pembayaran</th>
    <th>Action</th>
</tr>

<tr>

<?php  foreach($dataProvider->getData() as $i=>$row): ?>  
        <tr>
            <td><?=$row['id_pasien'];?></td>
            <td><?=$row['nama_pasien'];?></td>
            <td><?=$row['total_pembayaran'];?></td>
            <td><?php echo CHtml::link('Detail Pembayaran', array('detail', 'id'=>$row['id_resep'])); ?></td>            
        </tr>
  <?php endforeach;?>
</table>

</body>
</html>