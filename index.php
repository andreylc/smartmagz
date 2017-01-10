<?php
define("INDEX", "main page");
error_reporting( E_ERROR );
include  "lib.php";

load_page($db, header, content, aside, footer);     