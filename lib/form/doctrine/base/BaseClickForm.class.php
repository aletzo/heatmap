<?php

/**
 * Click form base class.
 *
 * @method Click getObject() Returns the current form's model object
 *
 * @package    heatmap
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClickForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'site_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => false)),
      'url_id'       => new sfWidgetFormInputText(),
      'uri'          => new sfWidgetFormInputText(),
      'height'       => new sfWidgetFormInputText(),
      'width'        => new sfWidgetFormInputText(),
      'avail_height' => new sfWidgetFormInputText(),
      'avail_width'  => new sfWidgetFormInputText(),
      'inner_height' => new sfWidgetFormInputText(),
      'inner_width'  => new sfWidgetFormInputText(),
      'x'            => new sfWidgetFormInputText(),
      'y'            => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'site_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Site'))),
      'url_id'       => new sfValidatorInteger(),
      'uri'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'height'       => new sfValidatorInteger(array('required' => false)),
      'width'        => new sfValidatorInteger(array('required' => false)),
      'avail_height' => new sfValidatorInteger(array('required' => false)),
      'avail_width'  => new sfValidatorInteger(array('required' => false)),
      'inner_height' => new sfValidatorInteger(array('required' => false)),
      'inner_width'  => new sfValidatorInteger(array('required' => false)),
      'x'            => new sfValidatorInteger(array('required' => false)),
      'y'            => new sfValidatorInteger(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('click[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Click';
  }

}
