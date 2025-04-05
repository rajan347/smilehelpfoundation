@extends('layouts.adminheader')
@section('content')
     
<style>
.hidden-xs{
    font-size:10px;
    
}
.card{
    padding: 4px !important;
    margin: 4px !important;
    background-color:#ffffff!important;
    
    
}
.card-text{
    font-weight:bold !important;
    
}
.card-header{
   background-color:#26b538!important;
    
}
.m-widget24 {
    padding-bottom: 10px !important;
}
.m-widget24 .m-widget24__item .m-widget24__title {
    margin-top: 1.21rem !important;
}
td{
    
    font-size:12px;
    text-align:center;
    
}
.sumary{
    
    font-weight:bold;
}
.sumary1{
    
    font-weight:bold;
    font-size:14px;
}
.sumary2{
    
    font-weight:bold;
    font-size:12px;
}
.sumary3{
    
    font-weight:bold;
    font-size:22px;
}
.bor{
    border:2px solid black;
}
.table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 4px !important;
    color: black !important;

#coursesales{
    height:200px !important;
}
.my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
    color: red !important;
}
</style>
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
		    <div class="card">
		    	<div class="card-body">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h5 class="m-subheader__title " style="font-size:35px;font-weight:bold;">Dashboard</h5>
					</div>
				</div>
			</div>
			</div>
			<br>
			
	
	<div class="container">
<div class="row">

  <div class="col-md-4">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card" style="background-color: yellow"><span class="fa fa-eye" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Total Donation Amount</h4></div>
                <div class="text-success text-center mt-2"><h1>{{$donatet}}</h1></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Total Left Amount </h4></div>
                <div class="text-success text-center mt-2"><h1>{{$leftat}}</h1></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Total Helped Amount </h4></div>
                <div class="text-success text-center mt-2"><h1>{{$helpat}}</h1></div>
            </div>
        </div>
  
        <div class="col-md-12">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Total Enquiry </h4></div>
                <div class="text-success text-center mt-2"><h1>{{$contact}}</h1></div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card text-center">
  <h5 class="card-header">User
Summary</h5>
  <div class="card-body">
    
   </div>
</div>
           <div class="card z-depth-3">
            <div class="card-body">
            
            <div class="tab-content p-3">
                <div class="tab-pane active show" >
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$userst}}</span> <p style="float:left;">Total User</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$usersa}}</span><p style="float:left;"> Active</p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$usersb}}</span> <p style="float:left;">Blocked </p>
                                </td>
                            </tr>
                           
                        </tbody> 
                    </table>
                    <!--/row-->
                </div>
                
            </div>
        </div>
      </div>
      </div>
       <div class="col-lg-6">
            <div class="card text-center">
  <h5 class="card-header">Request Money Summary</h5>
  <div class="card-body">
    
   </div>
</div>
           <div class="card z-depth-3">
            <div class="card-body">
           
            <div class="tab-content p-3">
                <div class="tab-pane active show" >
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$requestpt}}</span> <p style="float:left;">Total Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$helpp}}</span><p style="float:left;"> Accept</p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">{{$rejectp}}</span> <p style="float:left;">Reject </p>
                                </td>
                            </tr>
                            
                            
                           
                        </tbody> 
                    </table>
                    <!--/row-->
                </div>
                
            </div>
        </div>
      </div>
      </div>
        </div>		


  <div class="card text-center">
  <h5 class="card-header"> <center>Business Stats In Last 7 Days</center>
  </h5>
 
<div class="card-body">

  </br>
    
  <div class="row">
    
      <div class="col-md-6 col-sm-6 ">
 

<h5 class="sumary2"><center>Enquiry</center></h5>
<div class="m-portlet  m-portlet--unair">
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
                        <canvas  id="enquiry" style="height: 200px"></canvas> 
					</div>
				</div>
			</div>
</div>

      <div class="col-md-6 col-sm-6 ">
          <h5 class="sumary2"><center>Users</center></h5>
         <div class="m-portlet  m-portlet--unair">
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
                        <canvas  id="user" style="height: 200px"></canvas> 
					</div>
				</div>
			</div>
          
          </div >

          <div class="col-md-6 col-sm-6 ">
 

<h5 class="sumary2"><center>Donation</center></h5>
<div class="m-portlet  m-portlet--unair">
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
                        <canvas  id="donation" style="height: 200px"></canvas> 
					</div>
				</div>
			</div>
</div>

      <div class="col-md-6 col-sm-6 ">
          <h5 class="sumary2"><center>Request Money</center></h5>
         <div class="m-portlet  m-portlet--unair">
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
                        <canvas  id="requestmoney" style="height: 200px"></canvas> 
					</div>
				</div>
			</div>
          
        
  </div>
      </div >
	
</div>	

</div>


</br>

			
		</div>
	</div>
	</div>
	
	</br>
	
	
@endsection('content')
@section('script')
    <script>
     var ctx = document.getElementById("enquiry").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels:['1 Day', '2 Day', '3 Day', '4 Day','5 Day', '6 Day', '7 Day'],
            datasets: [{
                    
                    
                
                    label: 'Enquiry',
                   backgroundColor: '#26b538',
                    data:[
                       {{$contact7day}}
                        ]},
                  
            ]
        },
       
    });
</script>
 <script>
     var ctx = document.getElementById("user").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
         data: {
            labels:['1 Day', '2 Day', '3 Day', '4 Day','5 Day', '6 Day', '7 Day'],
            datasets: [{
                    
                    
                
                    label: 'User',
                    backgroundColor: '#26b538',
                     data:[
                       {{$user7day}}
                        ]},
                  
            ]
        },
     
    });
</script>

    <script>
     var ctx = document.getElementById("donation").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:['1 Day', '2 Day', '3 Day', '4 Day','5 Day', '6 Day', '7 Day'],
            datasets: [{
                    
                    
                
                    label: 'Donation',
                    backgroundColor: '#26b538',
                    data:[
                      {{$donate7days}}
                        ]},
                  
            ]
        },
       
    });
</script>
 <script>
     var ctx = document.getElementById("requestmoney").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
         data: {
            labels:['1 Day', '2 Day', '3 Day', '4 Day','5 Day', '6 Day', '7 Day'],
            datasets: [{
                    
                    
                
                    label: 'Request Money',
                    backgroundColor: '#26b538',
                     data:[
                       {{$request7days}}
                        ]},
                  
            ]
        },
     
    });
</script>
@endsection