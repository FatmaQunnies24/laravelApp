
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>dashboard</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/core/libs.min.css') }}">
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/vendor/aos/dist/aos.css') }}">
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/hope-ui.min.css?v=4.0.0') }}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/custom.min.css?v=4.0.0') }}">
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/dark.min.css') }}">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/customizer.min.css') }}">
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{ asset('assets/auth/css/rtl.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/auth/css/beginning.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/auth/css/ReasonOfHelping.css') }}">
      <link rel="stylesheet" href= "{{ asset('assets/auth/css/Activities.css')}}">
      <link rel="stylesheet" href= "{{ asset('assets/auth/css/cases.css')}}">
      <link rel="stylesheet" href= "{{ asset('assets/auth/css/volunteer.css')}}">
      <link rel="stylesheet" href= "{{ asset('assets/auth/css/news.css')}}">
      <link rel="stylesheet" href= "{{ asset('assets/auth/css/about.css')}}">

  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="../dashboard/index.html" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-horizontal') }}">
                    <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                            <i class="icon">
                                
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                    <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                    <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">begginning</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="horizontal-menu" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('index-horizontal') }}">
                            <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> H </i>
                                  <span class="item-name"> edit item </span>
                                </a>
                            </li>







                            

                            
                        </ul>


<!-- home page -->
                  
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Pages</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                                <svg class="icon-20"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Home</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/billing.html">
                                  <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Reason of Helping</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/calender.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Watch Our Latest Activities</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/kanban.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> K </i>
                                   <span class="item-name">Popular Causes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/pricing.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> P </i>
                                    <span class="item-name">Our Volunteer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/special-pages/rtl-support.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">News & Updates</span>
                                </a>
                            </li>
                        
                        </ul>


                    </li>









<!-- Causes
 page -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                                    <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">About</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-in.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">about</span>
                                </a>
                            </li>
                           
                    
                        </ul>











                    </li>

<!-- Causes
 page -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                                    <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Causes
                            </span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-in.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Causes
                                    </span>
                                </a>
                            </li>
                           
                    
                        </ul>











                    </li>



      
