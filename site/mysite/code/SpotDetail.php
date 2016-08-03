<?php
class SpotDetail extends Page {

  private static $db = array(
    'SpotName' => 'Text',
    'Description' => 'HTMLText',
    'isSecret' => 'Boolean', 
    'StreetAddress' => 'Text',
    'Intersection' => 'Text', 
    'City' => 'Text', 
    'Province' => 'Text'
  );

  private static $summary_fields = array( 
    'isSecret' => 'Secret'
  );

  private static $has_one = array(
    'SpotImage1' => 'Image',
    'SpotImage2' => 'Image',
    'SpotImage3' => 'Image',
  );


  private static $has_many = array(
  'SpotGalleryItems' => 'SpotGalleryItem'
  );

  public function getCMSFields() {
    $fields = parent::getCMSFields();
    $fields->removeFieldFromTab('Root.Main', 'Content');
    $fields->addFieldToTab('Root.Main', new TextField('SpotName', 'Spot Name'));
    $fields->addFieldToTab('Root.Main', new TextField('StreetAddress', 'Street Address'));
    $fields->addFieldToTab('Root.Main', new TextField('Intersection', 'Intersection'));
    $fields->addFieldToTab('Root.Main', new TextField('City', 'City'));
    $fields->addFieldToTab('Root.Main', new TextField('Province', 'Province'));

    $fields->addFieldToTab('Root.Main', new HTMLEditorField('Description', 'Spot Description'));
    
    $fields->addFieldToTab('Root.Main', new LiteralField('', '<h2>Will you kill someone for sharing this spot?</h2>'), 'Description');
    $fields->addFieldToTab('Root.Main', new CheckboxField("isSecret", "Yes"), 'Description');
    $fields->addFieldToTab('Root.Main', new UploadField('SpotImage1','Upload Spot Image (300 x 200px)'));
    $fields->addFieldToTab('Root.Main', new UploadField('SpotImage2','Upload Spot Image (300 x 200px)'));
    $fields->addFieldToTab('Root.Main', new UploadField('SpotImage3','Upload Spot Image (300 x 200px)'));
    
    
    return $fields;
  }
}

class SpotDetail_Controller extends Page_Controller {
  /**
  * An array of actions that can be accessed via a request. Each array element should be an action name, and the
  * permissions or conditions required to allow the user to access it.
  *
  * <code>
  * array (
  *     'action', // anyone can access this action
  *     'action' => true, // same as above
  *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
  *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
  * );
  * </code>
  *
  * @var array
  */
  private static $allowed_actions = array (
  );

  public function init() {
    parent::init();
    // You can include any CSS or JS required by your project here.
    // See: http://doc.silverstripe.org/framework/en/reference/requirements
  }
}