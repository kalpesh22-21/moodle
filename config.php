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
if (isset ($ _ SERVER ['HTTPS']) && $ _SERVER ['HTTPS'] == 'on') {
$ CFG-> wwwroot = 'https: //'. $ SERVER ['HTTPHOST']. '/moodle';
} Else {
$ CFG-> wwwroot = 'http: //'. $ SERVER ['HTTPHOST']. '/moodle';
};
$ CFG-> dataroot = 'http: //'. $ SERVER ['HTTPHOST']. '/moodledata';
$ CFG-> admin = 'admin';

$ CFG-> directorypermissions = 02775;

$ CFG-> passwordsaltmain = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
require_once (dirname (__ FILE__) '/lib/setup.php'.);

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
