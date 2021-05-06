<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">


            <h6 class="element-header">Ingresar nuevo lugar turistico</h6>
            <div class="element-box">
                <div class="os-tabs-w">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_overview">
                            <div class="el-chart-w">
                                <form class="" action="<?php echo base_url();?>inicio/insert_place" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">Nombre del lugar</label>
                                            <input class="form-control" type="text" name="nombre_lugar" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Direccion</label>
                                            <input class="form-control" type="text" name="direccion" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <br>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="">Descripcion</label>
                                            <textarea class="form-control" name="descripcion" rows="4" cols="50"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <br><br>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Departamento</label>
                                            <select class="form-control" name="id_dpto" id=""
                                                onclick="get_municipio(this.value);">>
                                                <?php $data = $this->db->get('departamento')->result();?>
                                                <?php foreach($data as $d):?>
                                                <option value="<?php echo $d->id_dpto;?>">
                                                    <?php echo $d->nombre_departamento;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Municipio</label>
                                            <select class="form-control" name="id_municipio" id="id_municipio" required>
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <br><br>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="">Tipo de lugar</label>
                                            <select class="form-control" name="id_tl">
                                                <?php $data = $this->db->get('tipo_lugar')->result();?>
                                                <?php foreach($data as $d):?>
                                                <option value="<?php echo $d->id_tl;?>">
                                                    <?php echo $d->descripcion_tl;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <br><br>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="form-control btn btn-success">Guardar Lugar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function get_municipio(class_id) {
    $.ajax({
        url: '<?php echo base_url(); ?>inicio/get_municipio/' + class_id,
        success: function(response) {
            jQuery('#id_municipio').html(response);
        }
    });
}
</script>