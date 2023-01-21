<?php

/**
 * This is the model class for table "resep".
 *
 * The followings are the available columns in table 'resep':
 * @property integer $id_resep
 * @property string $nama_resep
 * @property integer $id_obat
 * @property integer $jumlah_obat
 * @property integer $id_pasien
 *
 * The followings are the available model relations:
 * @property Obat $idObat
 * @property Pasien $idPasien
 * @property Tindakan[] $tindakans
 * @property Transaksi[] $transaksis
 */
class Resep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_obat, jumlah_obat, id_pasien', 'numerical', 'integerOnly'=>true),
			array('nama_resep', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_resep, nama_resep, id_obat, jumlah_obat, id_pasien', 'safe', 'on'=>'search'),
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
			'idObat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'tindakans' => array(self::HAS_MANY, 'Tindakan', 'id_resep'),
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'id_resep'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_resep' => 'Id Resep',
			'nama_resep' => 'Nama Resep',
			'id_obat' => 'Id Obat',
			'jumlah_obat' => 'Jumlah Obat',
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

		$criteria->compare('id_resep',$this->id_resep);
		$criteria->compare('nama_resep',$this->nama_resep,true);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('jumlah_obat',$this->jumlah_obat);
		$criteria->compare('id_pasien',$this->id_pasien);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
