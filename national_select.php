<?php
include 'connect.inc.php';
$output='';
$query = "SELECT * FROM national ORDER BY id DESC";

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
						<th width="3%">Item Number</th>
						<th width="3%">Title</th>
						<th width="3%">Author</th>
						<th width="3%">Accession Number</th>
						<th width="3%">Call Number</th>
						<th width="3%">Quantity</th>
						<th width="3%">Unit</th>
						<th width="3%">Date Acquired</th>
						<th width="3%">Amount</th>
						<th width="1%">Delete</th>
					</tr>
					<?php
					foreach($records as $r){
					?>
						<tr>
							<td><?php echo $r->id ?></td>
							<td class="Nlocal_no" data-id1="<?php echo $r->id ?>" contenteditable><?php echo $r->local_no ?></td>
							<td class="Nitem_no" data-id2="<?php echo $r->id ?>" contenteditable><?php echo $r->item_no ?></td>
							<td class="Ntitle_of_books" data-id3="<?php echo $r->id ?>" contenteditable><?php echo $r->title ?></td>
							<td class="Nauthor" data-id4="<?php echo $r->id ?>" contenteditable><?php echo $r->author ?></td>
							<td class="Naccession_no" data-id5="<?php echo $r->id ?>" contenteditable><?php echo $r->accesion_no ?></td>
							<td class="Ncall_no" data-id6="<?php echo $r->id ?>" contenteditable><?php echo $r->call_no ?></td>
							<td class="Nquantity" data-id7="<?php echo $r->id ?>" contenteditable><?php echo $r->quantity ?></td>
							<td class="Nunit" data-id8="<?php echo $r->id ?>" contenteditable><?php echo $r->unit ?></td>
							<td class="Ndate_acquired" data-id9="<?php echo $r->id ?>" contenteditable><?php echo $r->date_acquired ?></td>
							<td class="Namount" data-id10="<?php echo $r->id ?>" contenteditable><?php echo $r->amount ?></td>
							<td width="1%"><button class="btn btn-warning" name="bbtn_delete" id="bbtn_delete" data-id11="<?php echo $r->id ?>">x</button></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
</body>
</html>