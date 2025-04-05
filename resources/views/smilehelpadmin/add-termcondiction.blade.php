@extends('layouts.adminheader')
@section('content')
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
													Add Term Condiction
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											
										</div>
									</div>
									<div class="m-portlet__body">
                                    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('storeterm')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
											
											<div class="form-group m-form__group row">
												<label for="example-text-input" class="col-2 col-form-label"> Rule :</label>
												<div class="col-10">
													<input class="form-control m-input @error('wonheart') is-invalid @enderror" type="text" name="wonheart" value="" id="example-text-input">
													  @error('wonheart')
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
			































































































			
			
			
			
				


















































