<?php

/**
 * BaseClick
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $site_id
 * @property integer $url_id
 * @property string $uri
 * @property integer $height
 * @property integer $width
 * @property integer $avail_height
 * @property integer $avail_width
 * @property integer $inner_height
 * @property integer $inner_width
 * @property integer $x
 * @property integer $y
 * @property Site $Site
 * 
 * @method integer getSiteId()       Returns the current record's "site_id" value
 * @method integer getUrlId()        Returns the current record's "url_id" value
 * @method string  getUri()          Returns the current record's "uri" value
 * @method integer getHeight()       Returns the current record's "height" value
 * @method integer getWidth()        Returns the current record's "width" value
 * @method integer getAvailHeight()  Returns the current record's "avail_height" value
 * @method integer getAvailWidth()   Returns the current record's "avail_width" value
 * @method integer getInnerHeight()  Returns the current record's "inner_height" value
 * @method integer getInnerWidth()   Returns the current record's "inner_width" value
 * @method integer getX()            Returns the current record's "x" value
 * @method integer getY()            Returns the current record's "y" value
 * @method Site    getSite()         Returns the current record's "Site" value
 * @method Click   setSiteId()       Sets the current record's "site_id" value
 * @method Click   setUrlId()        Sets the current record's "url_id" value
 * @method Click   setUri()          Sets the current record's "uri" value
 * @method Click   setHeight()       Sets the current record's "height" value
 * @method Click   setWidth()        Sets the current record's "width" value
 * @method Click   setAvailHeight()  Sets the current record's "avail_height" value
 * @method Click   setAvailWidth()   Sets the current record's "avail_width" value
 * @method Click   setInnerHeight()  Sets the current record's "inner_height" value
 * @method Click   setInnerWidth()   Sets the current record's "inner_width" value
 * @method Click   setX()            Sets the current record's "x" value
 * @method Click   setY()            Sets the current record's "y" value
 * @method Click   setSite()         Sets the current record's "Site" value
 * 
 * @package    heatmap
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClick extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('click');
        $this->hasColumn('site_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('url_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('uri', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('height', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('width', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('avail_height', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('avail_width', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('inner_height', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('inner_width', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('x', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('y', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Site', array(
             'local' => 'site_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}