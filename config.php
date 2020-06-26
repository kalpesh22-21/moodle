<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-35-173-94-156.compute-1.amazonaws.com';
$CFG->dbname    = 'd7l1ue9vc94elp';
$CFG->dbuser    = 'fyrlumipptmdtp';
$CFG->dbpass    = 'cc0ed1b13803e351d2e9a495f773b44c0b8f70f0a643c99c5a9920829a47374b';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
);

$CFG->wwwroot   = '/tmp';
$CFG->dataroot  = 'http://gradlearning.herokuapp.com';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