<!-- Blog page -->
               <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                    <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                    <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Blog</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-profile.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">Blog</span>
                                </a>
                            </li>
                           
                        
                        </ul>
                    </li>













                                   <li class="nav-item">
                        <a class="nav-link "  href="../dashboard/admin.html">
                            <i class="icon">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
                            <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
                            </svg>
                            </i>
                            <span class="item-name">Admin</span>
                        </a>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                   
                    
                               
                        </ul>
                    </li>
                    
                          
                  
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false" aria-controls="sidebar-table">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Table</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/bootstrap-table.html">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Activities</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Activities</span>
                                </a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Blog</span>
                                </a>
                            </li>





                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">News</span>
                                </a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Reason_of_helping</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/table/table-data.html">
                                   <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"> D </i>
                                   <span class="item-name">Volunteer</span>
                                </a>
                            </li>
                        </ul>
                    </li>




                
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>










        <!--  navvvvvvvvvvvvvvvvvv -->


      
    </aside>  
      <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="me-0 me-xl-2">
                  <a class="btn btn-primary btn-sm d-flex gap-2 align-items-center" aria-current="page" href="http://hopeui.iqonic.design/pro?utm_source=hopeui-free-demo&utm_medium=hopeui-free-demo&utm_campaign=hopeui-pro-launch" target="_blank">
                    <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783Z" fill="currentColor"></path>
                      <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M3.01049 16.8079C2.81849 16.8079 2.62649 16.7349 2.48049 16.5879C2.18749 16.2949 2.18749 15.8209 2.48049 15.5279L3.84549 14.1619C4.13849 13.8699 4.61349 13.8699 4.90649 14.1619C5.19849 14.4549 5.19849 14.9299 4.90649 15.2229L3.54049 16.5879C3.39449 16.7349 3.20249 16.8079 3.01049 16.8079ZM6.77169 18.0003C6.57969 18.0003 6.38769 17.9273 6.24169 17.7803C5.94869 17.4873 5.94869 17.0133 6.24169 16.7203L7.60669 15.3543C7.89969 15.0623 8.37469 15.0623 8.66769 15.3543C8.95969 15.6473 8.95969 16.1223 8.66769 16.4153L7.30169 17.7803C7.15569 17.9273 6.96369 18.0003 6.77169 18.0003ZM7.02539 21.5683C7.17139 21.7153 7.36339 21.7883 7.55539 21.7883C7.74739 21.7883 7.93939 21.7153 8.08539 21.5683L9.45139 20.2033C9.74339 19.9103 9.74339 19.4353 9.45139 19.1423C9.15839 18.8503 8.68339 18.8503 8.39039 19.1423L7.02539 20.5083C6.73239 20.8013 6.73239 21.2753 7.02539 21.5683Z" fill="currentColor"></path>
                    </svg>
                    Go Pro
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/auth/images/Flag/flag001.png') }}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <div class="m-0 border-0 shadow-none card">
                            <div class="p-0 ">
                                <ul class="p-0 list-group list-group-flush">
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/auth/images/Flag/flag-03.png" alt="img-flaf" class="img-fluid me-2') }}" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/auth/images/Flag/flag-04.png" alt="img-flaf" class="img-fluid me-2') }}" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/auth/images/Flag/flag-02.png" alt="img-flaf" class="img-fluid me-2') }}"style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/auth/images/Flag/flag-05.png" alt="img-flaf" class="img-fluid me-2') }}" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/auth/images/Flag/flag-06.png" alt="img-flaf" class="img-fluid me-2') }}" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                      <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                      </svg>
                      <span class="bg-danger dots"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Notifications</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="{{ asset('assets/auth/images/shapes/01.png') }}" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">95 MB</p>
                                        <small class="float-end font-size-12">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            
                       
                           
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                      <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Message</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body ">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="{{ asset('assets/auth/images/shapes/01.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                    <small class="float-start font-size-12">13 Jun</small>
                                  </div>
                              </div>
                            </a>
                          
                       
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/auth/images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/auth/images/avatars/avtar_1.png') }}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/auth/images/avatars/avtar_2.png') }}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/auth/images/avatars/avtar_4.png') }}" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/auth/images/avatars/avtar_5.png') }}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/auth/images/avatars/avtar_3.png') }}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">Austin Robertson</h6>
                        <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                    <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
    <form action="{{ route('logoutUser') }}" method="POST">
      
        <button type="submit" class="dropdown-item">Logout</button>
    </form>
</li>

                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
        </main>







      <!--  beginning   -->
      <!-- <div class="form-wrapper">
    <h1 class="form-title">Edit Beginning</h1>
    <form id="edit-form" action="{{ route('update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="styled-div">
            <label for="p1" class="form-label">Field 1:</label>
            <input type="text" id="p1" name="p1" class="form-input">
            <button type="button" class="clear-btn" data-target="#p1">Clear</button><br><br>

            <label for="p2" class="form-label">Field 2:</label>
            <input type="text" id="p2" name="p2" class="form-input">
            <button type="button" class="clear-btn" data-target="#p2">Clear</button><br><br>

            <label for="p3" class="form-label">Field 3:</label>
            <input type="text" id="p3" name="p3" class="form-input">
            <button type="button" class="clear-btn" data-target="#p3">Clear</button><br><br>

            <input type="submit" value="Update" class="form-submit">
        </div>
    </form>
</div>



    <script>
       document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/beginning')  
        .then(response => response.json())
        .then(data => {
            // alert(data.Beginning);
            if (data.status && data.Beginning) {
                document.getElementById('p1').placeholder = data.Beginning.p1 || '';
                document.getElementById('p2').placeholder = data.Beginning.p2 || '';
                document.getElementById('p3').placeholder = data.Beginning.p3 || '';
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});

    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clearButtons = document.querySelectorAll('.clear-btn');
        
        clearButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetSelector = this.getAttribute('data-target');
                const targetInput = document.querySelector(targetSelector);
                
                if (targetInput) {
                    targetInput.value = 'deleted';
                }
            });
        });
    });
