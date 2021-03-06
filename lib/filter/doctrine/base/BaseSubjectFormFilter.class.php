<?php

/**
 * Subject filter form base class.
 *
 * @package    candle
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSubjectFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'code'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'short_code'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'credit_value' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rozsah'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'external_id'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'code'         => new sfValidatorPass(array('required' => false)),
      'short_code'   => new sfValidatorPass(array('required' => false)),
      'credit_value' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rozsah'       => new sfValidatorPass(array('required' => false)),
      'external_id'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subject_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subject';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'code'         => 'Text',
      'short_code'   => 'Text',
      'credit_value' => 'Number',
      'rozsah'       => 'Text',
      'external_id'  => 'Text',
    );
  }
}
