<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:43
 */
$dataFound = isset($pollData);
if($dataFound === false){
    trigger_error('views/stock-html.php needs a $pollData');
}

return"

<form action=\"index.php\" method=\"POST\" class=\"form-inline\" role=\"form\">

	<div class=\"form-group\">
		<label class='btn btn-lg'>$pollData->poll_question</label>
		<br>

	</div>

	<select name='user-input' class='form-control'>
	    <option value='yes'>Yes it is !</option>
	    <option value='no'>No it isn't !</option>

</select>
<br>
<button type='submit' class='btn btn-primary'>Vote !</button>

</form>



<aside id='poll'>
    <h3>Poll results</h3>
  <ul class=\"list-group\">
	<li class=\"list-group-item\"><span class=\"badge alert-success\">$pollData->yes</span>   said yes</li>
	<li class=\"list-group-item\"><span class=\"badge alert-danger\"> $pollData->no</span>   said no</li>

</ul>

";