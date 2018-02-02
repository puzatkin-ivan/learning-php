<?php

/**
 * Athletes form base class.
 *
 * @package    form
 * @subpackage athletes
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseAthletesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'first_name'  => new sfWidgetFormInput(),
      'second_name' => new sfWidgetFormInput(),
      'rank'        => new sfWidgetFormInput(),
      'biography'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => 'Athletes', 'column' => 'id', 'required' => false)),
      'first_name'  => new sfValidatorString(array('max_length' => 255)),
      'second_name' => new sfValidatorString(array('max_length' => 255)),
      'rank'        => new sfValidatorString(array('max_length' => 255)),
      'biography'   => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('athletes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->widgetSchema->setLabels(array(
        'first_name' => 'Имя',
        'second_name' => 'Фамилия',
        'rank' => 'Звание',
        'biography' => 'Биография',
    ));

    parent::setup();
  }

  public function getModelName()
  {
    return 'Athletes';
  }

}
