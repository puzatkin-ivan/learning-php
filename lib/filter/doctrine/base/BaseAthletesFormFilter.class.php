<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Athletes filter form base class.
 *
 * @package    filters
 * @subpackage Athletes *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseAthletesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name'  => new sfWidgetFormFilterInput(),
      'second_name' => new sfWidgetFormFilterInput(),
      'rank'        => new sfWidgetFormFilterInput(),
      'biography'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'first_name'  => new sfValidatorPass(array('required' => false)),
      'second_name' => new sfValidatorPass(array('required' => false)),
      'rank'        => new sfValidatorPass(array('required' => false)),
      'biography'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('athletes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Athletes';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'first_name'  => 'Text',
      'second_name' => 'Text',
      'rank'        => 'Text',
      'biography'   => 'Text',
    );
  }
}