</script> -->














<!-- reasone page -->

<!-- <div class="reson_area" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;">
</div>

<div id="editPopup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit Post</h3>
        <form id="editForm">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="name" required><br><br>
            
            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="desc" required></textarea><br><br>
            
            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="imgUrl"><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        fetch('http://127.0.0.1:8000/api/posts')
            .then(response => response.json())
            .then(data => {
                console.log('Data fetched:', data);
                const container = document.querySelector('.reson_area');

                if (!container) {
                    console.error('Element with class "reson_area" not found.');
                    return;
                }

                const items = data.reason_of_helping;
                items.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'single_reson';
                    div.innerHTML = `
                        <div class="thume">
                            <div class="thum_1e">
                                <img src="{{ asset('assets/auth') }}${item.imgUrl}" alt="${item.name}" />
                            </div>
                        </div>
                        <div class="help_contente">
                            <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-desc="${item.desc}" data-imgUrl="${item.imgUrl}" onclick="openEditPopup(this)">Edit</button>
                            <button class="deleteBtn" data-id="${item.id}" onclick="deletePost(this)">Delete</button>
                            <h4>${item.name}</h4>
                            <p>
                                ${item.desc.length > 100 ? 
                                `<span class="description-preview">${item.desc.substring(0, 100)}...</span>
                                 <span class="read_more" onclick="toggleReadMore(this, '${item.desc}')">Read More</span>` 
                                : item.desc}
                            </p>
                            <a href="/ReadMore">Read More</a>
                        </div>
                    `;
                    container.appendChild(div);
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });

        const popup = document.getElementById("editPopup");
        const closeBtn = document.getElementsByClassName("close")[0];

        closeBtn.onclick = function() {
            popup.style.display = "none";
            document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        }

        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
                document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
                document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            }
        }

        document.getElementById("editForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const postId = document.querySelector('.editBtn.hidden')?.getAttribute('data-id');
            if (postId) {
                formData.append("id", postId);
                
                console.log('FormData entries:', Array.from(formData.entries())); 

                fetch(`http://127.0.0.1:8000/api/posts/${postId}`, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Success:', data);
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            } else {
                console.error('No post ID specified.');
            }

            popup.style.display = "none";
            document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        });
    });

    function toggleReadMore(element, fullDesc) {
        const paragraph = element.previousElementSibling;
        if (element.textContent === 'Read More') {
            paragraph.textContent = fullDesc;
            element.textContent = 'Show Less';
        } else {
            paragraph.textContent = paragraph.textContent.substring(0, 100) + '...';
            element.textContent = 'Read More';
        }
    }

    function openEditPopup(button) {
        const postId = button.getAttribute('data-id');
        console.log('ID passed to function:', postId); 
        document.getElementById("editName").value = button.getAttribute('data-name');
        document.getElementById("editDesc").value = button.getAttribute('data-desc');
        document.getElementById("editImg").value = ''; 
        document.getElementById("editPopup").style.display = "block";

        document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
        document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));
    }

    function deletePost(button) {
        const postId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this post?')) {
            fetch(`http://127.0.0.1:8000/api/posts/${postId}`, {
                method: 'DELETE',
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Post deleted:', data);
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    }
</script> -->






<!-- case -->

<!-- <script src="https://www.youtube.com/iframe_api"></script>

<div id="app">
    <div class="latest_activites_area">
      <div class="video_bg_1 video_activite d-flex align-items-center justify-content-center">
        <div id="video-frame"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="activites_info">
              <div class="section_title">
                <h3 id="activity-title">
                  <span></span><br>
                </h3>
              </div>
              <p id="activity-description" class="para_1">
              </p>
              <button class="but" id="edit-button">
                Edit
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="editModal" class="modal">
      <div class="modal-content">
        <h4>Edit Activity</h4>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="">

       

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>

        <label for="videoUrl">Video URL</label>
        <input type="text" id="videoUrl" name="videoUrl" value="">

        <div class="modal-buttons">
          <button id="saveChanges">Save Changes</button>
          <button id="closeModal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      fetch("http://127.0.0.1:8000/api/activities")
        .then(response => response.json())
        .then(data => {
          console.log(data);

          if (data.Activities) {
            console.log("Activity title:", data.Activities[0].name);

            document.getElementById('activity-title').innerHTML = `<span>${data.Activities[0].name}</span><br>Activities`;
            document.getElementById('activity-description').innerHTML = data.Activities[0].desc;

            initYouTubePlayer(data.Activities[0].videoUrl);
          } else {
            console.error('No activity found or incorrect data structure.');
          }
        })
        .catch(error => {
          console.error('Error fetching activity data:', error);
        });
    });

    function initYouTubePlayer(videoUrl) {
      const url = new URL(videoUrl);
      const videoId = url.searchParams.get('v');

      new YT.Player('video-frame', {
        height: '360',
        width: '640',
        videoId: videoId,
        events: {
          'onReady': onPlayerReady
        }
      });
    }

    function onPlayerReady(event) {

    }

    document.getElementById('edit-button').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'block';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'none';
    });

    document.getElementById('saveChanges').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'none';
    });
  </script>

