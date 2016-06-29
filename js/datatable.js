$(document).ready(function(){
	function national_insert(){
		var local = $('#Nlocal_no').val();
		var itemno = $('#Nitem_no').val();
		var title = $('#Ntitle').val();
		var author = $('#Nauthor').val();
		var accession = $('#Naccession_no').val();
		var callno = $('#Ncall_no').val();
		var quantity = $('#Nquantity').val();
		var unit = $('#Nunit').val();
		var date_acquired = $('#Ndate_acquired').val();
		var amount = $('#Namount').val();
		
		
		$.ajax({
			type: "POST",
			url: "insert_national.php",
			data: {
				'Nlocal_no': local, 'Nitem_no': itemno, 'Ntitle': title,
				'Nauthor': author, 'Naccession_no': accession, 'Ncall_no': callno,
				'Nquantity': quantity, 'Nunit': unit, 'Ndate_acquired': date_acquired,
				'Namount': amount},
			success : function(data) {
				//bootbox.alert("Book added to National Books!");
				$('#Nlocal_no').val('');
				$('#Nitem_no').val('');
				$('#Ntitle').val('');
				$('#Nauthor').val('');
				$('#Naccession_no').val('');
				$('#Ncall_no').val('');
				$('#Nquantity').val('');
				$('#Nunit').val('');
				$('#Ndate_acquired').val('');
				$('#Namount').val('');
				load_data();
			}
			
		});
	}

	function local_insert(){
		var local = $('#Llocal_no').val();
		var accession = $('#Laccession_no').val();
		var title = $('#Ltitle').val();
		
		
		
		$.ajax({
			type: "POST",
			url: "insert_local.php",
			data: {'Llocal_no': local, 'Laccession_no': accession, 'Ltitle': title},
			success : function(data) {
				//bootbox.alert("Book added to Local Books!");
				$('#Llocal_no').val('');
				$('#Laccession_no').val('');
				$('#Ltitle').val('');
				fetch_data();
			}
			
		});
	}




	$("#local_submit").click(function(){
		
		var local = document.getElementById('Llocal_no').value;
		var title = document.getElementById('Ltitle').value;
		var accession = document.getElementById('Laccession_no').value;
		
		
		if (local =='' || title == '' || accession == ''){
			bootbox.alert(" Please fill up all fields ");
		}else{
			local_insert();
		}
	});

	$("#national_submit").click(function(){
		
		var itemno = document.getElementById('Nitem_no').value;
		var title = document.getElementById('Ntitle').value;
		var unit = document.getElementById('Nunit').value;
		var quantity = document.getElementById('Nquantity').value;
		
		
		if (itemno == '' && title == '' && unit == '' && quantity == ''){
			bootbox.alert("Please Fill the require fields ");
		}else if(itemno == ''){
			bootbox.alert("Item Number must not be empty! ");
		}else if(unit == ''){
			bootbox.alert("Unit must not be empty! ");
		}else if(quantity == ''){
			bootbox.alert("Quantity must not be empty! ");
		}else if(title == ''){
			bootbox.alert("Title must not be empty! ");
		}else{
			national_insert();
		}
		
	});    
	

	function fetch_data(){
		$.ajax({
			type:"POST",
			url:"select.php",
			success:function(data){
				$('#live_data').html(data);
			}
		});
	
	}
	
	function load_borrow(){
		$.ajax({
			type:"POST",
			url:"borrow_select.php",
			success:function(data){
				$('#borrow_data').html(data);
			}
		});
	
	}
	
	function load_sidebar(){
		$.ajax({
			type:"POST",
			url:"sidebar_select.php",
			success:function(data){
				$('#sidebar').html(data);
				setTimeout(function(){load_sidebar();}, 10000);
			}
		});
	
	}
	
	function load_data(){
		$.ajax({
			type:"POST",
			url:"national_select.php",
			success:function(data){
				$('#national_data').html(data);
			}
		});
	
	}
	load_data();
	load_borrow();
	load_sidebar();
	fetch_data();
	function edit_data(id,text,column_name){
		$.ajax({
			url:"local_edit.php",
			method:"POST",
			data: {id:id, text:text, column_name:column_name},
			dataType:"text",
			success:function(data){
				bootbox.alert(data);
				fetch_data();
			}
		});
	}
	
	function update_data(id,text,column_name){
		$.ajax({
			url:"national_edit.php",
			method:"POST",
			data: {id:id, text:text, column_name:column_name},
			dataType:"text",
			success:function(data){
				bootbox.alert(data);
				load_data();
			}
		});
	}
	
	$(document).on('blur','.local_no', function() {
		var id = $(this).data("id1");
		var local_no = $(this).text();
		edit_data(id, local_no, "local_no");
	});
	
	$(document).on('blur','.accession_no', function() {
		var id = $(this).data("id2");
		var accession_no = $(this).text();
		edit_data(id, accession_no, "accession_no");
	});
	
	$(document).on('blur','.title_of_books', function() {
		var id = $(this).data("id3");
		var title_of_books = $(this).text();
		edit_data(id, title_of_books, "title_of_books");
	});
	
	$(document).on('click','#btn_delete', function(){
		var id=$(this).data("id4");
		$.ajax({
			url:"delete_local.php",
			method:"POST",
			data:{id:id},
			dataType:"text",
			success:function(data){
				bootbox.alert("Deleted Successfully!");
				fetch_data();
			}
		});
	});
	
	$(document).on('blur','.Nlocal_no', function() {
		var id = $(this).data("id1");
		var local_no = $(this).text();
		update_data(id, local_no, "local_no");
	});
	
	$(document).on('blur','.Nitem_no', function() {
		var id = $(this).data("id2");
		var item_no = $(this).text();
		update_data(id, item_no, "item_no");
	});
	
	$(document).on('blur','.Ntitle_of_books', function() {
		var id = $(this).data("id3");
		var title_of_books = $(this).text();
		update_data(id, title_of_books, "title");
	});
	
	$(document).on('blur','.Nauthor', function() {
		var id = $(this).data("id4");
		var author = $(this).text();
		update_data(id, author, "author");
	});
	
	$(document).on('blur','.Naccession_no', function() {
		var id = $(this).data("id5");
		var accession_no = $(this).text();
		update_data(id, accession_no, "accesion_no");
	});
	
	$(document).on('blur','.Ncall_no', function() {
		var id = $(this).data("id6");
		var call_no = $(this).text();
		update_data(id, call_no, "call_no");
	});
	
	$(document).on('blur','.Nquantity', function() {
		var id = $(this).data("id7");
		var quntity = $(this).text();
		update_data(id, call_no, "call_no");
	});
	
	$(document).on('blur','.Nunit', function() {
		var id = $(this).data("id8");
		var unit = $(this).text();
		update_data(id, unit, "unit");
	});
	
	$(document).on('blur','.Ndate_acquired', function() {
		var id = $(this).data("id9");
		var date_acquired = $(this).text();
		update_data(id, date_acquired, "date_acquired");
	});
	
	$(document).on('blur','.Namount', function() {
		var id = $(this).data("id10");
		var amount = $(this).text();
		update_data(id, amount, "amount");
	});
	
	$(document).on('click','#bbtn_delete', function(){
		var id=$(this).data("id11");
		$.ajax({
			url:"delete_national.php",
			method:"POST",
			data:{id:id},
			dataType:"text",
			success:function(data){
				bootbox.alert("Deleted Successfully!");
				load_data();
			}
		});
	});
	
	$(document).on('click','#borrow_submit', function(){
		var title = $('#title').val();
		var borrower = $('#borrower').val();
		var accession = $('#accession').val();
		var date_borrowed = $('#date_borrowed').val();
		
		$.ajax({
			type: "POST",
			url: "bookreport_insert.php",
			data: {'title': title, 'borrower': borrower, 'accession': accession, 'date_borrowed':date_borrowed},
			success : function(data) {
				bootbox.alert("Book added to Local Books!");
				$('#title').val('');
				$('#borrower').val('');
				$('#accession').val('');
				$('#date_borrowed').val('');
				load_borrow();
				load_sidebar();
			}
			
		});
	});
	

	
});	