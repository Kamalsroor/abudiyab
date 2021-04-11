<?php

if (isset($_SESSION["U_id"])) {
	$_SESSION["U_id"] = null;
    header("location: LogIn");
}
else{
	header("location: LogIn");
}