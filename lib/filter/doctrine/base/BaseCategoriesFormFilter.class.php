<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Categories filter form base class.
 *
 * @package    filters
 * @subpackage Categories *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseCategoriesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categories_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categories';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'name' => 'Text',
    );
  }
}