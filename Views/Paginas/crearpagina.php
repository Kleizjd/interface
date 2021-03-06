<?php headerAdmin($data); ?>
<div id="contentAjax"></div>
<div class="right_col" role="main">
  <div class="">
    <div class="app-title">
      <div class="row">
        <div class="col-8">
          <h1>
            <i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
            <?php if ($_SESSION['permisosMod']['w']) { ?>
              <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
            <?php } ?>
          </h1>
        </div>
        <div class="col-4">
          <br>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes"><?= $data['page_title'] ?></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix">
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <form id="formPaginas" name="formPaginas" class="form-horizontal">
                  <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
                  <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                          <label class="control-label">Titulo <span class="required">*</span></label>
                          <input class="form-control" id="txtTitulo" name="txtTitulo" type="text" value="" required="">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Contenido</label>
                          <textarea class="form-control" id="txtContenido" name="txtContenido" >
                          </textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="listStatus">Estado <span class="required">*</span></label>
                                <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                                  <option value="1">Activo</option>
                                  <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                               <button id="btnActionForm" class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                           </div> 
                        </div>  
                    </div>
                  </div>
                  
                  <div class="tile-footer">
                     <div class="form-group col-md-12">
                         <div id="containerGallery">
                             <h4>Portada</h4>
                             <span>Tama??o sugerido (1920px X 239px)</span>
                         </div>
                         <hr>
                         <div id="containerImages">
                             <div class="photo">
                                <div class="prevPhoto prevPortada">
                                  <span class="delPhoto notBlock">X</span>
                                  <label for="foto"></label>
                                  <div>
                                  </div>
                                </div>
                                <div class="upimg">
                                  <input type="file" name="foto" id="foto">
                                </div>
                                <div id="form_alert"></div>
                            </div>
                         </div>
                     </div>             
                  </div>
                </form>
              </div>
            </div>
        </div>
            </div>
<?php footerAdmin($data); ?>