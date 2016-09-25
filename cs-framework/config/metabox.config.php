<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------

$options[]    = array(
    'id'        => '_custom_data',
    'title'     => 'Desde',
    'post_type' => 'job_listing',
    'context'   => 'side',
    'priority'  => 'high',
    'sections'  => array(

        array(
            'name'   => 'section_4',
            'fields' => array(
                array(
                    'id'    => 'currency',
                    'type'  => 'text',
                    'title' => 'Input the currency ',
                ),
                array(
                    'id'    => 'desde',
                    'type'  => 'text',
                    'title' => 'Input the amount only ',
                ),

            ),
        ),

    ),
);
CSFramework_Metabox::instance( $options );
