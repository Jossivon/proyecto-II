<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INTEGRANTES
        <small>TABLERO DE INTEGRANTES</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> INICIO</a></li>
        <li><a href="#">INTEGRANTES</a></li>
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
              <caption>COORDINADORES DE FACULTAD</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Cedula</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col" style="width:8px">Carga Horario</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1723117691</th>
                  <td>Ivonne</td>
                  <td>Barahona</td>
                  <td>@mdo</td>
                  <td>0996685513</td>
                  <td>8</td>
                  <td>Coordinador</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn-warning"> <i class="fa fa-pencil"></i></button>
                      <button class="btn-danger"> <i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div> 


         <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas">
              <caption>COORDINADORES DE CARRERA</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Cedula</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Carga Horario</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1723117691</th>
                  <td>Ivonne</td>
                  <td>Barahona</td>
                  <td>@mdo</td>
                  <td>0996685513</td>
                  <td>8</td>
                  <td>Coordinador</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn-warning"> <i class="fa fa-pencil"></i></button>
                      <button class="btn-danger"> <i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>

            </table>
          </div> 


          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas">
              <caption>DOCENTE</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Cedula</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Carga Horario</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1723117691</th>
                  <td>Ivonne</td>
                  <td>Barahona</td>
                  <td>@mdo</td>
                  <td>0996685513</td>
                  <td>8</td>
                  <td>Coordinador</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn-warning"> <i class="fa fa-pencil"></i></button>
                      <button class="btn-danger"> <i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>

            </table>
          </div> 

          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas">
              <caption>ESTUDIANTE</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Cedula</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Carga Horario</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1723117691</th>
                  <td>Ivonne</td>
                  <td>Barahona</td>
                  <td>@mdo</td>
                  <td>0996685513</td>
                  <td>8</td>
                  <td>Coordinador</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn-warning"> <i class="fa fa-pencil"></i></button>
                      <button class="btn-danger"> <i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>

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
          <h5 class="modal-title" style="text-align: center;">AGREGAR COORDINADOR DE FACULTAD</h5>
        </div>

      <div class="modal-body">
        <div class="box-body">
            <!------------------- CEDULA DE INDENTIDAD ----------------------------------------->
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control input-lg" name="cedulausuario" placeholder="Cédula" required>
             </div>
             <br>
        <!-------------------------------- NOMBRE DE USUARIO --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="nombreusuario" placeholder="Nombre del integrante" required>
                </div>
              </div>

              <!-------------------------------- APELLIDO DEL USUARIO --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="apellidousuario" placeholder="Apellido del integrante" required>
                </div>
              </div>

              <!------------------------------------CORREO--------------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="email" class="form-control input-lg" name="correousaurio" placeholder="Correo">
                      </div>
                    </div>

              <!------------------------------------- TELEFONO --------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text" class="form-control input-lg" name="telefonousuario" placeholder="Telefono" >
                      </div>
                    </div>

                <!---------------------------------- CARGA HORARIO ------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user-clock"></i></div>
                            <input type="text" class="form-control input-lg" name="cargahoraria" placeholder="Carga Horaria" required>
                      </div>
                    </div>

              <!----------------------------------------- CARGO ----------------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-users"></i></div>
                      <select name="cargo" class="form-control input-lg">
                        <option value="">Coordinador de Facultad</option>
                        <option value="">Coordinador de Carrera</option>
                        <option value="">Docente</option>
                        <option value="">Estudiante</option>
                      </select>
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
        <button type="submit" class="btn btn-primary">Agregar usuario</button>
      </div>

      <?php 
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();
      ?>

    </form>
  </div>
 </div>
</div>