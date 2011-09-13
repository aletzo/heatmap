<?php

/**
 * Click filter form base class.
 *
 * @package    heatmap
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClickFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'site_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'url_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uri'          => new sfWidgetFormFilterInput(),
      'height'       => new sfWidgetFormFilterInput(),
      'width'        => new sfWidgetFormFilterInput(),
      'avail_height' => new sfWidgetFormFilterInput(),
      'avail_width'  => new sfWidgetFormFilterInput(),
      'inner_height' => new sfWidgetFormFilterInput(),
      'inner_width'  => new sfWidgetFormFilterInput(),
      'x'            => new sfWidgetFormFilterInput(),
      'y'            => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'site_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Site'), 'column' => 'id')),
      'url_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'uri'          => new sfValidatorPass(array('required' => false)),
      'height'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'width'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'avail_height' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'avail_width'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inner_height' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inner_width'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'x'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'y'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('click_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Click';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'site_id'      => 'ForeignKey',
      'url_id'       => 'Number',
      'uri'          => 'Text',
      'height'       => 'Number',
      'width'        => 'Number',
      'avail_height' => 'Number',
      'avail_width'  => 'Number',
      'inner_height' => 'Number',
      'inner_width'  => 'Number',
      'x'            => 'Number',
      'y'            => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
