
<?php
    header('Content-Type: 1| +/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://172.20.106.186:8088/fsav3/css/bootstrap.min.css">
    <title>Modificacion de Accesos</title>
    
</head>
<body>
    <div class="container text-center my-5">
        <!-- Título principal con estilo Bootstrap -->
        <h1 class="display-3 text-primary">Modificación de Accesos</h1>
        <!-- <p class="lead">Un subtítulo descriptivo debajo del título principal.</p> -->
        <br>
        <h2 class="text-start">Llenar los datos:</h2>
        <div class="container mt-4">
            <div class="d-flex justify-content-end">
                <input type="text" class="form-control me-3" id="txt_DNI" name="txt_DNI" placeholder="Ingresa algun dato del usuario">
                <button type="button" class="btn btn-primary">Buscar</button>
            </div>
        </div>
        <br>
        <!--El formulario de datos-->
        <div class="container-fluid ">
            <div class="row h-100">
                <!-- Primera columna (formulario del usuario) -->
                <div class="col-md-6 bg-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Datos del Usuario</h3>
                        <form>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_DNI" class="col-md-4 control-label">DNI:</label>
                                <input type="text" class="form-control" id="txt_DNI" name="txt_DNI" placeholder="Ingresa el número de DNI">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_name" class="col-md-4 control-label">Nombres:</label>
                                <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Ingresa tus nombres">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_ape_pat" class="col-md-4 control-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="txt_ape_pat" name="txt_ape_pat" placeholder="Ingresa tu apellido paterno">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_ape_mat" class="col-md-4 control-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="txt_ape_mat" name="txt_ape_mat" placeholder="Ingresa tu apellido materno">
                            </div>
                            <!-- Lista de tipos de contrantos -->
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_cond_lab" class="col-md-4 control-label">Condicion Laboral:</label>
                                <select class="form-select" aria-label="Default select example" id="txt_cond_lab" name="cmb_cond_lab">
                                    <option selected>Seleccione el tipo de contrato</option>
                                    <option value="-">-</option>
                                    <option value="CAP">CAP</option>
                                    <option value="CAP Suplencia">CAP Suplencia</option>
                                    <option value="CAS">CAS</option>
                                    <option value="CAS Suplencia">CAS Suplencia</option>
                                    <option value="Externo">Externo</option>
                                    <option value="Practicante">Practicante</option>
                                </select>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <!-- Segunda columna (Datos de la Oficina) -->
                <div class="col-md-6 bg-dark text-white d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Datos de la Oficina</h3>
                        <form>
                        <div class="d-flex align-items-center mb-3">
                                <label for="txt_ofic" class="col-md-4 control-label">Oficina:</label>
                                <select class="form-select" aria-label="Default select example" id="txt_ofic" name="cmb_ofic">
                                    <option selected>Seleccione una oficina</option>
                                    <option value="-">-</option>
                                    <option value="Abancay">Abancay</option>
                                    <option value="Andahuaylas">Andahuaylas</option>
                                    <option value="Anta">Anta</option>
                                    <option value="Calca">Calca</option>
                                    <option value="Centro Historico">Centro Historico</option>
                                    <option value="Challhuahuacho">Challhuahuacho</option>
                                    <option value="Chinchero">Chinchero</option>
                                    <option value="Chumbivilcas">Chumbivilcas</option>
                                    <option value="Cusco">Cusco</option>
                                    <option value="Cusco RPV">Cusco RPV</option>
                                    <option value="Espinar">Espinar</option>
                                    <option value="Madre de Dios">Madre de Dios</option>
                                    <option value="Quillabamba">Quillabamba</option>
                                    <option value="San Jeronimo">San Jeronimo</option>
                                    <option value="San Sebastian">San Sebastian</option>
                                    <option value="Santiago">Santiago</option>
                                    <option value="Sicuani">Sicuani</option>
                                    <option value="Tambopata">Tambopata</option>
                                    <option value="Urcos">Urcos</option>
                                    <option value="Uripa">Uripa</option>
                                    <option value="Urubamba">Urubamba</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_unid" class="col-md-4 control-label">Unidad:</label>
                                <input type="text" class="form-control" id="txt_unid" name="cmb_unid" placeholder="Ingresa la unidad">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_unid" class="col-md-4 control-label">Area:</label>
                                
                            </div>
                            <!-- Lista de cargos que hay en la SUNARP -->
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_carg" class="col-md-4 control-label">Cargo:</label>
                                <select class="form-select" aria-label="Default select example" id="txt_carg" name="cmb_carg">
                                    <option selected>Seleccione el cargo ocupado</option>
                                    <option value="-">-</option>
                                    <option value="Abogado Certificador">Abogado Certificador</option>
                                    <option value="Abogado Registral">Abogado Registral</option>
                                    <option value="Administrador de la base grafica registral">Administrador de la base grafica registral</option>
                                    <option value="Analista de desarrollo organizacional y capacitaciones">Analista de desarrollo organizacional y capacitaciones</option>
                                    <option value="Analista de almacen y control patrimonial">Analista de almacen y control patrimonial</option>
                                    <option value="Analista de archivo registral">Analista de archivo registral</option>
                                    <option value="Analista de asesoria juridica">Analista de asesoria juridica</option>
                                    <option value="Analista de base de datos">Analista de base de datos</option>
                                    <option value="Analista de catastro">Analista de catastro</option>
                                    <option value="Analista de compras y contrataciones">Analista de compras y contrataciones</option>
                                    <option value="Analista de contabilidad">Analista de contabilidad</option>
                                    <option value="Analista de control de producción">Analista de control de producción</option>
                                    <option value="Analista de control institucional">Analista de control institucional</option>
                                    <option value="Analista de desarrollo organizacional">Analista de desarrollo organizacional</option>
                                    <option value="Analista de ejecución contractual">Analista de ejecución contractual</option>
                                    <option value="Analista de gestion del empleo y de las compensaciones">Analista de gestion del empleo y de las compensaciones</option>
                                    <option value="Analista de marketing">Analista de marketing</option>
                                    <option value="Analista de planeamiento">Analista de planeamiento</option>
                                    <option value="Analista de planeamiento y presupuesto">Analista de planeamiento y presupuesto</option>
                                    <option value="Analista de publicidad">Analista de publicidad</option>
                                    <option value="Analista de redes">Analista de redes</option>
                                    <option value="Analista de sistemas">Analista de sistemas</option>
                                    <option value="Analista de tesoreria">Analista de tesoreria</option>
                                    <option value="Asistente social">Asistente social</option>
                                    <option value="Asistente administrativo">Asistente administrativo</option>
                                    <option value="Asistente de control patrimonial">Asistente de control patrimonial</option>
                                    <option value="Asistente de oficina">Asistente de oficina</option>
                                    <option value="Asistente registral">Asistente registral</option>
                                    <option value="Brigadista de inclusion social">Brigadista de inclusion social</option>
                                    <option value="Cajero">Cajero</option>
                                    <option value="Contador">Contador</option>
                                    <option value="Coordinador">Coordinador</option>
                                    <option value="Coordinador de oficinas registrales">Coordinador de oficinas registrales</option>
                                    <option value="Coordinador responsable de oficina de catastro">Coordinador responsable de oficina de catastro</option>
                                    <option value="Digitador">Digitador</option>
                                    <option value="Digitador de libro diario">Digitador de libro diario</option>
                                    <option value="Especialista catastral">Especialista catastral</option>
                                    <option value="Especialista en Abastecimientos">Especialista en Abastecimientos</option>
                                    <option value="Especialista en base de datos">Especialista en base de datos</option>
                                    <option value="Especialista en catastro">Especialista en catastro</option>
                                    <option value="Especialista en control interno">Especialista en control interno</option>
                                    <option value="Especialista en personal">Especialista en personal</option>
                                    <option value="Especialista en seguridad institucional">Especialista en seguridad institucional</option>
                                    <option value="Especialista en tesoreria">Especialista en tesoreria</option>
                                    <option value="Especialista legal">Especialista legal</option>
                                    <option value="Especialista registral">Especialista registral</option>
                                    <option value="Jefe de area">Jefe de area</option>
                                    <option value="Jefe de unidad">Jefe de unidad</option>
                                    <option value="Jefe zonal">Jefe zonal</option>
                                    <option value="Operador de mesa de partes">Operador de mesa de partes</option>
                                    <option value="Operador de reclamos">Operador de reclamos</option>
                                    <option value="Operador de sistemas">Operador de sistemas</option>
                                    <option value="Orientador">Orientador</option>
                                    <option value="Orientador movil">Orientador movil</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Practicante pre profesional">Practicante pre profesional</option>
                                    <option value="Practicante profesional">Practicante profesional</option>
                                    <option value="Registrador publico">Registrador publico</option>
                                    <option value="Secretaria">Secretaria</option>
                                    <option value="Secretario tecnico">Secretario tecnico</option>
                                    <option value="Tecnico administrativo">Tecnico administrativo</option>
                                    <option value="Tecnico en archivo">Tecnico en archivo</option>
                                    <option value="Tecnico en catastro">Tecnico en catastro</option>
                                    <option value="Tecnico en comunicaciones">Tecnico en comunicaciones</option>
                                    <option value="Tecnico en conduccion">Tecnico en conduccion</option>
                                    <option value="Tecnico en mantenimiento">Tecnico en mantenimiento</option>
                                    <option value="Tecnico en patrimonio">Tecnico en patrimonio</option>
                                    <option value="Tecnico en Sistemas">Tecnico en Sistemas</option>
                                    <option value="Tesorero">Tesorero</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_unid" class="col-md-4 control-label">Direccion IP:</label>
                                <input type="text" class="form-control" id="txt_unid" name="cmb_unid" placeholder="Ingresa la direccion IPv4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://172.20.106.186:8088/fsav3/js/bootstrap.min.js"></script>
</body>
</html>
    

