<?php


// Dashboard columns. 2 or 3
$config['supervisor_cols'] = 2;

// Refresh Dashboard every x seconds. 0 to disable
$config['refresh'] = 300;

// Enable or disable Alarm Sound
$config['enable_alarm'] = true;

// Show hostname after server name
$config['show_host'] = false;

$config['supervisor_servers'] = array(
	'hostname1' => array(
		'url' => 'http://192.168.0.1/RPC2',
		'port' => '9001',
		'username' => 'supervisord-monitor',
		'password' => 'passwd'
	),
	'hostname2' => array(
		'url' => 'http://192.168.0.2/RPC2',
                'port' => '9001',
		'username' => 'supervisord-monitor',
		'password' => 'passwd'
	),
	'hostname3' => array(
		'url' => 'http://192.168.0.3/RPC2',
                'port' => '9001',
		'username' => 'supervisord-monitor',
		'password' => 'passwd'
	),
	'hostname4' => array(
		'url' => 'http://192.168.0.4/RPC2',
                'port' => '9001',
		'username' => 'supervisord-monitor',
		'password' => 'passwd'
	),
	'hostname5' => array(
		'url' => 'http://192.168.0.5/RPC2',
                'port' => '9001',
		'username' => 'supervisord-monitor',
		'password' => 'passwd'
	),
);

// Set timeout connecting to remote supervisord RPC2 interface
$config['timeout'] = 3;

// Path to Redmine new issue url
$config['redmine_url'] = 'http://redmine.url/path_to_new_issue_url';

// Default Redmine assigne ID
$config['redmine_assigne_id'] = '69';


