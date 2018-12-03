<?php
session_start ();
echo "Hello LINE BOT";
$user = "bamboo";
session_register ( "user" );
echo $_SESSION["user"];

