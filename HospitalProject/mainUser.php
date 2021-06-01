<HTML>
<HEAD>
<TITLE>Hospital Management Database</TITLE>
</HEAD>
<?php
session_start(); 
if(isset($_SESSION['username'])){ ?>
<FRAMESET COLS="20%, 70%, 10%">
     <FRAME NAME="left_frame"   SRC="frameA_user.html">
     <FRAME NAME="middle_frame" SRC="frameB_user.html">
     <FRAME NAME="right_frame"  SRC="frameC_user.html">
</FRAMESET>
<?php } 
else  header("Location: index.php");?>
</HTML>