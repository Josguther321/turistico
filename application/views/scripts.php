
<script src="<?php echo base_url();?>themes/backend/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/js/toastr.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap-validator/dist/validator.min.js">
</script>
<script src="<?php echo base_url();?>themes/backend/bower_components/datatables.net/js/jquery.dataTables.min.js">
</script>
<script src="<?php echo base_url();?>themes/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<script src="<?php echo base_url();?>themes/backend/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script
    src="<?php echo base_url();?>themes/backend/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js">
</script>
<script src="<?php echo base_url();?>themes/backend/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/util.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/button.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/modal.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/tab.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="<?php echo base_url();?>themes/backend/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="<?php echo base_url();?>themes/backend/js/dataTables.bootstrap4.min.js"></script>

<?php if ($this->session->flashdata('flash_message') != ""):?>
<script type="text/javascript">
toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>
<?php endif;?>
<?php if ($this->session->flashdata('error_message') != ""):?>
<script type="text/javascript">
toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>
<?php endif;?>
<script>
$('#modal-confirm').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>
<script>
$(document).ready(function() {
    $('#tablaresp').DataTable({
        "language": {
            "lengthMenu": "Seleccionar cantidad a visualizar _MENU_",
            "zeroRecords": "No se encontraron resultados",
            "info": "Total de registros _TOTAL_",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar Coincidencias:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });
});
</script>
