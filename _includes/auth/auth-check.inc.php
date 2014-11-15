<?php
// /_includes/auth/auth-check.inc.php
// 
// DomainMOD is an open source application written in PHP & MySQL used to track and manage your web resources.
// Copyright (C) 2010 Greg Chetcuti
// 
// DomainMOD is free software; you can redistribute it and/or modify it under the terms of the GNU General
// Public License as published by the Free Software Foundation; either version 2 of the License, or (at your
// option) any later version.
// 
// DomainMOD is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
// implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
// for more details.
// 
// You should have received a copy of the GNU General Public License along with DomainMOD. If not, please see
// http://www.gnu.org/licenses/
?>
<?php
if ($_SESSION['is_logged_in'] != 1) {
	
	$_SESSION['user_redirect'] = $_SERVER["REQUEST_URI"];
	
	$_SESSION['result_message'] = "You must be logged in to access this area<BR>";
	
	header("Location: " . $web_root . "/index.php");
	exit;

}
?>
