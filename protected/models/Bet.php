<?php

/**
 * This is the model class for table "Bet".
 *
 * The followings are the available columns in table 'Bet':
 * @property integer $id
 * @property integer $userId
 * @property integer $drawId
 * @property integer $gameId
 * @property integer $goals1
 * @property integer $goals2
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Draw $draw
 * @property Game $game
 */
class Bet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bet the static model class
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
		return 'Bet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, drawId, gameId, goals1, goals2, createdAt', 'required'),
			array('userId, drawId, gameId, goals1, goals2', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, drawId, gameId, goals1, goals2, createdAt', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
			'draw' => array(self::BELONGS_TO, 'Draw', 'drawId'),
			'game' => array(self::BELONGS_TO, 'Game', 'gameId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'drawId' => 'Draw',
			'gameId' => 'Game',
			'goals1' => 'Goals1',
			'goals2' => 'Goals2',
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
		$criteria->compare('userId',$this->userId);
		$criteria->compare('drawId',$this->drawId);
		$criteria->compare('gameId',$this->gameId);
		$criteria->compare('goals1',$this->goals1);
		$criteria->compare('goals2',$this->goals2);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}