<form action="" method="get">
<dl>
	<dt>商品</dt>
<dd>
<?php
$items = array('a-1'=>'ガム','b-1'=>'チョコレート','c-3'=>'クッキー');

foreach($items as $itemKey => $itemValue){
	print('<input type="checkbox" id="' . $itemKey . '" value="' . $itemKey . '" /><label for="' . $itemKey . '">' .$itemValue .'</value> ');
}
?>
</dd>
</dl>
<input type="submit" value="送信する" />
</form>