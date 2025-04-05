@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Donate List
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
					<th>Donation Id</th>
					<th>address</th>
					<th>Amount</th>
					<th>phone</th>
					<th>email</th>
					
					<th>action</th>
					

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($donation as $donations)
				<tr>
					<td>{{$donations->uid}}</td>
					<td>{{$donations->uname}}</td>
					<td>{{$donations->donation_id}}</td>
					<td>{{$donations->address}}</td>
					
					<td>{{$donations->amount}}</td>
					<td>{{$donations->contact}}</td>
					
					<td>{{$donations->demail}}</td>
				<td><a  style="background-color: #26b538;color: white" href=" {{ url('user-profile/'.$donations->uid) }}"  class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2">View Profile</a></td>
				
					
					
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