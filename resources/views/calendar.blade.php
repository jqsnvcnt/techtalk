<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ URL::to('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::to('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ URL::to('/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
    <!-- Add the evo-calendar.css for styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" # " target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>

            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            @include('shared.side')
        </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Schedule</li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Booking Calendar</h6>
                            @include('shared.notification')
                        </div>
                        <div class="card-body pb-2">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--   Core JS Files   -->

    <script src="{{ URL::to('/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::to('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ URL::to('/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

    <script type="text/javascript">

        const myEvents = @json($events)
        // const myEvents = [
        //     {
        //         id: "required-id-1",
        //         name: "New Year",
        //         date: "Wed Nov 01 2022 00:00:00 GMT-0800 (Pacific Standard Time)",
        //         type: "holiday",
        //         everyYear: true
        //     },
        //     {
        //         id: "required-id-2",
        //         name: "Valentine's Day",
        //         date: "Fri Nov 14 2022 00:00:00 GMT-0800 (Pacific Standard Time)",
        //         type: "holiday",
        //         everyYear: true,
        //         color: "#222"
        //     },
        //     {
        //         id: "required-id-3",
        //         name: "Custom Date",
        //         badge: "11-03 - 11-05",
        //         date: ["November/03/2022", "November/05/2022"],
        //         description: "Description here",
        //         type: "event",
        //     },
        //     {
        //         id: "required-id-4",
        //         name: "JS",
        //         date: "2022-11-10",
        //         type: "holiday",
        //         color: "#222"
        //     },
        // ];

        $('#calendar').evoCalendar({
            calendarEvents: myEvents,
            sidebarToggler: true,
            sidebarDisplayDefault: true,
            eventListToggler: true,
            eventDisplayDefault: true,
            todayHighlight: true,
        });

        // $("#calendar").evoCalendar('addCalendarEvent', [
        //     {
        //         id: '09nk7Ts',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     },
        //     {
        //         id: '09nk7Ts1',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     },
        //     {
        //         id: '09nk7Ts3',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     },
        //     {
        //         id: '09nk7Ts3',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     },
        //     {
        //         id: '09nk7Ts13',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     },
        //     {
        //         id: '09nk7Ts33',
        //         name: "MultiDate",
        //         date: "2022-11-21",
        //         description: "Multi Date",
        //         type: "holiday"
        //     }
        // ]);

        // $("#calendar").evoCalendar('addCalendarEvent', [
        //     {
        //         id: '09nk7Ts',
        //         name: "MultiDate 2",
        //         date: ["November/03/2022", "November/10/2022"],
        //         description: "Multi Date 2",
        //         type: "holiday"
        //     }
        // ]);
    </script>

</body>

</html>
