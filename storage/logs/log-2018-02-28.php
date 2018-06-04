<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-28 06:54:29 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 E:\xampp\htdocs\doctorApp\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-02-28 06:54:29 --> Unable to connect to the database
ERROR - 2018-02-28 07:33:32 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2018-02-28 07:33:32 --> #0 E:\xampp\htdocs\doctorApp\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 E:\xampp\htdocs\doctorApp\system\core\CodeIgniter.php(532): Appointments->ajax_register_appointment()
#2 E:\xampp\htdocs\doctorApp\index.php(353): require_once('E:\\xampp\\htdocs...')
#3 {main}