<script>document.addEventListener('DOMContentLoaded', function () {
  const editButton = document.getElementById('edit-button');
  const editModal = document.getElementById('editModal');
  const closeModal = document.getElementById('closeModal');
  const saveChanges = document.getElementById('saveChanges');

  editButton.addEventListener('click', function () {
    editModal.style.display = 'block';
  });

  closeModal.addEventListener('click', function () {
    editModal.style.display = 'none';
  });

  window.addEventListener('click', function (event) {
    if (event.target === editModal) {
      editModal.style.display = 'none';
    }
  });

  saveChanges.addEventListener('click', function () {
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    const videoUrl = document.getElementById('videoUrl').value;

    console.log('Title:', title);
    console.log('Description:', description);
    console.log('Video URL:', videoUrl);

    fetch("http://127.0.0.1:8000/api/activities/1", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        name: title,
        desc: description,
        videoUrl: videoUrl
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.Activities && data.Activities.length > 0) {
        console.log("Activity title:", data.Activities[0].name);

        document.getElementById('activity-title').innerHTML = `<span>${data.Activities[0].name}</span><br>Activities`;
        document.getElementById('activity-description').innerHTML = data.Activities[0].desc;
        document.querySelector('iframe').src = data.Activities[0].videoUrl;
        editModal.style.display = 'none'; 
      } else {
        console.error('No activity found or incorrect data structure.');
      }
    })
    .catch(error => console.error('Error updating activity:', error));
  });

  fetch("http://127.0.0.1:8000/api/activities")
    .then(response => response.json())
    .then(data => {
      if (data.Activities && data.Activities.length > 0) {
        document.getElementById('title').value = data.Activities[0].name;
        document.getElementById('description').value = data.Activities[0].desc;
        document.getElementById('videoUrl').value = data.Activities[0].videoUrl;
      }
    })
    .catch(error => console.error('Error fetching data:', error));
});
</script> -->










<!-- causes  -->

<!-- <div class="causes-container" id="causes-container"></div>
<div class="container mt-4">
    <div class="causes-container" id="causes-container"></div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Cause</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="edit_id">
                    <div class="form-group">
                        <label for="edit_name">Name</label>
                        <input type="text" class="form-control" id="edit_name">
                    </div>
                    <div class="form-group">
                        <label for="edit_raised">Raised</label>
                        <input type="text" class="form-control" id="edit_raised">
                    </div>
                    <div class="form-group">
                        <label for="edit_goal">Goal</label>
                        <input type="text" class="form-control" id="edit_goal">
                    </div>
                    <div class="form-group">
                        <label for="edit_pre">Progress</label>
                        <input type="text" class="form-control" id="edit_pre">
                    </div>
                    <div class="form-group">
                        <label for="edit_smallDisc">Small Description</label>
                        <input type="text" class="form-control" id="edit_smallDisc">
                    </div>
                    <div class="form-group">
                        <label for="edit_desc">Description</label>
                        <textarea class="form-control" id="edit_desc" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_imgUrl">Image URL</label>
                        <input type="file" class="form-control" id="edit_imgUrl">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-danger" id="deleteButton">Delete Cause</button>
                </form>
            </div>
        </div>
    </div>
