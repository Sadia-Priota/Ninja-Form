<?php if( ! defined( 'ABSPATH' )) exit;

class NF_Fields_DarazCategory extends NF_Abstracts_Input
{
    protected $_name = 'DarazCategory';
    protected $_section = 'common';
    protected $_icon = 'text-width';
    protected $_aliases = array( 'input' );
    protected $_type = 'textbox';
    protected $_templates = 'textbox';
    protected $_test_value = 'Lorem ipsum';

    protected $_settings = array(
        'disable_browser_autocomplete',
        'mask',
        'custom_mask',
        'custom_name_attribute',
        'personally_identifiable'
    );

    public function __construct()
    {
        parent::__construct();

        $this->_nicename = esc_html__( 'Daraz Category List', 'ninja-forms' );

//        add_filter( 'ninja_forms_subs_export_field_value_' . $this->_name, array( $this, 'filter_csv_value' ), 10, 2 );
    }

    public function admin_form_element( $id, $value )
    {
         // return '<input class=" widefat" name="fields[' . absint( $id ) . ']" value="' . esc_attr( $value ) . '" type="text" />';
        return "<input class='widefat' name='fields[$id]' value='$value' /> ";
    }


//    public function filter_csv_value( $field_value, $field ) {
//
//        $field_value = WPN_Helper::maybe_escape_csv_column( $field_value );
//
//        return $field_value;
//    }

}