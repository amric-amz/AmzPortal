<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
        <link rel="stylesheet" href="{{ asset('DashboardFiles/vendor/chartist/css/chartist.min.css') }}">
        <link href="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('DashboardFiles/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('DashboardFiles/css/style.css') }}" rel="stylesheet">
        <link href="http://127.0.0.1:8000/DashboardFiles/ajax/ajax.js">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    </head>

    <style>
        img, svg, video, canvas, audio, iframe, embed, object {
            display: initial !important;
            vertical-align: middle;
        }

        .btn-style {
                background-color: white;
                border: none;
                color: #00b4a7;
                padding: 8px 8px;
                font-size: 18px;
                cursor: pointer;
                border-radius: 0px !important;

            }

        .btn-style:hover {
            background-color: #00b4a7;
            color: white !important;
            }

    </style>
    <body class="font-sans antialiased">


        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>

        <div id="main-wrapper">

            <div class="min-h-screen bg-gray-100">

                <!--**********************************
                    Nav header start
                ***********************************-->
                <div class="nav-header">
                    <a href="{{ route('dashboard') }}" class="brand-logo">
                        <img class="logo-abbr" src="{{ asset('DashboardFiles/images/Logo/side.png') }}" alt="">
                        {{-- <img class="logo-compact" src="{{ asset('DashboardFiles/images/logo-text.png') }}" alt=""> --}}
                        {{-- <img class="logo-compact" src="{{ asset('DashboardFiles/images/Logo/log.png') }}" alt=""> --}}
                        <img class="brand-title" src="{{ asset('DashboardFiles/images/Logo/log.png') }}" alt="">
                    </a>

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="line"></span><span class="line"></span><span class="line"></span>
                        </div>
                    </div>
                </div>
                <!--**********************************
                    Nav header end
                ***********************************-->

                <!--**********************************
                    Header start
                ***********************************-->
                <div class="header">
                    <div class="header-content">
                        <nav class="navbar navbar-expand">
                            <div class="collapse navbar-collapse justify-content-between">
                                <div class="header-left">
                                </div>
                                <ul class="navbar-nav header-right">
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                            <img src="http://127.0.0.1:8000/DashboardFiles/images/Logo/side.png" width="20" alt=""/>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ url('user/profile') }}" class="dropdown-item ai-icon">
                                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span class="ml-2">Profile </span>
                                            </a>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                        @click.prevent="$root.submit();">
                                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                        <span class="ml-2"> {{ __('Log Out') }} </span>
                                                </x-jet-dropdown-link>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--**********************************
                    Header end ti-comment-alt
                ***********************************-->

                <!--**********************************
                    Sidebar start
                ***********************************-->
                <div class="deznav">
                    <div class="deznav-scroll">
                        {{-- <a href="{{ url('dashboard') }}" class="add-menu-sidebar btn btn-success" >Dashboard</a> --}}
                        <ul class="metismenu" id="menu">
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-networking"></i>
                                    <span class="nav-text">Client</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('create-client') }}">Create</a></li>
                                    <li><a href="{{ route('client-list') }}">View</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-layer-1"></i>
                                    <span class="nav-text">Project</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('create-project') }}">Create</a></li>
                                    <li><a href="{{ route('project-list') }}">Show</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-layer-1"></i>
                                    <span class="nav-text">Department</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('department-create') }}">Create</a></li>
                                    <li><a href="{{ route('department-list') }}">View</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-layer-1"></i>
                                    <span class="nav-text">Sub-Department</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('create-sub-department') }}">Create</a></li>
                                    <li><a href="{{ route('sub-department-list') }}">View</a></li>
                                </ul>
                            </li>

                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="flaticon-381-layer-1"></i>
                                    <span class="nav-text">Registration</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('create-user') }}">User</a></li>
                                    <li><a href="{{ route('user-list') }}">User List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--**********************************
                    Sidebar end
                ***********************************-->


                <!-- Page Content -->
                <main>
                    <div class="content-body">
                        {{ $slot }}
                    </div>
                </main>
            </div>

        </div>

        @stack('modals')

        @livewireScripts

        <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('DashboardFiles/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('DashboardFiles/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('DashboardFiles/js/custom.min.js') }}"></script>
	<script src="{{ asset('DashboardFiles/js/deznav-init.js') }}"></script>
	<script src="{{ asset('DashboardFiles/vendor/owl-carousel/owl.carousel.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('DashboardFiles/vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('DashboardFiles/vendor/apexchart/apexchart.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('DashboardFiles/js/dashboard/dashboard-1.js') }}"></script>




	<script>
		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},

					1150:{
						items:3
					},

					1200:{
						items:2
					},
					1749:{
						items:3
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>
    </body>
</html>
