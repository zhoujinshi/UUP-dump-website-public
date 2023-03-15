<?php
require_once 'shared/style.php';
$templateOk = true;
styleUpper('newbuild', sprintf($s['selectEditionFor'], "Add a new build"));
require 'templates/newbuild.php';
styleLower();
?>