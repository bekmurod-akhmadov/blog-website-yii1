<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property integer $category_id
 * @property string $created_at
 * @property string $updated_date
 * @property integer $seen_count
 * @property integer $author_id
 * @property integer $banner_id
 * @property integer $status
 * @property string $body
 * @property string $slug_title
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, category_id, body', 'required'),
			array('category_id, seen_count, author_id, banner_id, status', 'numerical', 'integerOnly'=>true),
			array('title, description, image', 'length', 'max'=>255),
			array('slug_title', 'length', 'max'=>500),
			array('created_at, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, image, category_id, created_at, updated_date, seen_count, author_id, banner_id, status, body, slug_title', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'image' => 'Image',
			'category_id' => 'Category',
			'created_at' => 'Created At',
			'updated_date' => 'Updated Date',
			'seen_count' => 'Seen Count',
			'author_id' => 'Author',
			'banner_id' => 'Banner',
			'status' => 'Status',
			'body' => 'Body',
			'slug_title' => 'Slug Title',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('seen_count',$this->seen_count);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('banner_id',$this->banner_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('slug_title',$this->slug_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
