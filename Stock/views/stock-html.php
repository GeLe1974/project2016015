<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:43
 */
$dataFound = isset($stockData);
if($dataFound === false){
    trigger_error('views/stock-html.php needs a $stockData');
}

return"


<form action=\"index.php\" method=\"POST\" class=\"form-inline\" role=\"form\">

	<div class=\"form-group\">
		<label class='btn-lg'><h3>$stockData->product</h3></label>
		<br>

	</div>

	<select name='user-input' class='form-control'>
	    <option value='aankoop'>Aankoop</option>
	    <option value='verkoop'>Verkoop</option>
    </select>
    <input type='hidden' name='stockDoorgeef' value='$stockData->voorraad'>





<button type='submit' class='btn btn-primary'>Voer in</button>

</form>



<aside id='stock'>
    <h2>Stock resultaten</h2>
  <ul class=\"list-group\">

	<li class=\"list-group-item\"><span class=\"badge alert-success\">$stockData->aankoop</span>   Aankoop</li>
	<li class=\"list-group-item\"><span class=\"badge alert-danger\"> $stockData->verkoop</span>   Verkoop</li>
	<li class=\"list-group-item\"><span class=\"badge alert-danger\"> $stockData->voorraad</span>   Voorraad</li>
	$stockData->waarschuwing
  </ul>

";