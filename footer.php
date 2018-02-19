<?php 
$copyYear = 2016; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo "Copyright &copy ".$copyYear.(($copyYear != $curYear) ? '-' . $curYear : '')." Carl's Car Sales Ltd";
 ?>