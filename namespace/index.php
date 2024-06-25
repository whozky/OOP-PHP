<?php
require_once 'app/init.php';

$child = new child("apa", "aja", "dah");

echo $child->orangTua();

echo"<br>";

$child->set_var1("lasmkda");

echo "var1 ditimpa menjadi: {$child->get_var1()}";

echo"<br>";

$child->set_var2("lasdmalkdm");

echo "var2 ditimpa menjadi: {$child->get_var2()}";

echo "<br>";

echo $child->get_var2();

echo '<br>';

use app\data\user as DataUser;
use app\service\user as ServiceUser;

new ServiceUser;
echo '<br>';
new DataUser();