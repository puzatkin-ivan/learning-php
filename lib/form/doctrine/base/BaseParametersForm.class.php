<?php

/**
 * Parameters form base class.
 *
 * @package    form
 * @subpackage parameters
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseParametersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'parameter' => new sfWidgetFormDoctrineSelect(array('model' => 'Parameters', 'add_empty' => false)),
      'content' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'parameter' => new sfValidatorString(array('max_length' => 255)),
      'content' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Parameters', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('parameters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parameters';
  }

}
