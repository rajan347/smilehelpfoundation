
@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Member List 
				</h3>
			
			</div>
		</div>
		
	</div>


	<div class="m-portlet__body" >
		<table class="table table-striped- table-bordered table-hover table-checkable display" id="m_table_1">
			<thead>
				<tr>
					<th>ID</th>
					<th>name</th>
					
					<th>Image</th>
					
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($member as $members)
				<tr>
					<td>{{$members->uid}}</td>
					<td>{{$members->uname}}</td>
					
					
					<td><img src='public/account/{{$members->image}}' style="height:50px;width:50px;"></td>
					<td>

				 <p> <a style="background-color: #26b538;color: white" href=" {{ url('user-profile/'.$members->uid) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"   value="" >View profile</a></p>
					</td>
					
					
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