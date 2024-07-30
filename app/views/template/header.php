<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Trellis & Douglas</title>
        <meta content="Douglas's Technical Challenge" name="description">
        <meta content="trellis,douglas,technical,challenge" name="keywords">
        <link href="<?= BASE_URL ?>/template/img/favicon.ico" rel="icon">
        <link href="<?= BASE_URL ?>/template/img/favicon.ico" rel="apple-touch-icon">
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/quill/quill.snow.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/quill/quill.bubble.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/remixicon/remixicon.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/simple-datatables/style.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>/template/css/style.css" rel="stylesheet">
    </head>

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a class="MuiButtonBase-root css-lc28te" tabindex="0" href="/" aria-label="account of current user" aria-controls="menu-appbar" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 896 896" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-jub87q" focusable="false" aria-hidden="true" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="leaf" d="M0 449.037c0 246.759 200.033 446.796 446.796 446.796 246.758 0 446.796-200.037 446.796-446.796V2.246H446.796C200.033 2.246 0 202.279 0 449.037Z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 713 255" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1a3f84a" focusable="false" aria-hidden="true" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <g fill="#000">
                        <path id="t" d="M2.596,23.937l38.25,0c1.45,0 2.625,1.176 2.625,2.625l-0,47.634l37.062,-0c1.45,-0 2.629,1.175 2.629,2.625l0,29.308c0,1.446 -1.179,2.625 -2.629,2.625l-37.062,0l-0,67.742c-0,28.737 22.583,32.846 34.558,32.846c2.404,-0 4.379,-0.171 5.75,-0.346c1.125,-0.138 2.121,0.721 2.121,1.854l-0,31.783c-0,2.359 -1.758,4.329 -4.104,4.571c-2.279,0.238 -5.429,0.458 -9.242,0.458c-24.291,0 -72.537,-7.183 -72.537,-65.687l-0.017,-155.438c0,-1.437 1.163,-2.6 2.596,-2.6Z" fill="#000" style="opacity: 1; transform: none; transition: opacity 100ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 67ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="r" d="M107.704,73.429l36.488,0c1.45,0 2.625,1.171 2.625,2.625l-0,27.479c-0,6.5 -0.688,12.321 -0.688,12.321l0.688,0c7.87,-24.975 28.737,-44.825 55.425,-44.825c1.958,0 3.837,0.158 5.271,0.321c1.479,0.167 2.595,1.417 2.595,2.908l0,36.946c0,1.717 -1.454,3.071 -3.162,2.917c-1.817,-0.163 -4.3,-0.321 -7.1,-0.321c-18.475,0 -39.342,10.604 -47.559,36.608c-2.733,8.55 -3.758,18.129 -3.758,28.4l0,66.484c0,1.45 -1.175,2.625 -2.625,2.625l-38.2,-0c-1.45,-0 -2.629,-1.175 -2.629,-2.625l0,-169.238c0,-1.454 1.179,-2.625 2.629,-2.625Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 167ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="e" d="M331.017,141.258c-0.688,-23.608 -15.404,-36.266 -34.559,-36.262c-22.237,0.004 -37.633,13.692 -41.741,36.275l76.3,-0.013Zm-33.534,-69.791c50.292,-0.004 77.325,36.604 77.33,82.787c-0,3.183 -0.392,8.858 -0.692,12.717c-0.179,2.287 -2.083,4.05 -4.375,4.05l-116.388,0.012c2.738,30.45 26.35,46.188 52.35,46.188c21.688,-0.004 39.896,-11.454 47.046,-16.654c1.625,-1.18 3.904,-0.4 4.496,1.516l9.121,29.338c0.446,1.442 -0.034,2.983 -1.209,3.925c-6.075,4.858 -26.641,18.816 -62.524,18.821c-57.825,0.004 -93.755,-41.725 -93.759,-91.338c-0.008,-53.716 36.592,-91.354 88.604,-91.362Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 500ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 333ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="l1" d="M429.167,3.033l-36.054,0c-1.951,0 -3.534,1.575 -3.534,3.525l0,237.575c0,1.95 1.583,3.529 3.534,3.529l36.054,0c1.941,0 3.525,-1.579 3.525,-3.529l-0,-237.575c-0,-1.95 -1.584,-3.525 -3.525,-3.525Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 750ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 500ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="l2" d="M493.196,3.033l-36.054,0c-1.946,0 -3.525,1.575 -3.525,3.525l-0,237.575c-0,1.95 1.579,3.529 3.525,3.529l36.054,0c1.95,0 3.525,-1.579 3.525,-3.529l-0,-237.575c-0,-1.95 -1.575,-3.525 -3.525,-3.525Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 1000ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 666ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="i" d="M519.742,75.558l38.2,0c1.446,0 2.625,1.171 2.625,2.625l-0,167.109c-0,1.45 -1.179,2.625 -2.625,2.625l-38.2,-0c-1.45,-0 -2.625,-1.175 -2.625,-2.625l-0,-167.109c-0,-1.454 1.175,-2.625 2.625,-2.625Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 1250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 833ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="s" d="M591.667,197.633c1.237,-1.904 3.833,-2.308 5.604,-0.879c6.575,5.321 22.804,16.354 44.354,16.354c12.317,0 22.921,-5.479 22.921,-15.741c-0,-26 -84.85,-22.584 -84.85,-78.696c-0,-32.5 29.083,-51.317 66.717,-51.317c32.02,0 50.666,13.142 56.504,18.038c1.212,1.016 1.545,2.712 0.837,4.129l-12.783,25.575c-1.071,2.137 -3.767,2.829 -5.713,1.446c-6.129,-4.359 -19.887,-12.238 -39.187,-12.238c-11.292,0 -22.242,4.792 -22.242,15.742c0,24.633 84.854,21.55 84.854,77.662c0,29.088 -25.325,52.35 -66.716,52.35c-36,0 -58.85,-17.616 -65.63,-23.654c-1.254,-1.125 -1.479,-2.987 -0.562,-4.396l15.892,-24.375Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 1500ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 999ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                        <path id="dot" d="M563.379,27.283c0,13.554 -10.983,24.538 -24.537,24.538c-13.554,-0 -24.542,-10.984 -24.542,-24.538c-0,-13.554 10.988,-24.541 24.542,-24.541c13.554,-0 24.537,10.987 24.537,24.541Z" fill="#000" style="opacity: 1; transform: none; transform-origin: 0px 0px 0px; transition: opacity 1250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 833ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></path>
                    </g>
                </svg>
                <span class="d-none d-lg-block m-2" style="font-size: 24px">trellis</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Warning notification example</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Error notification example</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Success notification example</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Information notification example</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="template/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Douglas Alves</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                        <h6>Douglas Alves</h6>
                        <span>Full Stack Developer</span>
                        </li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>

                        <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                        </li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>

                        <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                        </li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>

                        <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                        </li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>

                        <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Submenus</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="#">
                                <i class="bi bi-circle"></i><span>Example 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-circle"></i><span>Example 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-circle"></i><span>Example 3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                    <i class="bi bi-envelope"></i>
                    <span>Support</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </aside>
    </header>
    <body>
        <div class="main">