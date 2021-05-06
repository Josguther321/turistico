<div class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="<?php echo base_url();?>">
              <img src="<?php echo base_url();?>uploads/logo.png" style="width: 90%;">
            </a>
          </div>
          <br><br>
          <ul class="main-menu">
            <li class="main-menu <?php if($page_name == 'lugar_index') echo 'active';?>">
              <a href="<?php echo base_url().'inicio';?>">
                &nbsp;<div class="icon-w">
                  <div class="picons-thin-icon-thin-0483_gauge_dashboard_half"></div>
                </div>
                <span>Inicio</span>
              </a>
            </li>
             <li class="main-menu <?php if($page_name == 'list') echo 'active';?>">
              <a href="<?php echo base_url().'inicio/list';?>">
                &nbsp;<div class="icon-w">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <span>Lista de Lugares</span>
              </a>
            </li>
            <li class="main-menu <?php if($page_name == 'new_place') echo 'active';?>">
              <a href="<?php echo base_url().'inicio/new_place';?>">
                &nbsp;<div class="icon-w">
                  <i class="fa fa-plane" aria-hidden="true"></i>
                </div>
                <span>Ingresar Nuevo Lugar</span>
              </a>
            </li>
            
          </ul>
          <hr>

        </div>
