<?php

$conn = mysqli_connect('localhost', 'root', '','vietgram_tugas');
if (!$conn) {
	echo "database error";
}