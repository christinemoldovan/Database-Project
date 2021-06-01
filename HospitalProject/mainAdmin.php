<HTML>
<HEAD>
<TITLE>Hospital Management Database</TITLE>
</HEAD>
<?php
session_start(); 
if(isset($_SESSION['username'])){ ?>
<FRAMESET COLS="20%, 70%, 10%">
     <FRAME NAME="left_frame"   SRC="frameA_admin.html">
     <FRAME NAME="middle_frame" SRC="frameB_admin.html">
     <FRAME NAME="right_frame"  SRC="frameC_admin.html">
</FRAMESET>
<?php } 
else  header("Location: index.php");?>
</HTML>