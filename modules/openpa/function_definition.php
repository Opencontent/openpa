<?php

$FunctionList = array();
$FunctionList['ruoli'] = array( 'name' => 'ruoli',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchRuoli' ),
                                'parameter_type' => 'standard',
                                'parameters' => array(
                                                       array( 'name' => 'struttura_object_id',
                                                              'type' =>'integer',
                                                              'required' => false,
                                                              'default' => false ),
                                                       array( 'name' => 'dipendente_object_id',
                                                              'type' =>'integer',
                                                              'required' => false,
                                                              'default' => false ),
                                                       array( 'name' => 'subtree_array',
                                                              'type' =>'array',
                                                              'required' => false,
                                                              'default' => false ),                                                       
                                                       array( 'name' => 'role_names_type',
                                                              'type' =>'string',
                                                              'required' => false,
                                                              'default' => false ),
                                                       array( 'name' => 'role_names_array',
                                                              'type' =>'array',
                                                              'required' => false,
                                                              'default' => false )
                                                    )
                                );

$FunctionList['homepage'] = array( 'name' => 'homepage',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchHomepage' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );
                                
$FunctionList['nomi_ruoli_dirigenziali'] = array( 'name' => 'nomi_ruoli_dirigenziali',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchNomiRuoliDirigenziali' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['dirigenti'] = array( 'name' => 'dirigenti',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchDirigenti' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['footer_links'] = array(  'name' => 'footer_links',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchFooterLinks' ),
                                'parameter_type' => 'standard',
                                'parameters' => array()
                                );

$FunctionList['footer_notes'] = array(  'name' => 'footer_notes',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchFooterNotes' ),
                                'parameter_type' => 'standard',
                                'parameters' => array()
                                );

$FunctionList['aree'] = array(  'name' => 'aree',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchAree' ),
                                'parameter_type' => 'standard',
                                'parameters' => array()
                                );

$FunctionList['servizi'] = array( 'name' => 'servizi',
                                  'operation_types' => array( 'read' ),
                                  'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                          'class' => 'OpenPaFunctionCollection',
                                                          'method' => 'fetchServizi' ),
                                  'parameter_type' => 'standard',
                                  'parameters' => array()
                                );

$FunctionList['uffici'] = array( 'name' => 'uffici',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchUffici' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['strutture'] = array( 'name' => 'strutture',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchStrutture' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['dipendenti'] = array( 'name' => 'dipendenti',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchDipendenti' ),
                               'parameter_type' => 'standard',
                               'parameters' => array(
                                                       array( 'name' => 'struttura',
                                                              'type' =>'object',
                                                              'required' => false,
                                                              'default' => false ),
                                                       array( 'name' => 'subtree',
                                                              'type' => 'array',
                                                              'required' => false,
                                                              'default' => false )                                                       
                                                    )
                                );

$FunctionList['header_banner_background_style'] = array( 'name' => 'header_image',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchHeaderImageStyle' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['header_logo_background_style'] = array( 'name' => 'header_logo',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchHeaderLogoStyle' ),
                               'parameter_type' => 'standard',
                               'parameters' => array()
                                );

$FunctionList['calendario_eventi'] = array( 'name' => 'eventi',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchCalendarioEventi' ),
                               'parameter_type' => 'standard',
                               'parameters' => array(
                                                       array( 'name' => 'calendar',
                                                              'type' => 'object',
                                                              'required' => true,
                                                              'default' => false ),
                                                       array( 'name' => 'params',
                                                              'type' => 'array',
                                                              'required' => true,
                                                              'default' => array() )
                                                    )
                                );

$FunctionList['faccette_classi_oggetti_correlati_inversi'] = array( 'name' => 'faccette_classi_oggetti_correlati_inversi',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'extension/openpa/classes/openpafunctioncollection.php',
                                                        'class' => 'OpenPaFunctionCollection',
                                                        'method' => 'fetchReverseRelatedObjectClassFacets' ),
                               'parameter_type' => 'standard',
                               'parameters' => array(
                                                       array( 'name' => 'object',
                                                              'type' => 'object',
                                                              'required' => true,
                                                              'default' => false ),
                                                       array( 'name' => 'class_filter_type',
                                                              'type' => 'string',
                                                              'required' => false,
                                                              'default' => 'exclude' ),
                                                       array( 'name' => 'class_filter_array',
                                                              'type' => 'array',
                                                              'required' => false,
                                                              'default' => array() ),
                                                       array( 'name' => 'sort_by',
                                                              'type' => 'string',
                                                              'required' => false,
                                                              'default' => 'count' ),
                                                       array( 'name' => 'subtree_array',
                                                              'type' => 'array',
                                                              'required' => false,
                                                              'default' => false )
                                                    )
                                );

