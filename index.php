<?php

/**
 * This file allows CodeIgniter to work when accessed from the root directory
 * instead of the public directory.
 */

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
chdir(FCPATH);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 */
require FCPATH . '../app/Config/Paths.php';
$paths = new Config\Paths();

require $paths->systemDirectory . '/Boot.php';

exit(CodeIgniter\Boot::bootWeb($paths));
