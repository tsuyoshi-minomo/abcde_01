<form action="" method="get">
<dl>
	<dt>日にち</dt>
<dd>
<?php print(date('n')); ?>月
<select name="day" id="day">
<?php
for ($day=1; $day<=date('t'); $day++) {
	print('<option value=" . $day . ">' . $day . '日</option>');
}
?>
</select>
</dd>
</dl>
<input type="submit" value="送信する" />
</form>