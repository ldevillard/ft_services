<?php

$cfg['blowfish_secret'] = '';

$vars = array(
    'PMA_HOST',
	'PMA_PORT',
	'PMA_USER',
	'MYSQL_ROOT_PASSWORD'
);

foreach ($vars as $var) {
    $env = getenv($var);
    if (!isset($_ENV[$var]) && $env !== false) {
        $_ENV[$var] = $env;
    }
}

$i = 1;

$cfg['Servers'][$i]['auth_type'] = 'cookie';

$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['AllowNoPassword'] = true;

if (!empty($_ENV['PMA_HOST']))
	$cfg['Servers'][$i]['host'] = $_ENV['PMA_HOST'];

if (!empty($_ENV['PMA_PORT']))
	$cfg['Servers'][$i]['port'] = $_ENV['PMA_PORT'];

if (!empty($_ENV['PMA_USER']))
	$cfg['Servers'][$i]['user'] = $_ENV['PMA_USER'];

if (!empty($_ENV['MYSQL_ROOT_PASSWORD']))
	$cfg['Servers'][$i]['password'] = $_ENV['MYSQL_ROOT_PASSWORD'];

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['PmaAbsoluteUri'] = 'phpmyadmin-service:5000';
$cfg['blowfish_secret'] = '92063331075346123293311939426378';
