@extends('layouts.adminheader')
@section('content')
<style type="text/css">
	#cke_13
{
	display: none;
}
	#cke_15
{
	display: none;
}
</style>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<!--<h3 class="m-subheader__title m-subheader__title--separator">Occassion </h3>-->
								
                                
                            </div>
                           
							<div>
								
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							
							<div class="col-lg-12">

								<!--begin::Portlet-->
								<div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-placeholder-2"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Add Bijay Blog
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											
										</div>
									</div>
									<div class="m-portlet__body">
                                    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('storebijayblog')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											
											
											<div class="form-group m-form__group row">
												<label for="example-text-input" class="col-2 col-form-label"> Your Blog:</label>
												<div class="col-10">
													<textarea class="form-control m-input editor @error('discription') is-invalid @enderror" type="text" name="discription" value="" id="example-text-input"></textarea>
												     @error('discription')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
											</div>
											
											
											
											
										
											
										</div>
										
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<div class="row">
													<div class="col-2">
													</div>
													<div class="col-10">
														<button type="submit" class="btn btn-success">Submit</button>
													
													</div>
												</div>
											</div>
										</div>
									</form>
									</div>
									
								</div>

								<!--end::Portlet-->

							</div>
                        </div>
                    </div>
                  
			</div>

						
			@endsection
			<!-- end::footer -->
			































































































			
			
			
			
				


















































