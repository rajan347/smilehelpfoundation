@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Enquiry Done
				</h3>
			
			</div>
		</div>
		
	</div>
	<div class="m-portlet__body" >
		<table class="table table-striped- table-bordered table-hover table-checkable display" id="m_table_1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>email</th>
					<th>phone</th>
					<th>subject</th>
					<th>message</th>
					
					

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($contact as $contacts)
				<tr>
					<td>{{$contacts->id}}</td>
					<td>{{$contacts->name}}</td>
					
					<td>{{$contacts->email}}</td>
				
					<td>{{$contacts->phone}}</td>
				  
					<td>{{$contacts->subject}}</td>
				
					<td>{{$contacts->message}}</td>

					
					
					
				</tr>
				<?php $i++; ?>
			@endforeach	
			
			</tbody>
		</table>
	</div>
</div>
<!-- <script src="assets/demo/default/custom/crud/wizard/wizard.js" type="text/javascript"></script> -->
@endsection
@section('content')
 <script>
 	$(document).ready(function() {
    $('table.display').DataTable();
	} );
 </script>

 @endsection