$FunctionList['list_count'] = array( 'name' => 'list_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method' => array( 'class' => 'OpenPaFunctionCollection',
                                                             'method' => 'fetchObjectTreeCount' ),
                                     'parameter_type' => 'standard',
                                     'parameters' => array( array( 'name' => 'parent_node_id',
                                                                   'type' => 'integer',
                                                                   'required' => true ),
                                                            array( 'name' => 'only_translated',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'language',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'class_filter_type',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'class_filter_array',
                                                                   'type' => 'array',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'attribute_filter',
                                                                   'type' => 'mixed',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'depth',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => 1 ),
                                                            array( 'name' => 'depth_operator',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => 'le' ),
                                                            array( 'name' => 'ignore_visibility',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'limitation',
                                                                   'type' => 'array',
                                                                   'required' => false,
                                                                   'default' => null ),
                                                            array( 'name' => 'main_node_only',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'extended_attribute_filter',
                                                                   'type' => 'mixed',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'objectname_filter',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => null ) ) );

$FunctionList['list'] = array( 'name' => 'list',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'class' => 'OpenPaFunctionCollection',
                                                       'method' => 'fetchObjectTree' ),
                               'parameter_type' => 'standard',
                               'parameters' => array( array( 'name' => 'parent_node_id',
                                                             'type' => 'integer',
                                                             'required' => true ),
                                                      array( 'name' => 'sort_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => array() ),
                                                      array( 'name' => 'only_translated',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'language',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'offset',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limit',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'depth',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => 1 ),
                                                      array( 'name' => 'depth_operator',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => 'le' ),
                                                      array( 'name' => 'class_id',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'extended_attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_type',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_array',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'group_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'main_node_only',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'ignore_visibility',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limitation',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'as_object',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'objectname_filter',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'load_data_map',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => null ) ) );

$FunctionList['tree'] = array( 'name' => 'tree',
                               'operation_types' => array( 'read' ),
                               'call_method' => array(
                                   'class' => 'OpenPaFunctionCollection',
                                   'method' => 'fetchObjectTree' ),
                               'parameter_type' => 'standard',
                               'parameters' => array( array( 'name' => 'parent_node_id',
                                                             'type' => 'integer',
                                                             'required' => true ),
                                                      array( 'name' => 'sort_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => array() ),
                                                      array( 'name' => 'only_translated',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'language',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'offset',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limit',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'depth',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'depth_operator',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_id',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'extended_attribute_filter',
                                                             'type' => 'mixed',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_type',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'class_filter_array',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'group_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'main_node_only',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'ignore_visibility',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limitation',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'as_object',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'objectname_filter',
                                                             'type' => 'string',
                                                             'required' => false,
                                                             'default' => null ),
                                                      array( 'name' => 'load_data_map',
                                                             'type' => 'bool',
                                                             'required' => false,
                                                             'default' => null ) ) );

$FunctionList['tree_count'] = array( 'name' => 'tree_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method' => array( 'class' => 'OpenPaFunctionCollection',
                                                             'method' => 'fetchObjectTreeCount' ),
                                     'parameter_type' => 'standard',
                                     'parameters' => array( array( 'name' => 'parent_node_id',
                                                                   'type' => 'integer',
                                                                   'required' => true ),
                                                            array( 'name' => 'only_translated',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'language',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'class_filter_type',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'class_filter_array',
                                                                   'type' => 'array',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'attribute_filter',
                                                                   'type' => 'mixed',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'depth',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'depth_operator',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'ignore_visibility',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'limitation',
                                                                   'type' => 'array',
                                                                   'required' => false,
                                                                   'default' => null ),
                                                            array( 'name' => 'main_node_only',
                                                                   'type' => 'bool',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'extended_attribute_filter',
                                                                   'type' => 'mixed',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'objectname_filter',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => null ) ) );
$FunctionList['recaptcha_html'] = array( 'name' => 'recaptcha_html',
                                         'operation_types' => array( 'read' ),
                                         'call_method' => array(
                                             'class' => 'OpenPaFunctionCollection',
                                             'method' => 'fetchRecaptchaHTML'
                                         ),
                                         'parameter_type' => 'standard',
                                         'parameters' => array() );

?>
