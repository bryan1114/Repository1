<?php
require 'connect.inc.php';
$query = "SELECT * FROM borrow_book ORDER BY id DESC";
$records = array();
	if($result = $db->query($query)){
		if($result->num_rows){
			while($row = $result->fetch_object()){
				$records[]= $row;
			}
			$result->free();
		}
	}
?>

<table class="table table-responsive">
		<tr>
			<th>Book</th>
			<th>Borrower</th>
		</tr>											
		<?
		foreach($records as $r){
		?>
		<tr>
			<td><?php echo $r->title ?></td>
			<td><?php echo $r->borrower ?></td>
		</tr>
	<?php
	}
	?>
</table>