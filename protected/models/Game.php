<?php

/**
 * This is the model class for table "Game".
 *
 * The followings are the available columns in table 'Game':
 * @property integer $id
 * @property integer $team1Id
 * @property integer $team2Id
 * @property integer $tournamentId
 * @property string $startDate
 * @property integer $goals1
 * @property integer $goals2
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Bet[] $bets
 * @property Team $team1
 * @property Team $team2
 * @property Tournament $tournament
 */
class Game extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Game the static model class
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
		return 'Game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team1Id, team2Id, tournamentId, startDate, goals1, goals2, createdAt', 'required'),
			array('team1Id, team2Id, tournamentId, goals1, goals2', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team1Id, team2Id, tournamentId, startDate, goals1, goals2, createdAt', 'safe', 'on'=>'search'),
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
			'bets' => array(self::HAS_MANY, 'Bet', 'gameId'),
			'team1' => array(self::BELONGS_TO, 'Team', 'team1Id'),
			'team2' => array(self::BELONGS_TO, 'Team', 'team2Id'),
			'tournament' => array(self::BELONGS_TO, 'Tournament', 'tournamentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'team1Id' => 'Team1',
			'team2Id' => 'Team2',
			'tournamentId' => 'Tournament',
			'startDate' => 'Start Date',
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
		$criteria->compare('team1Id',$this->team1Id);
		$criteria->compare('team2Id',$this->team2Id);
		$criteria->compare('tournamentId',$this->tournamentId);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('goals1',$this->goals1);
		$criteria->compare('goals2',$this->goals2);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}