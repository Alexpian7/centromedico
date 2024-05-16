<ul id="sddm">
	<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Medicos</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarMedico">Agregar</a>
		<a href="index2.php?pag=listarMedicos">Consultar</a>
		<a href="index2.php?pag=listarmedicostabla">Actualizar</a>		
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Pacientes</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarPaciente">Agregar</a>
		<a href="index2.php?pag=listarPacientesTabla">Consultar</a>
		<a href="index2.php?pag=listarpacientes">Actualizar</a>	
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Citas</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarCita">Agregar</a>
		<a href="index2.php?pag=listarCitas">Consultar</a>
		<a href="index2.php?pag=atenderCita">Atender Cita</a>	
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Consultorios </a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a  href="index2.php?pag=insertarconsultorio">Agregar</a>
		<a href="index2.php?pag=listarConsultorio">Consultar</a>
        <a  href="index2.php?pag=listarconsultoriotabla">Actualizar</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Reportes </a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a target="_blank" href="http://localhost/CentroMedico/reporte.php">Medicos en PDF</a>
		<a target="_blank" href="http://localhost/CentroMedico/Vista/reporte_excel.php">Pacientes en Excel</a>
        <a target="_blank" href="http://localhost/CentroMedico/Vista/reporte_word.php">Citas en Word</a>
		</div>
	</li>
	
	<li><a href="salir.php" onmouseover="mopen('m6')" onmouseout="mclosetime()">Salir</a>
		
	</li>    
</ul>
<div>Usuario:   <?php echo $_SESSION['user']?> </div>
<div style="clear:both"></div>

<div style="clear:both"></div>