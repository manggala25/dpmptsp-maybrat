<!--   Core JS Files   -->
  <script src="{{ asset('template/argon-dashboard-master/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('template/argon-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/argon-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('template/argon-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  {{-- Datatable --}}
  <script src="https://cdn.datatables.net/2.0.8/js/jquery.dataTables.js"></script>
  
  
  <script src="{{ asset('template/argon-dashboard-master/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  