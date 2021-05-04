<?php
/*****
 * PHPFormMaker
 *
 * @category PHP_Form
 * @package  PHPFormMaker
 * @author   Vanstone Online <jason@vanstoneonline.com>
 * @license  G.P.L Version 3.0 or higher
 * @link     https://jobcanada.org/immigration-assessment.php
 */


 /**
  * Debug the PHPMakerForm
  */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Call Required Clasess by used and autoload
 *
 */
require_once __DIR__ . '/vendor/autoload.php';


//session_start();

require_once 'config.php';
require 'header.php';
require 'body.php';
require 'footer.php';
