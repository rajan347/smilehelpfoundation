
@extends('layouts.adminheader')
@section('content')
<style type="text/css">
	.m-portlet .m-portlet__body {
     padding: 0px !important; 
}

</style>
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Request Money List 
				</h3>
			
			</div>
		</div>
		
	</div>
		@if(session()->has('message'))
<div class="card">
    
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    </div>

@endif
		@if(session()->has('messageua'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('messageua') }}
    </div>
    </div>

@endif

	<div class="m-portlet__body" >
		<table class="table table-striped- table-bordered table-hover table-checkable display" id="m_table_1">
			<thead>
				<tr>
					<th>ID</th>
					<th>name</th>
					<th> amount</th>
					<th>Reasion</th>
					<th>Reasion Img</th>
					<th>Aadharf</th>
					<th>Aadharb</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($rmoney as $rmoneys)
				<tr>
					<td>{{$rmoneys->id}}</td>
					<td>{{$rmoneys->name}}</td>
					
					<td>{{$rmoneys->amount}}</td>
					<td>{{$rmoneys->reason}}</td>
					<td><img src='public/account/{{$rmoneys->reason_img}}' style="height:50px;width:50px;"></td>
					<td><img src='public/account/{{$rmoneys->aadhar_front}}' style="height:50px;width:50px;"></td>
					<td><img src='public/account/{{$rmoneys->aadhar_back}}' style="height:50px;width:50px;"></td>	
					<td>
	<p><form  method="post" action="{{ route('requestaccept') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											<input class="form-control m-input" type="hidden" name="id" value="{{$rmoneys->rmid}}" id="example-text-input">
											<input class="form-control m-input" type="hidden" name="acceptr" value="2" id="example-text-input">

						<button style="background-color: #26b538;color: white" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"  type="submit" >Accept</button>
</form></p>

				  
	<p><form  method="post" action="{{ route('requestreject') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											<input class="form-control m-input" type="hidden" name="id" value="{{$rmoneys->rmid}}" id="example-text-input">
											<input class="form-control m-input" type="hidden" name="rejectr" value="3" id="example-text-input">

						<button  style="background-color: red;color: white" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"  type="submit" >Reject</button>
</form></p>

			<p><form  method="get" action="{{ route('updaterequestamount') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											<input class="form-control m-input" type="hidden" name="id" value="{{$rmoneys->rmid}}" id="example-text-input">
											<input class="form-control m-input" type="number" name="amount" value="{{$rmoneys->amount}}" id="example-text-input">

						<button style="background-color: yellow;color: white" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"  type="submit" >Update</button>
</form>	  </p>

				 <p> <a style="background-color: #26b538;color: white" href="{{ url('user-profile/'.$rmoneys->user_id) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"   value="" >View profile</a></p>
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