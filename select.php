<?php

include 'connect.inc.php';
$output='';
$query = "SELECT * FROM local_gov_prop ORDER BY id DESC";

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

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="2%">ID</th>
						<th width="3%">Local Number</th>
						<th width="3%">Accession Number</th>
						<th width="5%">Title</th>
						<th width="1%">Delete</th>
					</tr>
					<?php
					foreach($records as $r){
					?>
						<tr>
							<td><?php echo $r->id ?></td>
							<td class="local_no" data-id1="<?php echo $r->id ?>" contenteditable><?php echo $r->local_no ?></td>
							<td class="accession_no" data-id2="<?php echo $r->id ?>" contenteditable><?php echo $r->accession_no ?></td>
							<td class="title_of_books" data-id3="<?php echo $r->id ?>" contenteditable><?php echo $r->title_of_books ?></td>
							<td width="1%"><button class="btn btn-warning" name="btn_delete" id="btn_delete" data-id4="<?php echo $r->id ?>">x</button></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
</body>
</html>