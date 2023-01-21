<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id_pasien
 * @property string $nama_pasien
 * @property string $alamat_pasien
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $nomor_telp
 * @property string $tanggal_kunjungan
 *
 * The followings are the available model relations:
 * @property Resep[] $reseps
 * @property Tindakan[] $tindakans
 * @property Transaksi[] $transaksis
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pasien, alamat_pasien, nomor_telp', 'length', 'max'=>32),
			array('jenis_kelamin', 'length', 'max'=>10),
			array('tanggal_lahir, tanggal_kunjungan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, nama_pasien, alamat_pasien, jenis_kelamin, tanggal_lahir, nomor_telp, tanggal_kunjungan', 'safe', 'on'=>'search'),
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
			'reseps' => array(self::HAS_MANY, 'Resep', 'id_pasien'),
			'tindakans' => array(self::HAS_MANY, 'Tindakan', 'id_pasien'),
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'id_pasien'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pasien' => 'Id Pasien',
			'nama_pasien' => 'Nama Pasien',
			'alamat_pasien' => 'Alamat Pasien',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'nomor_telp' => 'Nomor Telp',
			'tanggal_kunjungan' => 'Tanggal Kunjungan',
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

		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('nama_pasien',$this->nama_pasien,true);
		$criteria->compare('alamat_pasien',$this->alamat_pasien,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('nomor_telp',$this->nomor_telp,true);
		$criteria->compare('tanggal_kunjungan',$this->tanggal_kunjungan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
