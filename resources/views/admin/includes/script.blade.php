<!-- Vendor js -->
<script src="{{ asset('assets/admin/js/vendor.min.js') }}"></script>
@if(request()->routeIs('admin.dashboard'))
    <script src="{{ asset('assets/admin/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/raphael/raphael.min.js') }}"></script>

    <!-- KNOB JS -->
    <script src="{{ asset('assets/admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('assets/admin/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/pages/dashboard-2.init.js') }}"></script>
@endif
@if(request()->routeIs('admin.dashboard2'))
    <!--C3 Chart-->
    <script src="{{ asset('assets/admin/libs/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/c3/c3.min.js') }}"></script>

    <script src="{{ asset('assets/admin/libs/echarts/echarts.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/pages/dashboard.init.js') }}"></script>
@endif

@if(request()->routeIs('admin.calander'))

    <!-- plugin js -->
    <script src="{{ asset('assets/admin/libs/moment/moment.min.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/jquery-ui/jquery-ui')}}.min.js"></script>
    <script src="{{ asset('assets/admin/libs/fullcalendar/fullcalendar.min.js')}}"></script>

    <!-- Calendar init -->
    <script src="{{ asset('assets/admin/js/pages/calendar.init.js')}}"></script>
@endif

@if(request()->routeIs('admin.company'))
    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/companies.init.js')}}"></script>
@endif

@if(request()->routeIs('admin.tickets'))
    <!-- third party js -->
    <script src="{{ asset('assets/admin/libs/datatables/jquery.dataTables.min.j')}}s"></script>
    <script src="{{ asset('assets/admin/libs/datatables/dataTables.bootstrap4.min.j')}}s"></script>
    <script src="{{ asset('assets/admin/libs/datatables/dataTables.responsive.min.j')}}s"></script>

    <!-- Tickets js -->
    <script src="{{ asset('assets/admin/js/pages/tickets.init.js')}}"></script>
@endif
<!-- App js -->
<script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
