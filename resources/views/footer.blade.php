<!-- jQuery -->
<script src="{{asset('admin/LTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{asset('admin/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- JQVMap -->
<script src="{{asset('admin/LTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- daterangepicker -->

<!-- Tempusdominus Bootstrap 4 -->

<!-- Summernote -->
<script src="{{asset('admin/LTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>


<!-- Sparkline -->
<script src="{{asset('admin/LTE/plugins/sparklines/sparkline.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/LTE/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/LTE/dist/js/adminlte.js')}}"></script>

<script src="{{asset('admin/plugin/sweetalert2.all.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('admin/LTE/plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{asset('admin/plugin/bootstrap-switch.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{asset('admin/LTE/plugins/iCheck/icheck.min.js')}}"></script>

<script src="{{asset('admin/plugin/chartjs/highcharts.js')}}"></script>
<script src="{{asset('admin/plugin/chartjs/highcharts-3d.js')}}"></script>

<script type="text/javascript">

     function showValues() {
        $('#alpha-value').html(chart.options.chart.options3d.alpha);
        $('#beta-value').html(chart.options.chart.options3d.beta);
        $('#depth-value').html(chart.options.chart.options3d.depth);
    }

    // Activate the sliders
    $('#sliders input').on('input change', function () {
        chart.options.chart.options3d[this.id] = parseFloat(this.value);
        showValues();
        chart.redraw(false);
    });

    showValues();
</script>

<script>

    function alertJs(type = 'error', msg = '') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: type,
            title: msg
        })
    }

    function alertMsg(type = 'error', msg = '', note = '') {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true,
        });
        swalWithBootstrapButtons.fire(
            msg,
            note,
            type
        )
    }

    function alertConfirm(type = 'warning', msg = '') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: type,
            title: msg
        })
    }

</script>
<!--message-->

