<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php
print('お名前： ' . htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
?>