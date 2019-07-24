<?php

$conn = mysqli_connect('localhost', 'root', '`', 'vsga2');
$url = 'http://dts.qodr/crud-tugas-vsga-master';
if(!$conn)
	die("Connection failed "  . mysqli_connect_error());
