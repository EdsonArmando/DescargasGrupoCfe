<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Grupo Cfe</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse colors">
    <ul class="nav navbar-nav">
      <li><a href="#">Inicio</a></li>	
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Articulos</a></li>
      <li><a href="#">Alianzas de negocios</a></li>
      <li><a href="#">Contáctenos</a></li>
      <li><a href="#">Descargas</a></li>
    </ul> 
  </div>
</nav>
<div  class="div">
	<div>
		<h1>Zona de descargas</h1>
		<h2>Introduce tus datos para iniciar la descarga</h2>
	</div>
	<div class="form-group">
    <?php 
    echo form_open("/codigocontroller/recibirDatos");?>
         <div class="form-group">
              <label for="nombre" class="control-label">Nombre</label>
              <input class="form-control input" required id="nombre" name="nombre" placeholder="Nombre" type="text" value="<?php echo set_value('nombre'); ?>" />
              <span class="text-danger"><?php echo form_error('nombre'); ?></span>
         </div>
         <div class="form-group">
         		<label for="correo" class="control-label">Correo</label>
         		<input class="form-control input"required id="correo" name="correo" placeholder="Correo" type="email" value="<?php echo set_value('correo'); ?>" />
              <span class="text-danger"><?php echo form_error('correo'); ?></span>
         </div>
         <div class="form-group">
            <label for="telefono" class="control-label">Telefono</label>
            <input class="form-control input" required id="telefono" name="telefono" placeholder="Telefono" type="number" value="<?php echo set_value('telefono'); ?>" />
              <span class="text-danger"><?php echo form_error('Telefono'); ?></span>
         </div>  
           <div class="form-group">
            <label class="control-label">Calendario Tributario</label>
            <div class="selectContainer input">
            <select class="form-control" name="archivo" id="archivo">
              <option value="Noviembre">Calendario Tributario de Noviembre</option>
              <option value="Octubre">Calendario Tributario de Octubre</option>
              <option value="Septiembre">Calendario Tributario de Septiembre</option>
              <option value="Agosto">Calendario Tributario de Agosto</option>
              <option value="Julio">Calendario Tributario de Julio</option>
              <option value="Junio">Calendario Tributario de Junio</option>
              <option value="Mayo">Calendario Tributario de Mayo</option>
              <option value="Abril">Calendario Tributario de Abril</option>
              <option value="Marzo">Calendario Tributario de Marzo</option>
              <option value="Febrero">Calendario Tributario de Febrero</option>
              <option value="Enero">Calendario Tributario de Enero</option>
            </select>
          </div>
        </div>        
         <div class="form-group">
         <div class="col-lg-12 col-sm-12 text-center">
            <button type="submit" class="btn">Download</button>
         </div>
         </div>
    <?php echo form_close(); ?>
  </div>
</div>
<div align="center"class="div2"><img src="http://localhost/CodeIgniter/images/download.png" alt="Mountain View" style="width:300px;height:300px;margin-top:94px;
  margin-left:182px"></div>
<div id="footers">
    Powered by <a href="http://www.lumationservices.com">Lumation Services LLC.</a>
 </div>
 <style type="text/css">
 .colbox {
  margin-left: 0px;
  margin-right: 0px;
  }

 #footers {
  clear: both;
  width: 100%;
  height: 70px;
  background-color: #e2e0e0;
  text-align: center;
  font-size: 10px;
  overflow-y: hidden;
  padding: 20px 0px 0px 0px;
  box-shadow: 0 0 5px 1px #888888;
  margin-top: 300px;
	}
	.input{
  height: 30px;
  padding: 2px 5px;
  width: 625px;
  font-size: 12px;
  line-height: 1.5; /* Para que no ocupe toda la pagina el input. */
  border-radius: 3px;
	}	
	.colors{
		margin-top: 20px;
	}

	.div{
		margin-top: auto;
		margin-left: 100px;
		width: 600px;
		height: 500px;
		float: left;
	}
	.div2{
		margin-bottom: 100px;
		margin-top: auto;
		width: 400px;
		float: left;
	}

	#left{
		float: left;
	}

  .container{
    height: auto;
  }
     </style>