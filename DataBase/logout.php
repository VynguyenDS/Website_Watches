<?php
session_start();

if(session_destroy())
{

header("Location: ../File_PHP/Mainpage.php");
}
?>