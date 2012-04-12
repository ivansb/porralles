<?php

/**
 * This is the model class for table "Draw".
 *
 * The followings are the available columns in table 'Draw':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $tournamentId
 * @property integer $repeats
 * @property integer $lot
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Bet[] $bets
 * @property Tournament $tournament
 * @property Participant[] $participants
 */
class Draw extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Draw the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Draw';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tournamentId, repeats, lot, createdAt', 'required'),
			array('tournamentId, repeats, lot', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, tournamentId, repeats, lot, createdAt', 'safe', 'on'=>'search'),
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
			'bets' => array(self::HAS_MANY, 'Bet', 'drawId'),
			'tournament' => array(self::BELONGS_TO, 'Tournament', 'tournamentId'),
			'participants' => array(self::HAS_MANY, 'Participant', 'drawId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'tournamentId' => 'Tournament',
			'repeats' => 'Repeats',
			'lot' => 'Lot',
			'createdAt' => 'Created At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tournamentId',$this->tournamentId);
		$criteria->compare('repeats',$this->repeats);
		$criteria->compare('lot',$this->lot);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}