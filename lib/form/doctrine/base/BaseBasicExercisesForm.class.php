<?php

/**
 * BasicExercises form base class.
 *
 * @package    form
 * @subpackage basic_exercises
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseBasicExercisesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInput(),
      'type'        => new sfWidgetFormInput(),
      'description' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => 'BasicExercises', 'column' => 'id', 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'type'        => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'BasicExercises', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('basic_exercises[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->widgetSchema->setLabels(array(
        "name" => "Название",
        "type" => "Тип",
        "description" => "Описание",
    ));

    parent::setup();
  }

  public function getModelName()
  {
    return 'BasicExercises';
  }

}
