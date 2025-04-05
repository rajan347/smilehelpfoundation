@extends('layouts.adminheader')
@section('content')
<div class="m-portlet m-portlet--mobile" style="width: 100%;">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Block User List
				</h3>
			
			</div>
		</div>
		
	</div>
				@if(session()->has('userb'))
<div class="card">
    
    <div class="alert alert-success">
        {{ session()->get('userb') }}
    </div>
    </div>

@endif
	<div class="m-portlet__body" >
		<table class="table table-striped- table-bordered table-hover table-checkable display" id="m_table_1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
				@foreach($user as $users)
				<tr>
					<td>{{$users->uid}}</td>
					<td>{{$users->name}}</td>
					
					<td>{{$users->uemail}}</td>
				
					<td>{{$users->phone}}</td>
				  
					<td>{{$users->address}}</td>

				  <td>

				  		<form  method="post" action="{{ route('unblockuser') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											<input class="form-control m-input" type="hidden" name="id" value="{{ $users->uid }}" id="example-text-input">
											<input class="form-control m-input" type="hidden" name="unblocku" value="1" id="example-text-input">

						<button  style="background-color: yellow;color: white" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"  type="submit" >UnBlock</button>
</form>

				  <a  style="background-color: #26b538;color: white" href="{{ url('user-profile/'.$users->uid) }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2"   >View profile</a></td>
				
					
					
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
 					 <script>
   $('document').ready(function(){
      $('#block').on("click", function(){
      	alert('hi');
      	cid = $(this).val();
      	blocku=2;
       	alert(cid);
      $.ajax({
        type:'POST',
        url:"{{ url('done-enquiry')}}",
        data:{_token : '<?php echo csrf_token(); ?>',cid:cid,blocku:blocku},
        success:function(data) {
            $("#doctor").html(data);
        }
      });
    });   
   });
</script>
 @endsection