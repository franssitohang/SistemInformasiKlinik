<?php

/**
 * This is the model class for table "tindakan".
 *
 * The followings are the available columns in table 'tindakan':
 * @property integer $no_pemeriksaan
 * @property string $diagnosa
 * @property string $nama_pemeriksaan
 * @property string $waktu_pemeriksaan
 * @property integer $id_pasien
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property Transaksi[] $transaksis
 */
class Tindakan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tindakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien', 'numerical', 'integerOnly'=>true),
			array('diagnosa, nama_pemeriksaan', 'length', 'max'=>255),
			array('waktu_pemeriksaan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_pemeriksaan, diagnosa, nama_pemeriksaan, waktu_pemeriksaan, id_pasien', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'no_pemeriksaan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_pemeriksaan' => 'No Pemeriksaan',
			'diagnosa' => 'Diagnosa',
			'nama_pemeriksaan' => 'Nama Pemeriksaan',
			'waktu_pemeriksaan' => 'Waktu Pemeriksaan',
			'id_pasien' => 'Id Pasien',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('no_pemeriksaan',$this->no_pemeriksaan);
		$criteria->compare('diagnosa',$this->diagnosa,true);
		$criteria->compare('nama_pemeriksaan',$this->nama_pemeriksaan,true);
		$criteria->compare('waktu_pemeriksaan',$this->waktu_pemeriksaan,true);
		$criteria->compare('id_pasien',$this->id_pasien);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tindakan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
