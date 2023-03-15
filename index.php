<?php
// Silence is golden.
function acf_load_ninja_forms_field_choices( $field ) {

    if ( function_exists( 'ninja_forms_get_all_forms' ) ) {
        $choices = ninja_forms_get_all_forms();
    }

    // loop through array and add to field 'choices'
    if( is_array($choices) ) {

        foreach( $choices as $choice ) {

            $value = $choice['id'];
            $label = $choice['data']['title'];

            $field['choices'][ $value ] = $label;

        }

    }

    // add empty option
    $field['choices'] = array( ''=>'- Select a Form -' ) + $field['choices'];

    // return the field
    return $field;
}

add_filter('acf/load_field/name={$field_name}', 'acf_load_ninja_forms_field_choices');