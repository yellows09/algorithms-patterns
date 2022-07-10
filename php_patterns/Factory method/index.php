<?php
include_once 'BloggsCommsManagers.php';
include_once  'MegaCommsManager.php';
$testBlog = new BloggsCommsManagers();
echo $testBlog->getHeadText();
echo $testBlog->getFooterText();
$testBlog->getApptEncoder()->encode();

$testMega = new MegaCommsManager();
echo $testMega->getHeadText();
echo $testMega->getFooterText();
$testMega->getApptEncoder();