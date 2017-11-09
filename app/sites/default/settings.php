<?php

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'local',
  'username' => 'drupal',
  'password' => 'drupal',
  'host' => '127.0.0.1',
);

$settings['file_public_path'] = 'sites/default/files';
$config['system.file']['path']['temporary'] = '/tmp';
$settings['file_private_path'] = '/private';
$settings['install_profile'] = 'standard';

$config_directories['sync'] = DRUPAL_ROOT . '/../config-export';

$settings['hash_salt'] = !empty($settings['hash_salt']) ? $settings['hash_salt'] : 'ISF2Et9UB25yE1xP';

$settings['trusted_host_patterns'][] = '^127\.0\.0\.1$';
$settings['trusted_host_patterns'][] = '^localhost$';
$settings['trusted_host_patterns'][] = '^.+\.nickschuch\.com';