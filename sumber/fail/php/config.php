<?php
require '../../../tatarajah.php'; # rujuk contoh i-tatarajah.php
require '../../../Aplikasi/Kelas/Kitab/DB/DB_Pdo.php';
$this->db = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);