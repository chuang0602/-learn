<?php

	header("Content-type:text/html;charset=utf-8");
	/*
	$bbs = "惠煤网";
	$hm = &$bbs;   //传址
	$bbs = "www.hm.com";
	$hm = "惠煤网站";

	echo $bbs;
	echo "</br>";
	echo $hm;

	define("DNAME","huimei.com");
	define("DNAME","惠煤.com");

	function fun1(){
		echo DNAME;

		$fname = "惠煤的网址";
		echo $fname;
	};

	fun1();
	*/

	// echo PHP_VERSION
	echo PHP_OS;

	//魔术常量

	echo __LINE__;
	echo "</br>";
	echo __FILE__;
	echo "</br>";
	echo __DIR__;
	echo "</br>";

	class bbs {
		function doit(){
			echo __FUNCTION__;
		}

		function down(){
			echo __METHOD__;
		}
	}

	$note = new bbs();

	$note -> doit();
	echo "</br>";
	$note -> down();



?>