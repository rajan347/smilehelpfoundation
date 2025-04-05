@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Enquiry List
				</h3>
			
			</div>
		</div>
		
	</div>
			@if(session()->has('doneenquiry'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('doneenquiry') }}
    </div>
    </div>

@endif
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
					<th>Action</th>
					

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

					<td>
						<form  method="post" action="{{ route('done-enquiry') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											<input class="form-control m-input" type="hidden" name="id" value="{{ $contacts->id }}" id="example-text-input">
											<input class="form-control m-input" type="hidden" name="doneen" value="2" id="example-text-input">

						<button  style="background-color: #26b538;color: white" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"  type="submit" >Done</button>
</form>
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