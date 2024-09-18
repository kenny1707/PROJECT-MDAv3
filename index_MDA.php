
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SUNARP</a>
        <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">MDA</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Cargo</a>
            </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a> -->
            <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> -->
            <!-- </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <!-- ************************************************** CONTENIDO *************************************************************************** -->
    <form class="form-horizontal" action="PDF_MDA.php" method="post">
    <div class="container text-center my-5">
        <!-- Título principal con estilo Bootstrap -->
        <h1 class="display-3 text-primary fw-bold">Modificación de Accesos</h1>
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
                                <select class="form-select" aria-label="Default select example" id="txt_unid" name="cmb_unid">
                                    <option selected>Seleccione una unidad</option>
                                    <option value="-">-</option>
                                    <option value="Abancay"></option>
                                    <option value="Urubamba">Urubamba</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label for="txt_area" class="col-md-4 control-label">Area:</label>
                                <select class="form-select" aria-label="Default select example" id="txt_area" name="cmb_area">
                                    <option selected>Seleccione una area</option>
                                    <option value="-">-</option>
                                    <option value="Abancay"></option>
                                </select>
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

        <br>
        <h2 class="text-start">Seleccionar los accesos solicitados:</h2>
        <br>
        <!--El formulario del lo que solicitara -->
        <div class="container-fluid ">
            <div class="row h-100">
                <!-- Primera columna (formulario de Sistemas Registrales) -->
                <div class="col-md-4 bg-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <!-- SISTEMA REGISTRALES -->
                        <h3 class="text-center mb-4">Sistemas Registrales</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-0" name="checkboxes[]" value="Consulta Registral">
                            <label class="form-check-label" for="checkboxes-0">Consulta Registral</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-1" name="checkboxes[]" value="Devoluciones">
                            <label class="form-check-label" for="checkboxes-1">Devoluciones</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-2" name="checkboxes[]" value="Libro Diario">
                            <label class="form-check-label" for="checkboxes-2">Libro Diario</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-3" name="checkboxes[]" value="Mesa de Partes">
                            <label class="form-check-label" for="checkboxes-3">Mesa de Partes</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-4" name="checkboxes[]" value="RPU Grafico">
                            <label class="form-check-label" for="checkboxes-4">RPU Grafico</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-5" name="checkboxes[]" value="SARP">
                            <label class="form-check-label" for="checkboxes-5">SARP</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-6" name="checkboxes[]" value="SCUNAC">
                            <label class="form-check-label" for="checkboxes-6">SCUNAC</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-7" name="checkboxes[]" value="SERP">
                            <label class="form-check-label" for="checkboxes-7">SERP</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-8" name="checkboxes[]" value="SGTD">
                            <label class="form-check-label" for="checkboxes-8">SGTD</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-9" name="checkboxes[]" value="SIGESAR">
                            <label class="form-check-label" for="checkboxes-9">SIGESAR</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-10" name="checkboxes[]" value="SIR">
                            <label class="form-check-label" for="checkboxes-10">SIR</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-11" name="checkboxes[]" value="SIR Minero">
                            <label class="form-check-label" for="checkboxes-11">SIR Minero</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-12" name="checkboxes[]" value="SIR RPV">
                            <label class="form-check-label" for="checkboxes-12">SIR RPV</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-13" name="checkboxes[]" value="SOU">
                            <label class="form-check-label" for="checkboxes-13">SOU</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-14" name="checkboxes[]" value="SPIJ">
                            <label class="form-check-label" for="checkboxes-14">SPIJ</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-15" name="checkboxes[]" value="SPR">
                            <label class="form-check-label" for="checkboxes-15">SPR</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-16" name="checkboxes[]" value="SPRN">
                            <label class="form-check-label" for="checkboxes-16">SPRN</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-17" name="checkboxes[]" value="SPRN - Mesa de Partes">
                            <label class="form-check-label" for="checkboxes-17">SPRN - Mesa de Partes</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-18" name="checkboxes[]" value="Toolgis">
                            <label class="form-check-label" for="checkboxes-18">Toolgis</label>
                        </div>
                    </div>
                </div>

                <!-- Segunda columna (SISTEMAS ADMINISTRATIVOS) -->
                <div class="col-md-4 bg-dark text-white d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Sistemas Administrativos</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-19" name="checkboxes[]" value="Alfresco">
                            <label class="form-check-label" for="checkboxes-19">Alfresco</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-20" name="checkboxes[]" value="AXION">
                            <label class="form-check-label" for="checkboxes-20">AXION</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-21" name="checkboxes[]" value="CheckSmart">
                            <label class="form-check-label" for="checkboxes-21">CheckSmart</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-22" name="checkboxes[]" value="Clarissa">
                            <label class="form-check-label" for="checkboxes-22">Clarissa</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-23" name="checkboxes[]" value="Legajo">
                            <label class="form-check-label" for="checkboxes-23">Legajo</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-24" name="checkboxes[]" value="MADAF SIAF">
                            <label class="form-check-label" for="checkboxes-24">MADAF SIAF</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-25" name="checkboxes[]" value="Melissa">
                            <label class="form-check-label" for="checkboxes-25">Melissa</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-26" name="checkboxes[]" value="Modulo Logistica">
                            <label class="form-check-label" for="checkboxes-26">Modulo Logistica</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-27" name="checkboxes[]" value="Registro de Visitas">
                            <label class="form-check-label" for="checkboxes-27">Registro de Visitas</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-28" name="checkboxes[]" value="SIAF">
                            <label class="form-check-label" for="checkboxes-28">SIAF</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-29" name="checkboxes[]" value="SICA">
                            <label class="form-check-label" for="checkboxes-29">SICA</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-30" name="checkboxes[]" value="SIGA">
                            <label class="form-check-label" for="checkboxes-30">SIGA</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-31" name="checkboxes[]" value="SISABA">
                            <label class="form-check-label" for="checkboxes-31">SISABA</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-32" name="checkboxes[]" value="SISTRAM">
                            <label class="form-check-label" for="checkboxes-32">SISTRAM</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-33" name="checkboxes[]" value="SUTESOR">
                            <label class="form-check-label" for="checkboxes-33">SUTESOR</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-34" name="checkboxes[]" value="Tesoreria">
                            <label class="form-check-label" for="checkboxes-34">Tesoreria</label>
                        </div>
                    </div>
                </div>
                <!-- Tercera columna (SISTEMAS WEB) -->
                <div class="col-md-4 bg-ligth d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Sistemas Web</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-35" name="checkboxes[]" value="Acceso a Internet" onclick="toggleDiv('myDiv','checkboxes-35')">
                            <label class="form-check-label" for="checkboxes-35">Acceso a Internet</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-36" name="checkboxes[]" value="Citrix">
                            <label class="form-check-label" for="checkboxes-36">Citrix</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-37" name="checkboxes[]" value="Correo Institucional">
                            <label class="form-check-label" for="checkboxes-37">Correo Institucional</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-38" name="checkboxes[]" value="Firma ONPE">
                            <label class="form-check-label" for="checkboxes-38">Firma ONPE</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-39" name="checkboxes[]" value="PSI">
                            <label class="form-check-label" for="checkboxes-39">PSI</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-40" name="checkboxes[]" value="Refirma PDF">
                            <label class="form-check-label" for="checkboxes-40">Refirma PDF</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-40" name="checkboxes[]" value="RENIEC">
                            <label class="form-check-label" for="checkboxes-40">RENIEC</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-40" name="checkboxes[]" value="SGD">
                            <label class="form-check-label" for="checkboxes-40">SGD</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-40" name="checkboxes[]" value="SGD - Mesa de Partes">
                            <label class="form-check-label" for="checkboxes-40">SGD - Mesa de Partes</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-40" name="checkboxes[]" value="SGIT">
                            <label class="form-check-label" for="checkboxes-40">SGIT</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-41" name="checkboxes[]" value="SPRL - Extranet">
                            <label class="form-check-label" for="checkboxes-41">SPRL - Extranet</label>
                        </div>
                        <div id="myDiv">
                            <hr>
                            <label for="txt_acceso_net" class="control-label fw-bold">Especificar los accesos de internet:</label>
                            <textarea class="form-control" id="txt_acceso_net" name="txt_acceso_net"rows="4" placeholder="Ingrese los link..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--El formulario del lo que solicitara -->
        <div class="container-fluid ">
            <div class="row h-100">
                <!-- Primera columna (formulario del Informatica) -->
                <div class="col-md-4 bg-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Informatica</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-42" name="checkboxes[]" value="Base de Datos">
                            <label class="form-check-label" for="checkboxes-42">Base de Datos</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-43" name="checkboxes[]" value="Discovery Consola">
                            <label class="form-check-label" for="checkboxes-43">Discovery Consola</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-44" name="checkboxes[]" value="FTP">
                            <label class="form-check-label" for="checkboxes-44">FTP</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-45" name="checkboxes[]" value="KeyFile">
                            <label class="form-check-label" for="checkboxes-45">KeyFile</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-46" name="checkboxes[]" value="WithSecure Consola">
                            <label class="form-check-label" for="checkboxes-46">WithSecure Consola</label>
                        </div>
                    </div>
                </div>
                <!-- Segunda columna (formulario del WithSecure) -->
                <div class="col-md-4 bg-dark text-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">WithSecure</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-47" name="checkboxes[]" value="Bloqueo USB/CD">
                            <label class="form-check-label" for="checkboxes-47">Bloqueo USB/CD</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-48" name="checkboxes[]" value="CD (Lectura)">
                            <label class="form-check-label" for="checkboxes-48">CD (Lectura)</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-49" name="checkboxes[]" value="CD (R / W)">
                            <label class="form-check-label" for="checkboxes-49">CD (R / W)</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-50" name="checkboxes[]" value="USB (Lectura)">
                            <label class="form-check-label" for="checkboxes-50">USB (Lectura)</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-51" name="checkboxes[]" value="USB (R / W)">
                            <label class="form-check-label" for="checkboxes-51">USB (R / W)</label>
                        </div>
                    </div>
                </div>
                <!-- Tercera columna (formulario de Otros Accesos) -->
                <div class="col-md-4 bg-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h3 class="text-center mb-4">Otros</h3>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-52" name="checkboxes[]" value="AnyDesk">
                            <label class="form-check-label" for="checkboxes-52">AnyDesk</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-53" name="checkboxes[]" value="Certificado Digital">
                            <label class="form-check-label" for="checkboxes-53">Certificado Digital</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-54" name="checkboxes[]" value="Softphone">
                            <label class="form-check-label" for="checkboxes-54">Softphone</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-55" name="checkboxes[]" value="Usuario Windows">
                            <label class="form-check-label" for="checkboxes-55">Usuario Windows</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-56" name="checkboxes[]" value="VPN Tunel">
                            <label class="form-check-label" for="checkboxes-56">VPN Tunel</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-57" name="checkboxes[]" value="VPN Web">
                            <label class="form-check-label" for="checkboxes-57">VPN Web</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <br>   
        <!--El formulario del lo que se le entregara -->
        <div class="container-fluid ">
            <div class="row h-100">
                <!-- Primera columna (formulario del Informatica) -->
                <div class="col-md-6 bg-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h2 class="text-start">Equipamento:</h2>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-58" name="checkboxes_Equip[]" value="Audifonos">
                            <label class="form-check-label" for="checkboxes-58">Audifonos</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-59" name="checkboxes_Equip[]" value="Camara">
                            <label class="form-check-label" for="checkboxes-59">Camara</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-60" name="checkboxes_Equip[]" value="Celular">
                            <label class="form-check-label" for="checkboxes-60">Celular</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-62" name="checkboxes_Equip[]" value="Disco Duro Externo">
                            <label class="form-check-label" for="checkboxes-61">Disco Duro Externo</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-63" name="checkboxes_Equip[]" value="Escaner">
                            <label class="form-check-label" for="checkboxes-63">Escaner</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-64" name="checkboxes_Equip[]" value="Estacion Grafica">
                            <label class="form-check-label" for="checkboxes-64">Estacion Grafica</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-65" name="checkboxes_Equip[]" value="Impresora">
                            <label class="form-check-label" for="checkboxes-65">Impresora</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-66" name="checkboxes_Equip[]" value="Lector Biometrico">
                            <label class="form-check-label" for="checkboxes-66">Lector Biometrico</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-67" name="checkboxes_Equip[]" value="Lector DNI">
                            <label class="form-check-label" for="checkboxes-67">Lector DNI</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-68" name="checkboxes_Equip[]" value="PC Escritorio">
                            <label class="form-check-label" for="checkboxes-68">PC Escritorio</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-69" name="checkboxes_Equip[]" value="PC Laptop">
                            <label class="form-check-label" for="checkboxes-69">PC Laptop</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-70" name="checkboxes_Equip[]" value="Plotter">
                            <label class="form-check-label" for="checkboxes-70">Plotter</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-71" name="checkboxes_Equip[]" value="Proyector">
                            <label class="form-check-label" for="checkboxes-71">Proyector</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-72" name="checkboxes_Equip[]" value="Refrendadora">
                            <label class="form-check-label" for="checkboxes-72">Refrendadora</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-73" name="checkboxes_Equip[]" value="Tablet">
                            <label class="form-check-label" for="checkboxes-73">Tablet</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-74" name="checkboxes_Equip[]" value="Teclado">
                            <label class="form-check-label" for="checkboxes-74">Teclado</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-75" name="checkboxes_Equip[]" value="Telefono IP">
                            <label class="form-check-label" for="checkboxes-75">Telefono IP</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-76" name="checkboxes_Equip[]" value="Televisor">
                            <label class="form-check-label" for="checkboxes-76">Televisor</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-77" name="checkboxes_Equip[]" value="Token">
                            <label class="form-check-label" for="checkboxes-77">Token</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-78" name="checkboxes_Equip[]" value="UPS">
                            <label class="form-check-label" for="checkboxes-78">UPS</label>
                        </div>
                    </div>
                </div>
                <!-- Segunda columna (formulario del WithSecure) -->
                <div class="col-md-6 bg-dark text-light d-flex align-items justify-content-center">
                    <div class="p-4 w-75">
                        <h2 class="text-start">Datos de la Autorización:</h2>
                        <hr>
                        <div>
                            <form>
                                <div class="d-flex align-items justify-content-center">
                                    <!-- Etiqueta izquierda -->
                                    <label class="form-check-label me-2">Jefe Inmediato</label>
                                    <!-- Checkbox en el medio -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="checkboxes-79" name="checkboxes_Autoriz" value="Datos Autorizacion" onclick="toggleDiv1('myDiv1','myDiv2','checkboxes-79')">
                                    </div>
                                    <!-- Etiqueta derecha -->
                                    <label class="form-check-label">Documento</label>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div id="myDiv1">
                            <form>
                                <div class="d-flex align-items-center mb-3">
                                    <label for="txt_DNI_jef" class="col-md-4 control-label">DNI:</label>
                                    <input type="text" class="form-control" id="txt_DNI_jef" name="txt_DNI_jef" placeholder="Ingresa el número de DNI">
                                </div>                         
                                <div class="d-flex align-items-center mb-3">
                                    <label for="txt_name_jef" class="col-md-4 control-label">Nombres:</label>
                                    <input type="text" class="form-control" id="txt_name_jef" name="txt_name_jef" placeholder="Ingresa tus nombres">
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <label for="txt_ape_pat_jef" class="col-md-4 control-label">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="txt_ape_pat_jef" name="txt_ape_pat_jef" placeholder="Ingresa tu apellido paterno">
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <label for="txt_ape_mat_jef" class="col-md-4 control-label">Apellido Materno:</label>
                                    <input type="text" class="form-control" id="txt_ape_mat_jef" name="txt_ape_mat_jef" placeholder="Ingresa tu apellido materno">
                                </div>
                                <!-- Lista de tipos de contrantos -->
                                <div class="d-flex align-items-center mb-3">
                                    <label for="txt_carg_jef" class="col-md-4 control-label">Cargo Laboral:</label>
                                    <select class="form-select" aria-label="Default select example" id="txt_carg_jef" name="cmb_carg_jef">
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
                                <div>
                                    <button type="button" class="btn btn-primary">Buscar</button>
                                </div>
                            </form>  
                        </div>
                        <div id="myDiv2">
                            <p class="text-start">Se tiene que agregar el número de documento (RESOLUCION, MEMORANDUM, etc): </p>
                            <label for="txt_document" class="col-md control-label-mb-3 mb-3 fw-bold">Número de Documento:</label>
                            <input type="text" class="form-control" id="txt_document" name="txt_document" placeholder="Ingresa número de documento">                        
                        </div>                      
                    </div>
                </div>                
            </div>
        </div>   
        <br>
        <!-- <div>
            <button type="submit" class="btn btn-primary"value="Generar PDF" name="submit_MDA">GENERAR PDF</button>
        </div>  -->
        <center>
            <button type="submit" class="btn btn-primary" value="GENERAR" name="submit" >Generar Formato</button> 
        </center>
        <br>                          
    </div>
    </form>

    <!-- CODIGO DE JAVASCRIPT -->
    <script src="http://172.20.106.186:8088/fsav3/js/bootstrap.min.js"></script>
    <script>
        function toggleDiv(divId,checkBoxId) {
            var checkBox = document.getElementById(checkBoxId);
            var div = document.getElementById(divId);
            // Si el checkbox está seleccionado, muestra el div, de lo contrario lo oculta
            if (checkBox.checked) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }

        function toggleDiv1(divId1,divId2,checkBoxId) {
            var checkBox = document.getElementById(checkBoxId);
            var div1 = document.getElementById(divId1);
            var div2 = document.getElementById(divId2);
            // Si el checkbox está seleccionado, muestra el div, de lo contrario lo oculta
            if (checkBox.checked) {
                div2.style.display = "block";
                div1.style.display = "none";
            } else {
                div1.style.display = "block";
                div2.style.display = "none";
            }
        }

        window.onload = function() {
            // Asegura que el div esté oculto al cargar o recargar la página
            document.getElementById("myDiv").style.display = "none";
            document.getElementById("myDiv2").style.display = "none";
        };
    </script>
</body>
</html>
    

