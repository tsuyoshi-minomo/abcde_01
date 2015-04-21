<select name="pref" id="pref">
<?php
$prefs = array('北海道','東京','名古屋','大阪','福岡','沖縄');
foreach ($prefs as $pref) {
	print('<option value="' . $pref . '">' . $pref. '</option>');
}
?>
</select>