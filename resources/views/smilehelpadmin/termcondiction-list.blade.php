@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Term Condiction List 
				</h3>
			
			</div>
		</div>
		
	</div>
	@if(session()->has('messageadd'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('messageadd') }}
    </div>
    </div>

@endif
	@if(session()->has('message'))
<div class="card">
    
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    </div>

@endif
	<div class="m-portlet__body" >
		<table class="table table-striped- table-bordered table-hover table-checkable display" id="m_table_1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Term Condiction</th>
					
					
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($rule as $rules)
				<tr>
					<td>{{$rules->id}}</td>
					
					<td>{{$rules->termcondiction}}</td>
					<td><a style="background-color: red;color: white" href="{{ url('deleteterm/'.$rules->id) }}"  class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2">Delete</a></td>
				    
					<!-- <td></td> -->
					
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