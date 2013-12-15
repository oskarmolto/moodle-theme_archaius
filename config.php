<?php

////////////////////////////////////////////////////////////////////////////////
/// This file contains a few configuration variables that control
/// how Moodle uses this theme.
////////////////////////////////////////////////////////////////////////////////

$THEME->name = 'archaius';

$THEME->sheets = array('base','archaius' , 'archaius_screens','course','slideshow', 'home','boilerplate');
/// This variable is an array containing the names of all the
/// stylesheet files you want included in this theme, and in what order
////////////////////////////////////////////////////////////////////////////////

$THEME->parents = array('base');  
$THEME->parents_exclude_sheets = array('base'=>array('styles_moz'));

$THEME->editor_sheets = array('editor');

$THEME->layouts = array(
    // Most pages - if we encounter an unknown or a missing page type, this one is used.
    'base' => array(
        'file' => 'general.php',
        'regions' => array()
    ),
    'standard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true)
    ),
    // Course page
    'course' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','side-post',
            'side-center-pre','side-center-post'),
        'defaultregion' => 'side-pre', 
        'options' => array('langmenu' => true, 'nonavbar' => false)
    ),
    // Course page
    'coursecategory' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true)
    ),
    'incourse' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true)
    ),
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre', 'side-post',
            'side-center-pre','side-center-post'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true, 'nonavbar' => true, 'nosubtitle' => true)
    ),
    'admin' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true)
    ),
    'mydashboard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post',
            'side-center-pre','side-center-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true)
    ),
    'mypublic' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true)
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array()
    ),
    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter', 'noblocks'=>true),
    ),
    // Embeded pages, like iframe embeded in moodleform
    'embedded' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>false, 'noblocks'=>true),
    ),
    'report' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => false)
    ),
);

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->javascripts_footer = array('jquery-1.10.2.min','responsiveslideuglify',
    'archaius','archaius_home');


$THEME->enable_dock = false;

$THEME->editor_sheets = array('editor');
$THEME->csspostprocess = 'archaius_process_css';