</div>
    


<script>
  document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/causes')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            if (data.status && Array.isArray(data.Causes)) {
                const container = document.getElementById('causes-container');
                data.Causes.forEach(cause => {
                    const causeElement = document.createElement('div');
                    causeElement.className = 'single_cause';
                    causeElement.setAttribute('key', cause.id);
                    causeElement.innerHTML = `
                        <div class="thumb">
                            <img src="{{ asset('assets/auth') }}${cause.imgUrl}" alt=""/>
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: ${cause.pre};" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">${cause.pre}</span>
                                    </div> 
                                </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>${cause.raised}</span>
                                <span>${cause.goal}</span>
                            </div>
                            <h4>${cause.name}</h4>
                            <p>${cause.smallDisc}</p>
                            <button class="edit_button btn btn-warning" data-toggle="modal" data-target="#editModal" data-id="${cause.id}" data-name="${cause.name}" data-raised="${cause.raised}" data-goal="${cause.goal}" data-pre="${cause.pre}" data-smalldisc="${cause.smallDisc}" data-desc="${cause.desc}" data-imgurl="${cause.imgUrl}">Edit</button>
                            <button class="delete_button btn btn-danger" data-id="${cause.id}">Delete</button>
                        </div>
                    `;
                    
                    container.appendChild(causeElement);
                });

                document.querySelectorAll('.edit_button').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('data-id');
                        document.getElementById('edit_id').value = id;
                        document.getElementById('edit_name').value = this.getAttribute('data-name');
                        document.getElementById('edit_raised').value = this.getAttribute('data-raised');
                        document.getElementById('edit_goal').value = this.getAttribute('data-goal');
                        document.getElementById('edit_pre').value = this.getAttribute('data-pre');
                        document.getElementById('edit_smallDisc').value = this.getAttribute('data-smalldisc');
                        document.getElementById('edit_desc').value = this.getAttribute('data-desc');
                        document.getElementById('edit_imgUrl').value = this.getAttribute('data-imgurl');
                    });
                });

                document.querySelectorAll('.delete_button').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('data-id');
                        if (confirm('Are you sure you want to delete this cause?')) {
                            fetch(`http://127.0.0.1:8000/api/causes/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status) {
                                    alert('Cause deleted successfully!');
                                    location.reload();
                                } else {
                                    console.error('Failed to delete cause:', data);
                                }
                            })
                            .catch(error => console.error('Error deleting cause:', error));
                        }
                    });
                });
            } else {
                console.error('Unexpected data format:', data);
            }
        })
        .catch(error => console.error('Error fetching causes:', error));
    });

document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const id = document.getElementById('edit_id').value;
    const formData = new FormData(this); 

    fetch(`http://127.0.0.1:8000/api/causes/${id}`, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            alert('Cause updated successfully!');
            location.reload();
        } else {
            console.error('Failed to update cause:', data);
        }
    })
    .catch(error => console.error('Error updating cause:', error));
});

</script> -->





















