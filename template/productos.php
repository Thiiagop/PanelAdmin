<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>

  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<!-- FORMULARIO DE PRODUCTOS -->

<div class="row">
  <div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Formulario de productos</h3>
      </div>
      <!-- /.box-header -->

      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputImagen" class="col-sm-2 control-label">imagen</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="inputPassword3" placeholder="Imagen" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPrecio" class="col-sm-2 control-label">precio</label>

            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputPassword3" placeholder="Precio sin punto de mil">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Categoria</label>

            <div class="col-sm-10">
            <select class="form-control" id="selectCategoria" name="categoria" placeholder="Categoria">
        <option value="categoria1">Accesorios para hombre</option>
        <option value="categoria2">Accesorios para mujer</option>
        <option value="categoria3">Batas para hombre</option>
        <option value="categoria4">Batas para mujer</option>
        <option value="categoria5">Dispositivos</option>
        <option value="categoria6">Insumos</option>
        <option value="categoria7">Uniforme para hombre</option>
        <option value="categoria8">Uniforme para mujer</option>
    </select>
          </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>

</div>

<!-- FIN DE FORMULARIO DE PRODUCTOS -->

      <!-- Main row -->

      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Responsive Hover Table</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reason</th>
              </tr>
              <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>657</td>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-primary">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Mike Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-danger">Denied</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
<?php include("piePagina.php");?>
  
