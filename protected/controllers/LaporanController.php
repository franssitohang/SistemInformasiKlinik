<?php

class LaporanController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionTindakan()
	{
		$sql='SELECT count(no_pemeriksaan) FROM tindakan GROUP BY waktu_pemeriksaan';
		$sql1='SELECT waktu_pemeriksaan FROM tindakan';

		$dataProvider=new CSqlDataProvider($sql,array(
			'keyField' => 'no_pemeriksaan',
		));
		$dataProvider1=new CSqlDataProvider($sql1,array(
			'keyField' => 'waktu_pemeriksaan',
		));

		$this->render('laporan_tindakan',array(
			'dataProvider'=>$dataProvider,
			'dataProvider1'=>$dataProvider1,			
		));

	}

	public function actionPasien()
	{
		
		$sql_kunjungan='SELECT count(id_pasien) FROM pasien GROUP BY tanggal_kunjungan';
		$sql_kunjungan1='SELECT tanggal_kunjungan FROM pasien';
		
		$dataProvider2=new CSqlDataProvider($sql_kunjungan,array(
			'keyField' => 'waktu_pemeriksaan',
		));
		$dataProvider3=new CSqlDataProvider($sql_kunjungan1,array(
			'keyField' => 'waktu_pemeriksaan',
		));
		$this->render('laporan_pasien',array(
			'dataProvider2'=>$dataProvider2,
			'dataProvider3'=>$dataProvider3,
		));
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