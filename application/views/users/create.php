<div class="table-responsive">
<table class="table table-bordered">
    <tr>
<td> User Name :   </td>
<td> <input type='text' name ='username' value ='' class="form-control"
 /></td>
 </tr>

     <tr>
<td> Email ID :   </td>
<td> <input type='text' name ='userEmail' value ='' class="form-control"
 /></td>
 </tr>


     <tr>
<td> Test Type :   </td>
<td> <select class="browser-default custom-select"> 
	<?php 
	
	foreach($testData as $row) { 
	echo '<option value="'.$row->id.'">'.$row->test_name.'</option>'; 
} ?>
	
	 </select></td>
 </tr>

</table>
</div>