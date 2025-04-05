<!DOCTYPE html>
<html lang="en">

<?php
 $contactt = DB::table('contact')
        ->select('contact.*')
        ->where('noti','=','0')
        ->count();
        

//user total
  $userst = DB::table('users')
        ->select('users.*')
        ->where('noti','=','0')
        ->count();

 $donatet = DB::table('donate')
        ->select('donate.*')
        ->where('noti','=','0')
        ->count();
        // $donatet = $donate->sum('amount');

//total request people
 $requestt = DB::table('request_money')
        ->select('request_money.*')
        ->where('noti','=','0')
        ->count();

$total=$contactt+$userst +$donatet+$requestt;

?>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>Smile Help Foundation</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/favicon.png')}}"> 
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<link href="{{ asset('public/industriadmin/assets/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/assets/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/vendors/flaticon/css/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/industriadmin/assets/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
		<link rel="shortcut icon" href="" />
		<!-- <link href="assets/css/summernote.css" rel="stylesheet" type="text/css" /> -->
		<style>
			 #m_ver_menu {
				position:fixed;
				height:100%;
				width:250px;
			}
	
		</style>
	</head>
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-brand  m-brand--skin-dark " style="background-color: #41bc3f">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="{{route('dashboard')}}" class="m-brand__logo-wrapper">
									<img src="{{ asset('public/img/lo.png')}}"style="height:55px;">
									
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<ul class="m-menu__nav ">

								    <li><a class="btn btn-info" style="float:right;padding:9px 15px;background-color: #26b538; color:white;margin-top: 15px;"> Hello  <?php echo ucfirst(auth()->user()->name);?></a></li>
									<!-- <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
											 class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<ul class="m-menu__subnav">
												<li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">Create New Post</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="manageorders.php" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
														 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">Customer
															Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
											</ul>
										</div>
									</li> -->
									<!--<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i-->
									<!--		 class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>-->
									<!--	<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:250px">-->
									<!--		<div class="m-menu__subnav">-->
									<!--			<ul class="m-menu__content">-->
									<!--				<li class="m-menu__item">-->
									<!--					<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>-->
									<!--					<ul class="m-menu__inner">-->
															<!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li> -->
															<!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">Quarterly Reports</span></a></li> -->
									<!--						<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">Monthly Reports</span></a></li>-->
									<!--						<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Weekly Reports</span></a></li>-->
									<!--						<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Daily Reports</span></a></li>-->
									<!--					</ul>-->
									<!--				</li>-->
									<!--			</ul>-->
									<!--		</div>-->
									<!--	</div>-->
									<!--</li>-->
								</ul>
							</div>
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
									<!--	<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch"-->
									<!--	 m-quicksearch-mode="dropdown" m-dropdown-persistent="1">-->
									<!--		<a href="#" class="m-nav__link m-dropdown__toggle">-->
									<!--			<span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-search-1"></i></span></span>-->
									<!--		</a>-->
									<!--		<div class="m-dropdown__wrapper">-->
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
									<!--			<div class="m-dropdown__inner ">-->
									<!--				<div class="m-dropdown__header">-->
									<!--					<form class="m-list-search__form">-->
									<!--						<div class="m-list-search__form-wrapper">-->
									<!--							<span class="m-list-search__form-input-wrapper">-->
									<!--								<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">-->
									<!--							</span>-->
									<!--							<span class="m-list-search__form-icon-close" id="m_quicksearch_close">-->
									<!--								<i class="la la-remove"></i>-->
									<!--							</span>-->
									<!--						</div>-->
									<!--					</form>-->
									<!--				</div>-->
									<!--				<div class="m-dropdown__body">-->
									<!--					<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">-->
									<!--						<div class="m-dropdown__content">-->
									<!--						</div>-->
									<!--					</div>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</div>-->
									<!--	</li>-->
										<li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon" style="    margin-top: 6px;">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper"><i class="flaticon-alarm"></i></span>
													<span class="m-nav__link-badge m-badge m-badge--danger">{{$total}}</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center">
														<a href="{{route('enquirynoti')}}"><span class="m-dropdown__header-title">{{$contactt}} New</span></a>
														<span class="m-dropdown__header-subtitle">Enquiry</span>
													</div>
													<div class="m-dropdown__header m--align-center">
														<a href="{{route('requestnoti')}}"><span class="m-dropdown__header-title">{{$requestt}} New</span></a>
														<span class="m-dropdown__header-subtitle">Request Money</span>
													</div>
													<div class="m-dropdown__header m--align-center">
														<a href="{{route('donationnoti')}}"><span class="m-dropdown__header-title">{{$donatet}} New</span></a>
														<span class="m-dropdown__header-subtitle">donation</span>
													</div>
													<div class="m-dropdown__header m--align-center">
														<a href="{{route('usernoti')}}"><span class="m-dropdown__header-title">{{$userst}} New</span></a>
														<span class="m-dropdown__header-subtitle">Users</span>
													</div>

									<!--				<div class="m-dropdown__body">-->
									<!--					<div class="m-dropdown__content">-->
									<!--						<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">-->
									<!--							<li class="nav-item m-tabs__item">-->
									<!--								<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">-->
									<!--									Alerts-->
									<!--								</a>-->
									<!--							</li>-->
									<!--							<li class="nav-item m-tabs__item">-->
									<!--								<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>-->
									<!--							</li>-->
									<!--							<li class="nav-item m-tabs__item">-->
									<!--								<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>-->
									<!--							</li>-->
									<!--						</ul>-->
									<!--						<div class="tab-content">-->
									<!--							<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">-->
									<!--								<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">-->
									<!--									<div class="m-list-timeline m-list-timeline--skin-light">-->
									<!--										<div class="m-list-timeline__items">-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>-->
									<!--												<span class="m-list-timeline__text">12 new users registered</span>-->
									<!--												<span class="m-list-timeline__time">Just now</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>-->
									<!--												<span class="m-list-timeline__time">14 mins</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">New invoice received</span>-->
									<!--												<span class="m-list-timeline__time">20 mins</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>-->
									<!--												<span class="m-list-timeline__time">1 hr</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>-->
									<!--												<span class="m-list-timeline__time">2 hrs</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item m-list-timeline__item--read">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>-->
									<!--												<span class="m-list-timeline__time">7 hrs</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item m-list-timeline__item--read">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">Production server down</span>-->
									<!--												<span class="m-list-timeline__time">3 hrs</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge"></span>-->
									<!--												<span class="m-list-timeline__text">Production server up</span>-->
									<!--												<span class="m-list-timeline__time">5 hrs</span>-->
									<!--											</div>-->
									<!--										</div>-->
									<!--									</div>-->
									<!--								</div>-->
									<!--							</div>-->
									<!--							<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">-->
									<!--								<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">-->
									<!--									<div class="m-list-timeline m-list-timeline--skin-light">-->
									<!--										<div class="m-list-timeline__items">-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>-->
									<!--												<a href="" class="m-list-timeline__text">New order received</a>-->
									<!--												<span class="m-list-timeline__time">Just now</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>-->
									<!--												<a href="" class="m-list-timeline__text">New invoice received</a>-->
									<!--												<span class="m-list-timeline__time">20 mins</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>-->
									<!--												<a href="" class="m-list-timeline__text">Production server up</a>-->
									<!--												<span class="m-list-timeline__time">5 hrs</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>-->
									<!--												<a href="" class="m-list-timeline__text">New order received</a>-->
									<!--												<span class="m-list-timeline__time">7 hrs</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>-->
									<!--												<a href="" class="m-list-timeline__text">System shutdown</a>-->
									<!--												<span class="m-list-timeline__time">11 mins</span>-->
									<!--											</div>-->
									<!--											<div class="m-list-timeline__item">-->
									<!--												<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>-->
									<!--												<a href="" class="m-list-timeline__text">Production server down</a>-->
									<!--												<span class="m-list-timeline__time">3 hrs</span>-->
									<!--											</div>-->
									<!--										</div>-->
									<!--									</div>-->
									<!--								</div>-->
									<!--							</div>-->
									<!--							<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">-->
									<!--								<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">-->
									<!--									<div class="m-stack__item m-stack__item--center m-stack__item--middle">-->
									<!--										<span class="">All caught up!<br>No new logs.</span>-->
									<!--									</div>-->
									<!--								</div>-->
									<!--							</div>-->
									<!--						</div>-->
									<!--					</div>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</div>-->
									<!--	</li>-->
										
									<!--	<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">-->
									<!--		<a href="#" class="m-nav__link m-dropdown__toggle">-->
									<!--			<span class="m-topbar__userpic">-->
									<!--				<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />-->
									<!--			</span>-->
									<!--			<span class="m-nav__link-icon m-topbar__usericon  m--hide">-->
									<!--				<span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>-->
									<!--			</span>-->
									<!--			<span class="m-topbar__username m--hide">Nick</span>-->
									<!--		</a>-->
									<!--		<div class="m-dropdown__wrapper">-->
									<!--			<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>-->
									<!--			<div class="m-dropdown__inner">-->
									<!--				<div class="m-dropdown__header m--align-center">-->
									<!--					<div class="m-card-user m-card-user--skin-light">-->
									<!--						<div class="m-card-user__pic">-->
									<!--							<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />-->
									<!--						</div>-->
									<!--						<div class="m-card-user__details">-->
									<!--							<span class="m-card-user__name m--font-weight-500">Admin</span>-->
									<!--							<a href="" class="m-card-user__email m--font-weight-300 m-link">admin@gmail.com</a>-->
									<!--						</div>-->
									<!--					</div>-->
									<!--				</div>-->
									<!--				<div class="m-dropdown__body">-->
									<!--					<div class="m-dropdown__content">-->
									<!--						<ul class="m-nav m-nav--skin-light">-->
									<!--							<li class="m-nav__section m--hide">-->
									<!--								<span class="m-nav__section-text">Section</span>-->
									<!--							</li>-->
									<!--							<li class="m-nav__item">-->
									<!--								<a href="profile.php" class="m-nav__link">-->
									<!--									<i class="m-nav__link-icon flaticon-profile-1"></i>-->
									<!--									<span class="m-nav__link-title">-->
									<!--										<span class="m-nav__link-wrap">-->
									<!--											<span class="m-nav__link-text">My Profile</span>-->
																				
									<!--										</span>-->
									<!--									</span>-->
									<!--								</a>-->
									<!--							</li>-->
									<!--							<li class="m-nav__item">-->
									<!--								<a href="#" class="m-nav__link">-->
									<!--									<i class="m-nav__link-icon flaticon-chat-1"></i>-->
									<!--									<span class="m-nav__link-text">Messages</span>-->
									<!--								</a>-->
									<!--							</li>-->
									<!--							<li class="m-nav__separator m-nav__separator--fit">-->
									<!--							</li>-->
									<!--							<li class="m-nav__separator m-nav__separator--fit">-->
															<!-- </li> -->
															
									 
																<li class="m-nav__item">
																<a href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn_2" style="background-color: #26b538; color:white;margin-top: 15px;">Logout</a>
																<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
																</li>
															<!-- </ul> -->
									<!--					</div>-->
									<!--				</div>-->
									<!--			</div>-->
									<!--		</div>-->
									<!--	</li>-->
									<!--</ul>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark " >
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500" style="overflow-y: scroll;">
						<ul class="m-menu__nav " >
							<li class="m-menu__section m-menu__section--first">
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="{{route('dashboard')}}" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-line-graph"></i><span
									 class="m-menu__link-text">Dashboard</span></a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Pamuli Blogs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('pamulibloglist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> pamuli Blog List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addpamuliblog')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Pamuli Blogs</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Bijay Blogs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('bijaybloglist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> bijay Blog List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addbijayblog')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Bijay Blogs</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Our Blogs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('bloglist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Blog List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addblog')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Blogs</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Our Causes</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('causes-list')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Causes List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('add-causes')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Causes</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">How To Help</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('howtohelplist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> How To Help List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addhowtohelp')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add How To Help</span></a></li>
										
									</ul>

								</div>
							</li>

							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Won Heart</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('wonheartlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Won Heart List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addwonheart')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Won Heart</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Term Condiction</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('termlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Term Condiction List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addterm')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Term condiction</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Enquiry</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('contactlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Enquiry List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('contactdone')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Done Enquiry</span></a></li>
										
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Donation</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('donationlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Donation List</span></a></li>
										
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Request Money</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('requestmoneylist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Total Request List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('acceptrlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Accept List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('rejectrlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Reject List</span></a></li>
										
										
									</ul>

								</div>
							</li>
								<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">User</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('userlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> User List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('blockuserlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Blocked User</span></a></li>
										
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Our Members</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('memberlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"> Member List</span></a></li>
										
										
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text"> Home Banners</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('bannerlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Banner List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addbanner')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Banner</span></a></li>
										
									</ul>

								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Our Partners</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text"></span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{route('partnerlist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Partners List</span></a></li>
										<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('addpartner')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Partners</span></a></li>
										
									</ul>
</br>
								</div>
							</li>
						</br>
						
							
							
						</ul>
					</br>
					</div>
				</div>		
				@yield('content')
				</div>
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; Designed by <a href="" class="m-link">AeronauIT</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
								<!-- <li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li> -->
								<!-- <li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<script src="{{ asset('public/industriadmin/assets/js/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/wizard.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('public/industriadmin/assets/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/industriadmin/assets/js/perfect-scrollbar.js') }}" type="text/javascript"></script>
		    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
  
		<!-- <script src="assets/js/summernote.min.js" type="text/javascript"></script> -->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
		<!-- <script src="{{ asset('qexperienceadmin/https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script> -->
		<script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script>
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.editorConfig = function (config) {
				config.language = 'es';
				config.uiColor = '#F7B42C';
				config.height = 200;
				config.width = 200;
				config.toolbarCanCollapse = true;
			};
			CKEDITOR.replaceAll('editor');
			</script>
			<script>
				$(document).ready(function() {
				$('table.display').DataTable();
			} );
			</script>
			<script>
				$(document).ready(function() {
					$('.js-example-basic-multiple').select2();
				});
				
			</script>
			@yield('script')
	</body>
</html>