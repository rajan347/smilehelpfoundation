@extends('layouts.adminheader')
@section('content')
<style type="text/css">
	
#cke_17{
	display: none;
}
#cke_19{
	display: none;
}
#cke_113{
	display: none;
}
#cke_115{
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
												
												<h3 class="m-portlet__head-text">
													Add How To Help
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											
										</div>
									</div>
									<div class="m-portlet__body">
                                    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('storehowtohelp')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											
											<div class="form-group m-form__group row">
												<label for="example-text-input" class="col-2 col-form-label"> Heading:</label>
												<div class="col-10">
													<textarea class="form-control editor m-input @error('heading') is-invalid @enderror" type="text" name="heading" value="" id="example-text-input"></textarea>
													  @error('heading')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label for="example-text-input" class="col-2 col-form-label"> Sub Heading:</label>
												<div class="col-10">
													<textarea class="form-control m-input editor @error('subheading') is-invalid @enderror" type="text" name="subheading" value="" id="example-text-input"></textarea>
													  @error('subheading')
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
			































































































			
			
			
			
				


















































