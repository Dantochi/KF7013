<?php
require_once('dbconn.php');
require_once('pagestart.php');
require_once('header.php');
require_once('herosection.php');
require_once('logosection.php');
require_once('skillsection.php');
require_once('timeline.php');
require_once('alumnisection.php');
require_once('signupsection.php');
require_once('footersection.php');
require_once('pageEnd.php');


echo makePageStart();
echo makeHeader();
echo makeHeroSection();
echo makeLogoSection();
echo makeSkillSection();
echo makeTimeline();
echo makeAlumniSection();
echo makeSignupSection();
echo makeFooterSection();
echo makePageEnd();

