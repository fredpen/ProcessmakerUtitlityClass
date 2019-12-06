<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Proccessmaker Utility Functions</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->


    <!-- Stylesheet to Highlight our code -->
    <link rel="stylesheet" href="css/prism.css" />
    <link rel="stylesheet" href="css/shadesOfPurple.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/ps.png" type="image/x-icon">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ProcessMaker</h3>
                <strong>PM</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#gridSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Grid
                    </a>
                    <ul class="collapse list-unstyled" id="gridSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">PHP Triggers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#textboxSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        Textbox
                    </a>
                    <ul class="collapse list-unstyled" id="textboxSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">PHP Triggers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#textareaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        Textarea
                    </a>
                    <ul class="collapse list-unstyled" id="textareaSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">PHP Triggers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#imageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        Image Control
                    </a>
                    <ul class="collapse list-unstyled" id="imageSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">PHP Triggers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#fileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        File Control
                    </a>
                    <ul class="collapse list-unstyled" id="fileSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">PHP Triggers</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        DropDown
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">JS Functions</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>