<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-27 07:38:30 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: No such host is known.  E:\xampp\htdocs\doctorApp\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-01-27 07:38:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: No such host is known.  E:\xampp\htdocs\doctorApp\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-01-27 07:38:30 --> Unable to connect to the database
ERROR - 2018-01-27 10:26:31 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2018-01-27 10:26:31 --> #0 E:\xampp\htdocs\doctorApp\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 E:\xampp\htdocs\doctorApp\system\core\CodeIgniter.php(532): Appointments->ajax_register_appointment()
#2 E:\xampp\htdocs\doctorApp\index.php(353): require_once('E:\\xampp\\htdocs...')
#3 {main}
