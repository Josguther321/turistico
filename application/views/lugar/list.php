<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">


            <h6 class="element-header">Lista de Lugares Turisticos visitados</h6>
            <div class="element-box">
                <div class="os-tabs-w">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_overview">
                            <div class="el-chart-w">

                                <table id="dataTable1" width="100%" class="table table-padded">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">#</th>
                                            <th style="text-align: center;">Nombre de Lugar</th>
                                            <th style="text-align: center;">Direccion</th>
                                            <th style="text-align: center;">Descripcion</th>
                                            <th style="text-align: center;">Departamento</th>
                                            <th style="text-align: center;">Municipio</th>
                                            <th style="text-align: center;">Tipo de Lugar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
            $listing = $this->db->get('lugar')->result_array();
            foreach($listing as $row):
          ?>
                                        <tr>
                                            <td style="text-align: center; font-weight: bold;">
                                                #<?php echo $row['id_lugar']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['nombre_lugar']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['direccion']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['descripcion']; ?></td>
                                            <td style="text-align: center;">
                                            <?php
                                            $d = $this->db->get_where('municipio',array('id_municipio '=>$row['id_municipio']))->row()->id_dpto;
                                            echo $this->db->get_where('departamento',array('id_dpto'=>$d))->row()->nombre_departamento; ?></td>
                                            <td style="text-align: center;"><?php echo $this->db->get_where('municipio',array('id_municipio '=>$row['id_municipio']))->row()->nombre_municipio; ?></td>
                                            <td style="text-align: center;"><?php echo $this->db->get_where('tipo_lugar',array('id_tl'=>$row['id_tl']))->row()->descripcion_tl; ?></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>