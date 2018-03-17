<?php
$file = basename($_GET['file']);
echo file_get_contents($file);
