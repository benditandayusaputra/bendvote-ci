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
<script src="<?= base_url() ?>vendor/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/index.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/forms/form-wizard.js"></script>
<script src="<?= base_url() ?>vendor/js/pages/forms/basic-form-elements.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url() ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- Chart Plugins Js -->
<script src="<?= base_url() ?>vendor/Chart-js/dist/Chart.min.js"></script>
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

    $('.bv-btn-pilih').on('click', function (event) {
        event.preventDefault();
        const objek = $(this).attr('href'); 

        Swal.fire({
            title: 'Apakah Anda Yakin..??',
            text: "Memiih Calon Ini",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Pilih'
        }).then((result) => {
            if (result.value) {
                document.location.href = objek;
            }
        });

    });

    $('#nilai1').click(function (e) { 
        $('#nilai2').removeClass('yellow');
        $('#nilai3').removeClass('yellow');
        $('#nilai4').removeClass('yellow');
        $('#nilai5').removeClass('yellow');
        $('#nilai1').addClass('yellow');
        $('#nilai').val(1);
        $('#text').html('Sangat Bagus');
    });
    $('#nilai2').click(function () { 
        $('#nilai3').removeClass('yellow');
        $('#nilai4').removeClass('yellow');
        $('#nilai5').removeClass('yellow');
        $('#nilai1').addClass('yellow');
        $('#nilai2').addClass('yellow');
        $('#nilai').val(2);
        $('#text').html('Bagus');
    });
    $('#nilai3').click(function () { 
        $('#nilai4').removeClass('yellow');
        $('#nilai5').removeClass('yellow');
        $('#nilai1').addClass('yellow');
        $('#nilai2').addClass('yellow');
        $('#nilai3').addClass('yellow');
        $('#nilai').val(3);
        $('#text').html('Bisane..??');
    });
    $('#nilai4').click(function () { 
        $('#nilai5').removeClass('yellow');
        $('#nilai1').addClass('yellow');
        $('#nilai2').addClass('yellow');
        $('#nilai3').addClass('yellow');
        $('#nilai4').addClass('yellow');
        $('#nilai').val(4);
        $('#text').html('Apa Iya No..??');
    });
    $('#nilai5').click(function () { 
        $('#nilai1').addClass('yellow');
        $('#nilai2').addClass('yellow');
        $('#nilai3').addClass('yellow');
        $('#nilai4').addClass('yellow');
        $('#nilai5').addClass('yellow');
        $('#nilai').val(5);
        $('#text').html('Kok Bisa..??');
    });

</script>
</body>
</html>