<?php

class PembayaranController extends Controller
{
	public function actionIndex()
	{
		$sql='SELECT resep.id_resep, obat.nama_obat, pasien.id_pasien, pasien.nama_pasien, resep.jumlah_obat*obat.harga_obat AS total_pembayaran
			  FROM resep
			  INNER JOIN obat ON resep.id_obat=obat.id_obat
			  INNER JOIN pasien ON resep.id_pasien=pasien.id_pasien';

		$dataProvider=new CSqlDataProvider($sql,array(
			'keyField' => 'resep.id_resep',
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,			
		));
	}

	public function actionDetail($id)
	{
		$sql="SELECT resep.id_resep, obat.nama_obat, pasien.id_pasien, resep.jumlah_obat, obat.harga_obat, pasien.nama_pasien, resep.jumlah_obat*obat.harga_obat AS total_pembayaran
			  FROM resep
			  INNER JOIN obat ON resep.id_obat=obat.id_obat
			  INNER JOIN pasien ON resep.id_pasien=pasien.id_pasien
			  WHERE resep.id_resep = '".$id."'";
		
		$dataProvider=new CSqlDataProvider($sql,array(
			'keyField' => 'resep.id_resep',
		));
		
		$this->render('detail',array(
			'dataProvider'=>$dataProvider,			
		));
	}

	public function actionProses($id)
	{
		$sql ='INSERT INTO transaksi (id_resep, status, tanggal_bayar) values (:id_resep, :status, :tanggal_bayar)';
		$parameters = array(":id_resep"=>$id, ":status"=>'Lunas', ':tanggal_bayar' => date('Y-m-d'));
		
		Yii::app()->db->createCommand($sql)->execute($parameters);

		$this->redirect('index.php?r=transaksi/index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}