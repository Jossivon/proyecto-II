<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INTEGRANTES
        <small>TABLERO DE EMPRESA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> INICIO</a></li>
        <li><a href="#">EMPRESA</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">

          <div class="box-header with-border">
              <button class="btn btn-info" data-toggle="modal" data-target="#modalAgregarFacu"> 
                Agregar Integrantes
              </button>
          </div>

          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas ">
              <caption>EMPRESA</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Codigo Empresa</th>
                  <th scope="col">Nombre Empresa</th>
                  <th scope="col">Siglas eEmpresa</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Pagina Web</th>
                  <th scope="col">Telefono</th>
                  <th scope="col" style="width:8px">Descripcion</th>
                </tr>
              </thead>

            </table>
          </div> 
      </div>
   </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAgregarFacu"  role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
     <form  role="form method="post" enctype="multipart/form-data">
       <div class="modal-header" style="background: #39CCCC; color:white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" style="text-align: center;">AGREGAR EMPRESA</h5>
        </div>

      <div class="modal-body">
        <div class="box-body">
            <!------------------- CODIGO EMPRESA ----------------------------------------->
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control input-lg" name="codigoE" placeholder="codigo Empresa" required>
             </div>
             <br>
        <!-------------------------------- NOMBRE DE DE LA EMPRESA --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="nombreempresa" placeholder="Nombre de la empresa" required>
                </div>
              </div>

              <!-------------------------------- SIGLAS --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="siglasempresa" placeholder="Siglas de la empresa" required>
                </div>
              </div>

               <!-------------------------------- CIUDAD --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="ciudad" placeholder="Ciudad" required>
                </div>
              </div>


              <!------------------------------------PAGINA WEB--------------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="email" class="form-control input-lg" name="paginaweb" placeholder="Pagina Web">
                      </div>
                    </div>

              <!------------------------------------- DESCRIPCION --------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text" class="form-control input-lg" name="descripcion" placeholder="Descripcion" >
                      </div>
                    </div>

             <div class="form-group">
                <div class="panle">Subir foto   </div>
                <input type="file" id="foto" name="nuevafoto">
                <p class="help-block"> Peso máximo 200 MB</p>
                <img src="vistas/img/usuarios/perfil.png" alt="">
             </div>
         </div>
       </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Agregar Empresa</button>
      </div>

    </form>
  </div>
 </div>
</div>