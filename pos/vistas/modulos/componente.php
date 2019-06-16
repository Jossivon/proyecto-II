<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INTEGRANTES
        <small>COMPONENTES DEL PROYECTO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> INICIO</a></li>
        <li><a href="#">COMPONENTES DEL PROYECTO</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">

          <div class="box-header with-border">
              <button class="btn btn-info" data-toggle="modal" data-target="#modalAgregarCompo">
                Agregar COMPONENTES
              </button>
          </div>

          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas ">
              <caption>COMPONENTES DEL PROYECTO</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Codigo Componente</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Linea Base</th>

                </tr>
              </thead>


            </table>
          </div>
      </div>
   </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAgregarCompo"  role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
     <form  role="form method="post" enctype="multipart/form-data">
       <div class="modal-header" style="background: #39CCCC; color:white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" style="text-align: center;">AGREGAR COMPONENTE</h5>
        </div>

      <div class="modal-body">
        <div class="box-body">
            <!------------------- CODIGO DE PROYECTO ----------------------------------------->
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                    <input type="text" class="form-control input-lg" name="codigoproyecto" placeholder="Codigo de Proyecto" required>
             </div>
             <br>
        <!-------------------------------- DESCRIPCION --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-prescription-bottle"></i></div>
                      <input type="text" class="form-control input-lg" name="descripcioncomponente" placeholder="Descripcion de componente" required>
                </div>
              </div>

              <!-------------------------------- LINEA BASE --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bookmark"></i></div>
                      <input type="text" class="form-control input-lg" name="lineabasecomponente" placeholder="Linea base" required>
                </div>
              </div>



         </div>
       </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Agregar Componente</button>
      </div>

    </form>
  </div>
 </div>
</div>