<!-- volunteer-->
<!-- <div class="reson_area" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit</h3>
        <form id="editForm" enctype="multipart/form-data">
            <label for="editName">Name</label>
            <input type="text" id="editName" name="name" required><br><br>

            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="info" required></textarea><br><br>

            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="imgUrl"><br><br>

            <label for="editFacebook">Facebook:</label>
            <input type="url" id="editFacebook" name="facebook"><br><br>

            <label for="editPinterest">Pinterest:</label>
            <input type="url" id="editPinterest" name="pinterest"><br><br>

            <label for="editLinkedin">LinkedIn:</label>
            <input type="url" id="editLinkedin" name="linkedin"><br><br>

            <label for="editTwitter">Twitter:</label>
            <input type="url" id="editTwitter" name="twitter"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // On page load
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch volunteer data from the API
        fetch('http://127.0.0.1:8000/api/volunteer')
            .then(response => response.json())
            .then(data => {
                console.log('Data fetched:', data);
                const container = document.querySelector('.reson_area');

                if (!container) {
                    console.error('Element with class "reson_area" not found.');
                    return;
                }

                const items = data.Volunteer; // Get volunteer data
                items.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'single_volunteer';
                    div.innerHTML = `
                        <div class="volunteer_thumb">
                            <img src="{{ asset('assets/auth') }}${item.imgUrl}" alt="Volunteer"/>
                        </div>
                        <div class="volunteer_info">
                            <div class="social_links">
                                <ul>
                                    <li><a href="${item.facebook}"> <i class="fab fa-facebook"></i> </a></li>
                                    <li><a href="${item.pinterest}"> <i class="fab fa-pinterest"></i> </a></li>
                                    <li><a href="${item.linkedin}"> <i class="fab fa-linkedin"></i> </a></li>
                                    <li><a href="${item.twitter}"> <i class="fab fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>${item.name}</h4>
                                <p>${item.info}</p>
                            </div>
                            <div class="edit-delete-buttons">
                                <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.info}" data-facebook="${item.facebook}" data-pinterest="${item.pinterest}" data-linkedin="${item.linkedin}" data-twitter="${item.twitter}" onclick="openEditPopup(this)">Edit</button>
                                <button class="deleteBtn" data-id="${item.id}" onclick="deletePost(this)">Delete</button>
                            </div>
                        </div>
                    `;
                    container.appendChild(div);
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    // Open edit popup
    function openEditPopup(button) {
        const postId = button.getAttribute('data-id');
        document.getElementById("editName").value = button.getAttribute('data-name');
        document.getElementById("editDesc").value = button.getAttribute('data-info');
        document.getElementById("editFacebook").value = button.getAttribute('data-facebook');
        document.getElementById("editPinterest").value = button.getAttribute('data-pinterest');
        document.getElementById("editLinkedin").value = button.getAttribute('data-linkedin');
        document.getElementById("editTwitter").value = button.getAttribute('data-twitter');
        document.getElementById("editImg").value = '';

        popup.style.display = "block";

        document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
        document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));

        // Set the id in a hidden property
        document.getElementById("editForm").dataset.id = postId;
    }

    // Close popup
    const popup = document.getElementById("editPopup");
    const closeBtn = document.getElementsByClassName("close")[0];

    closeBtn.onclick = function() {
        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.getElementById("editForm").reset();
    };

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
            document.getElementById("editForm").reset();
            document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        }
    };

    // On form submit
    document.getElementById("editForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const postId = this.dataset.id; // Get the post id

        if (postId) {
            formData.append("id", postId);

            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Operation successful:', data);
                location.reload(); // Reload the page after editing
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        } else {
            console.error('Post id not specified.');
        }

        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    });

    
    
    function deletePost(button) {
        const postId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this post?')) {
            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
                method: 'DELETE',
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Post deleted:', data);
                location.reload();
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        }
    }
</script> -->





























