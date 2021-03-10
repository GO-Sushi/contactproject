

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>App Contacts | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/vendors.min.css') ;?>">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-contacts.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="#" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                        <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                        </li>
                        <li class="divider"></li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
                        <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                        <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Modern</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a href="dashboard-analytics.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Templates</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Vertical</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../vertical-modern-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern Menu">Modern Menu</span></a>
                                    </li>
                                    <li><a href="../vertical-menu-nav-dark-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                                    </li>
                                    <li><a href="../vertical-gradient-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gradient Menu">Gradient Menu</span></a>
                                    </li>
                                    <li><a href="../vertical-dark-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dark Menu">Dark Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal">Horizontal</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="../horizontal-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal Menu">Horizontal Menu</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-kanban.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-file-manager.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File manager</span></a>
            </li>
            <li class="active bold"><a class="waves-effect waves-cyan active " href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="app-invoice-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Invoice List</span></a>
                        </li>
                        <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
                        </li>
                        <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
                        </li>
                        <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="eCommerce">eCommerce</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="eCommerce-products-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Products Page">Products Page</span></a>
                        </li>
                        <li><a href="eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pricing">Pricing</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Contact</span></a>
                        </li>
                        <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Blog</span></a>
                        </li>
                        <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Search</span></a>
                        </li>
                        <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Knowledge</span></a>
                        </li>
                        <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">FAQs</span></a>
                        </li>
                        <li><a href="page-account-settings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Account Settings">Account Settings</span></a>
                        </li>
                        <li><a href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
                        </li>
                        <li><a href="page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Collapse">Page Collapse</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="Medias">Medias</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="media-gallery-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gallery Page">Gallery Page</span></a>
                        </li>
                        <li><a href="media-hover-effects.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media Hover Effects">Media Hover Effects</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-users-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                        </li>
                        <li><a href="page-users-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
                        </li>
                        <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">lock_open</i><span class="menu-title" data-i18n="Authentication">Authentication</span><span class="badge badge pill purple float-right mr-10">10</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="user-login.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="user-register.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="user-forgot-password.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="user-lock-screen.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Lock Screen">Lock Screen</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="Misc">Misc</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="page-404.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="404">404</span></a>
                        </li>
                        <li><a href="page-maintenance.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Maintenanace">Page Maintenanace</span></a>
                        </li>
                        <li><a href="page-500.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="500">500</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Cards</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Cards</span></a>
                        </li>
                        <li><a href="cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Cards Advance</span></a>
                        </li>
                        <li><a href="cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">Cards Extended</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="CSS">CSS</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="css-typography.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Typograpy">Typograpy</span></a>
                        </li>
                        <li><a href="css-color.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Color">Color</span></a>
                        </li>
                        <li><a href="css-grid.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Grid">Grid</span></a>
                        </li>
                        <li><a href="css-helpers.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Helpers">Helpers</span></a>
                        </li>
                        <li><a href="css-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="css-pulse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pulse">Pulse</span></a>
                        </li>
                        <li><a href="css-sass.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sass">Sass</span></a>
                        </li>
                        <li><a href="css-shadow.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Shadow">Shadow</span></a>
                        </li>
                        <li><a href="css-animations.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Animations">Animations</span></a>
                        </li>
                        <li><a href="css-transitions.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Transitions">Transitions</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Basic UI">Basic UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Buttons">Buttons</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="ui-basic-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li><a href="ui-extended-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Extended">Extended</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Icons">Icons</span></a>
                        </li>
                        <li><a href="ui-alerts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a href="ui-badges.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a href="ui-breadcrumbs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a href="ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="ui-collections.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collections">Collections</span></a>
                        </li>
                        <li><a href="ui-navbar.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar">Navbar</span></a>
                        </li>
                        <li><a href="ui-pagination.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a href="ui-preloader.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Preloader">Preloader</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="Advanced UI">Advanced UI</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="advance-ui-carousel.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a href="advance-ui-collapsibles.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collapsibles">Collapsibles</span></a>
                        </li>
                        <li><a href="advance-ui-toasts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a href="advance-ui-tooltip.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tooltip">Tooltip</span></a>
                        </li>
                        <li><a href="advance-ui-dropdown.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dropdown">Dropdown</span></a>
                        </li>
                        <li><a href="advance-ui-feature-discovery.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Discovery">Discovery</span></a>
                        </li>
                        <li><a href="advance-ui-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                        </li>
                        <li><a href="advance-ui-modals.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a href="advance-ui-scrollspy.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Scrollspy">Scrollspy</span></a>
                        </li>
                        <li><a href="advance-ui-tabs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tabs">Tabs</span></a>
                        </li>
                        <li><a href="advance-ui-waves.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Waves">Waves</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="extra-components-range-slider.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Range Slider</span></a>
                        </li>
                        <li><a href="extra-components-sweetalert.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sweetalert">Sweetalert</span></a>
                        </li>
                        <li><a href="extra-components-nestable.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Nestable">Nestable</span></a>
                        </li>
                        <li><a href="extra-components-treeview.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Treeview">Treeview</span></a>
                        </li>
                        <li><a href="extra-components-ratings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a href="extra-components-tour.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a href="extra-components-i18n.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="i18n">i18n</span></a>
                        </li>
                        <li><a href="extra-components-highlight.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlight">Highlight</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Basic Tables</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Data Tables</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="Forms">Forms</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="form-elements.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Elements">Form Elements</span></a>
                        </li>
                        <li><a href="form-select2.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Select2">Form Select2</span></a>
                        </li>
                        <li><a href="form-validation.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Form Validation</span></a>
                        </li>
                        <li><a href="form-masks.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Masks">Form Masks</span></a>
                        </li>
                        <li><a href="form-editor.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Editor">Form Editor</span></a>
                        </li>
                        <li><a href="form-file-uploads.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="File Uploads">File Uploads</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Charts</a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Chart</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
                        </li>
                        <li><a href="charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chartist">Chartist</span></a>
                        </li>
                        <li><a href="charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sparkline Charts">Sparkline Charts</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
            </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- Add new contact popup -->
                    <div class="contact-overlay"></div>
                    <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
                        <a class="btn-floating btn-large primary-text gradient-shadow contact-sidebar-trigger" href="#modal1">
                            <i class="material-icons">person_add</i>
                        </a>
                    </div>
                    <!-- Add new contact popup Ends-->

                    <!-- Sidebar Area Starts -->
                    <div class="sidebar-left sidebar-fixed">
                        <div class="sidebar">
                            <div class="sidebar-content">
                                <div class="sidebar-header">
                                    <div class="sidebar-details">
                                        <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">perm_identity</i> Contacts
                                        </h5>
                                        <div class="mt-10 pt-2">
                                            <p class="m-0 subtitle font-weight-700">Total number of contacts</p>
                                            <p class="m-0 text-muted">1457 Contacts</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft delay-1">
                                    <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
                                        <ul class="contact-list display-grid">
                                            <li class="sidebar-title">Filters</li>
                                            <li class="active"><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2">
                                                        perm_identity </i> All
                                                    Contact</a></li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> history </i> Frequent</a>
                                            </li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred
                                                    Contacts</a></li>
                                            <li class="sidebar-title">Options</li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_down </i>
                                                    Import</a></li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_up </i>
                                                    Export</a></li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> print </i> Print</a></li>
                                            <li class="sidebar-title">Department</li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Engineering</a></li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Sales</a></li>
                                            <li><a href="javascript:void(0)" class="text-sub"><i class="light-green-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" data-target="contact-sidenav" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Area Ends -->

                    <!-- Content Area Starts -->
                    <div class="content-area content-right">
                        <div class="app-wrapper">
                            <div class="datatable-search">
                                <i class="material-icons mr-2 search-icon">search</i>
                                <input type="text" placeholder="Search Contact" class="app-filter" id="global_filter">
                            </div>
                            <div id="button-trigger" class="card card card-default scrollspy border-radius-6 fixed-width">
                                <div class="card-content p-0">
                                    <table id="data-table-contact" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="background-image-none center-align">
                                                    <label>
                                                        <input type="checkbox" onClick="toggle(this)" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th>User</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Favorite</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar"></span></td>
                                                <td>John</td>
                                                <td>john@domain.com</td>
                                                <td>202-555-0119</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar"></span></td>
                                                <td>Rodolfo</td>
                                                <td>rodo@domain.com</td>
                                                <td>202-555-0125</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar"></span></td>
                                                <td>Marco</td>
                                                <td>marco@domain.com</td>
                                                <td>202-555-0177</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar"></span></td>
                                                <td>Joshua</td>
                                                <td>jos@domain.com</td>
                                                <td>202-555-0126</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar"></span></td>
                                                <td>Gene</td>
                                                <td>gene@domain.com</td>
                                                <td>202-555-0130</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar"></span></td>
                                                <td>Oscar</td>
                                                <td>oscar@domain.com</td>
                                                <td>+1-202-555-0119</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar"></span></td>
                                                <td>William</td>
                                                <td>will@domain.com</td>
                                                <td>+1-202-555-0125</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"></span></td>
                                                <td>Dorian</td>
                                                <td>dori@domain.com</td>
                                                <td>202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar"></span></td>
                                                <td>Lester</td>
                                                <td>les@domain.com</td>
                                                <td>+1-202-555-0177</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar"></span></td>
                                                <td>Charles</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0126</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar"></span></td>
                                                <td>William</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0130</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar"></span></td>
                                                <td>John</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar"></span></td>
                                                <td>John</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-13.png" alt="avatar"></span></td>
                                                <td>John</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-14.png" alt="avatar"></span></td>
                                                <td>Jake</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-15.png" alt="avatar"></span></td>
                                                <td>Jake</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-16.png" alt="avatar"></span></td>
                                                <td>Heather</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-17.png" alt="avatar"></span></td>
                                                <td>Joanna</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar"></span></td>
                                                <td>Joanna</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar"></span></td>
                                                <td>Cassandra</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar"></span></td>
                                                <td>Dolores</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar"></span></td>
                                                <td>Susan</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar"></span></td>
                                                <td>Susan</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar"></span></td>
                                                <td>Kathleen</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"></span></td>
                                                <td>Chief</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar"></span></td>
                                                <td>Walter</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar"></span></td>
                                                <td>Walter</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar"></span></td>
                                                <td>Kathleen</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                            <tr>
                                                <td class="center-align contact-checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="foo" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><span class="avatar-contact avatar-online"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar"></span></td>
                                                <td>Terry</td>
                                                <td>name@domain.com</td>
                                                <td>+1-202-555-0112</td>
                                                <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                                                <td><span><i class="material-icons delete">delete_outline</i></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Area Ends -->

                    <!--  Contact sidebar -->
                    <div class="contact-compose-sidebar">
                        <div class="card quill-wrapper">
                            <div class="card-content pt-0">
                                <div class="card-header display-flex pb-2">
                                    <h3 class="card-title contact-title-label">Create New Contact</h3>
                                    <div class="close close-icon">
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <!-- form start -->
                                <form class="edit-contact-item mb-5 mt-5">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> perm_identity </i>
                                            <input id="first_name" type="text" class="validate">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> perm_identity </i>
                                            <input id="last_name" type="text" class="validate">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> business </i>
                                            <input id="company" type="text" class="validate">
                                            <label for="company">Company</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> business_center </i>
                                            <input id="business" type="text" class="validate">
                                            <label for="business">Job Title</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> email </i>
                                            <input id="email" type="email" class="validate">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> call </i>
                                            <input id="phone" type="text" class="validate">
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> note </i>
                                            <input id="notes" type="text" class="validate">
                                            <label for="notes">Notes</label>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-action pl-0 pr-0 right-align">
                                    <button class="btn-small waves-effect waves-light add-contact">
                                        <span>Add Contact</span>
                                    </button>
                                    <button class="btn-small waves-effect waves-light update-contact display-none">
                                        <span>Update Contact</span>
                                    </button>
                                </div>
                                <!-- form start end-->
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="#messages" class="active">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body row pl-3">
                                    <div id="messages" class="col s12 pb-0">
                                        <div class="collection border-none mb-0">
                                            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12">
                                        <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">Homepage mockup design</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content green-text">Resolved</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">30 mins</div>
                                                    <h6 class="timeline-title">12 new users registered</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">2 Hrs</div>
                                                    <h6 class="timeline-title">Tina is attending your activity</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">5 hrs</div>
                                                    <h6 class="timeline-title">Josh is now following you</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content red-text">Pending</div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Just now</div>
                                                    <h6 class="timeline-title">New order received urgent</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">05 min</div>
                                                    <h6 class="timeline-title">System shutdown.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red">
                                                    <div class="timeline-time">20 mins</div>
                                                    <h6 class="timeline-title">Database overloaded 89%</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">System error</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content red-text">Error</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan">
                                                    <div class="timeline-time">1 min</div>
                                                    <h6 class="timeline-title">Production server down.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search" />
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js"></script>
    <script src="../../../app-assets/js/search.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/app-contacts.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>