
<?php
class NF_CustomPlugin_Fields_Blah extends NF_Fields_Textbox {
protected $_name = 'blah';
protected $_section = 'common'; // section in backend
protected $_type = 'textbox'; // field type
protected $_templates = 'textbox'; // template; it's possible to create custom field templates

public function __construct() {
parent::__construct();

$this->_nicename = __( 'Blah Field', 'ninja-forms' );
}
}