<!-- volunteer-->
<!-- <div class="news__areaa" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit News</h3>
        <form id="editForm" enctype="multipart/form-data">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="name" required><br><br>

            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="desc" required></textarea><br><br>

            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="imgUrl"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    fetch('http://127.0.0.1:8000/api/news')
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector('.news__areaa'); 

            if (!container) {
                console.error('Element with class "news__areaa" not found.');
                return;
            }

            const items = data.News;
            items.forEach((item, index) => {
                const div = document.createElement('div');
                div.className = 'single__bloga';
                div.innerHTML = `
                    <div class="thuma">
                        <img src="{{ asset('assets/auth') }}${item.imgUrl}" alt="${item.name}"/>
                    </div>
                    <div class="newsinfoa">
                        <span>${item.date}</span>
                        <h3>${item.name}</h3>
                        <p>${item.desc}</p>
                       
                            <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.desc}" onclick="openEditPopup(this)">Edit</button>
                            <button class="deleteBtn" data-id="${item.id}" onclick="deletePost(this)">Delete</button>
                       
                    </div>
                `;
                container.appendChild(div);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
});
function openEditPopup(button) {
    const postId = button.getAttribute('data-id');
    document.getElementById("editName").value = button.getAttribute('data-name');
    document.getElementById("editDesc").value = button.getAttribute('data-info');
    document.getElementById("editImg").value = '';

    const popup = document.getElementById("editPopup");
    popup.style.display = "block";

    document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
    document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));

    document.getElementById("editForm").dataset.id = postId;
}

const closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function() {
    const popup = document.getElementById("editPopup");
    popup.style.display = "none";
    resetButtonsAndForm();
};

window.onclick = function(event) {
    const popup = document.getElementById("editPopup");
    if (event.target == popup) {
        popup.style.display = "none";
        resetButtonsAndForm();
    }
};

function resetButtonsAndForm() {
    document.getElementById("editForm").reset();
    document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
}

document.getElementById("editForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const postId = this.dataset.id; 

    if (postId) {
        fetch(`http://127.0.0.1:8000/api/news/${postId}`, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Operation successful:', data);
            location.reload(); 
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    } else {
        console.error('Post id not specified.');
    }

    const popup = document.getElementById("editPopup");
    popup.style.display = "none";
    resetButtonsAndForm();
});

function deletePost(button) {
    const postId = button.getAttribute('data-id');
    if (confirm('Are you sure you want to delete this post?')) {
        fetch(`http://127.0.0.1:8000/api/news/${postId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Post deleted:', data);
            location.reload();
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    }
}

 </script> -->


















 <div class="form-container">
        <h1>Edit Information</h1>
        <form id="edit-form" method="POST" action="http://127.0.0.1:8000/api/about/1">
            @csrf
          

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook">
                </div>

                <div class="form-group">
                    <label for="pinterest">Pinterest</label>
                    <input type="text" class="form-control" id="pinterest" name="pinterest">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('edit-form');

            // Fetch data from the API
            fetch('http://127.0.0.1:8000/api/about')
                .then(response => response.json())
                .then(data => {
                    if (data.status && data.About.length > 0) {
                        const about = data.About[0];
                        document.getElementById('phone').value = about.phone;
                        document.getElementById('email').value = about.email;
                        document.getElementById('facebook').value = about.facebook;
                        document.getElementById('pinterest').value = about.pinterest;
                        document.getElementById('linkedin').value = about.linkedin;
                        document.getElementById('twitter').value = about.twitter;
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>


 


      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with
                  <span class="">
                      <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
              </div>
          </div>
      </footer>
    

    <!-- Library Bundle Script -->
    <script src="{{ asset('assets/auth/js/core/libs.min.js') }}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{ asset('assets/auth/js/core/external.min.js') }}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{ asset('assets/auth/js/charts/widgetcharts.js') }}"></script>
    
    <!-- mapchart Script -->
    <script src="{{ asset('assets/auth/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('assets/auth/js/charts/dashboard.js') }}"></script>
    
    <!-- fslightbox Script -->
    <script src="{{ asset('assets/auth/js/plugins/fslightbox.js') }}"></script>
    
    <!-- Settings Script -->
    <script src="{{ asset('assets/auth/js/plugins/setting.js') }}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{ asset('assets/auth/js/plugins/slider-tabs.js') }}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{ asset('assets/auth/js/plugins/form-wizard.js') }}"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="{{ asset('assets/auth/vendor/aos/dist/aos.js') }}"></script>
    
    <!-- App Script -->
    <script src="{{ asset('assets/auth/js/hope-ui.js') }}" defer></script>
    
    
  </body>
</html>