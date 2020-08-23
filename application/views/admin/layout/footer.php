<!-- Jquery Core Js -->
<script src="<?= base_url() ?>vendor/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url() ?>vendor/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/morrisjs/morris.js"></script>

<!-- CKEditor -->
<script src="<?= base_url() ?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>vendor/ckeditor/samples/js/sample.js"></script>

<!-- TinyMCE -->
<script src="<?= base_url() ?>vendor/plugins/tinymce/tinymce.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- ChartJs -->
<script src="<?= base_url() ?>vendor/plugins/chartjs/Chart.bundle.js"></script>

<!-- Jquery Validation Plugin Css -->
<script src="<?= base_url() ?>vendor/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Moment Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/flot-charts/jquery.flot.js"></script>
<script src="<?= base_url() ?>vendor/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>vendor/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>vendor/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?= base_url() ?>vendor/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- DataTables -->
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>vendor/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Dropzone Plugin Js -->
<script src="<?= base_url() ?>vendor/plugins/dropzone/dropzone.js"></script>

<!-- Custom Js -->
<script src="<?= base_url() ?>vendor/js/admin.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/index.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/forms/form-wizard.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/forms/basic-form-elements.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url() ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- Chart Plugins Js -->
<script src="<?= base_url() ?>vendor/Chart-js/dist/Chart.bundle.js"></script>

<!-- Demo Js -->
<script src="<?= base_url() ?>vendor/js/admin.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.config.height = 200;
    
    CKEDITOR.replace('editor');
    CKEDITOR.config.height = 200;
</script>
<script src="<?= base_url() ?>vendor/js/demo.js"></script>

<script src="<?= base_url() ?>assets/js/myscript.js"></script>
<script>
    $(window).on('load', function () {
        $('#alasan').hide();
        $('.dt-button').addClass('bs-btn');

        $('.buka').bootstrapMaterialDatePicker({
            format: 'dddd, DD-MMMM-YYYY, HH:mm',
            clearButton: true,
            weekStart: 1
        });

        $('.tutup').bootstrapMaterialDatePicker({
            format: 'dddd, DD-MMMM-YYYY, HH:mm',
            clearButton: true,
            weekStart: 1
        });
    });

    var pieData        = {
      labels: [
          'Belum Memilih',
          'osis',
          'osis',
          'osis',
          'osis',
          'osis',
      ],
      datasets: [
        {
          data: [<?= $users->jumlah_user ?>,5,4,6,3,1],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

</script>
</body>
</html>