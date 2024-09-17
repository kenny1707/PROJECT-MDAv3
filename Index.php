
<?php
    header('Content-Type: 1| +/html; charset=ISO-8859-1');
?>
<!doctype html>
<html>
<head>
  <?php 
 // include("bd_conexion.php");

  //$result_unid = mysqli_query($conexion,"SELECT * FROM t_unid"); 
//header("Content-Type: text/html;charset=utf-8");
?>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <title>FSA</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
    <script src="js/jquery.min.js"></script>
	
</head>
<body>

<h1 align="center">SOLICITUD DE ACCESOS</h1>
<br>
<div id="contenedor">
  <style>
      .container {
        width: auto;
        max-width: 1600px;
              }
      .form-group {
        margin-bottom: 8px;
      }
      #feedbackForm {
        font-size: 12px;
      }
      #contenedor{
      text-align: left;
      width: 1200px;
      margin: auto;}

      #lateral{
      width: 700px;  /*Este será el ancho que tendrá tu columna*/
      background-color: #FFFFFF;  /*Aquí pon el color del fondo que quieras para este lateral*/
      float:left; /*Aqui determinas de lado quieres quede esta "columna" */
      border:#000000 0px solid; 
      }

      #principal{
      margin-left:710px; /*Este margen hace que no se encime el contenido en tu menúlateral, es     importante que pongas un pocos pixeles más que el ancho  de tu columna lateral*/
      background-color: #FBFCFC;
      border:#000000 0px solid; /*ponemos un dorde para que se vea bonito*/
      }
  </style>
  <!-- <div id="lateral">
        <div class="form-group">
          <label class="col-md-4 control-label" for="dni">Consultar DNI por RENIEC:</label>  
          <div class="col-md-4">
             <form method="post">
              <input id="dni" name="dni" type="text" placeholder="DNI" class="form-control input-md">
              <button id="botoncito" class="botoncito">Consultar</button>
            </form>
          </div>
        </div>
  </div> -->
  <form class="form-horizontal" action="formPDF2.php" method="post">
    <div id="lateral">
      <p>* Ingresar los datos del usuario</p>
      <!--  <form class="form-horizontal">  -->
        <fieldset>

        <!-- Form Name -->
        <legend>1. De la Solicitud</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_nomb">DNI:</label>  
          <div class="col-md-4">
          <input id="txt_DNI" name="txt_DNI"  placeholder="DNI" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_nomb">Nombres:</label>  
          <div class="col-md-4">
          <input id="txt_nomb" name="txt_nomb" type="text" placeholder="Ingrese sus Nombres" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_pat">Apellido Paterno:</label>  
          <div class="col-md-4">
          <input id="txt_ape_pat" name="txt_ape_pat" type="text" placeholder="Ingrese su Apellido Paterno" class="form-control input-md">
            
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_mat">Apellido Materno:</label>  
          <div class="col-md-4">
          <input id="txt_ape_mat" name="txt_ape_mat" type="text" placeholder="Ingres su Apellido Materno" class="form-control input-md">
            
          </div>
        </div>

        <!-- <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_mat">Correo Eletronico:</label>  
          <div class="col-md-4">
          <input id="txt_ape_mat" name="txt_mail" type="text" placeholder="Ingrese su Correo" class="form-control input-md">
          </div>
        </div> -->

        <!-- <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_mat">Correo Personal:</label>  
          <div class="col-md-4">
          <input id="txt_mail_personal" name="txt_mail_personal" type="text" placeholder="Ingrese su Correo Personal" class="form-control input-md">
          </div>
        </div> -->

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_ofic">Oficina:</label>
          <div class="col-md-4">
            <select id="cmb_ofic" name="cmb_ofic" class="form-control">
              <option value="-">-</option>
              <option value="Cusco">Cusco</option>
              <option value="Cusco RPV">Cusco RPV</option>
              <option value="Urubamba">Urubamba</option>
              <option value="Abancay">Abancay</option>
              <option value="Madre de Dios">Madre de Dios</option>
              <option value="Quillabamba">Quillabamba</option>
              <option value="Sicuani">Sicuani</option>
              <option value="Espinar">Espinar</option>
              <option value="Andahuaylas">Andahuaylas</option>
              <option value="Poder Judicial">Poder Judicial</option>
              <option value="San Jeronimo">San Jeronimo</option>
              <option value="San Sebastian">San Sebastian</option>
              <option value="Calca">Calca</option>
              <option value="Anta">Anta</option>
              <option value="urcos">Urcos</option>
              <option value="Chumbivilcas">Chumbivilcas</option>
              <option value="Uripa">Uripa</option>
              <option value="Challhuahuacho">Challhuahuacho</option>
              <option value="Santiago">Santiago</option>
              <option value="Tambopata">Tambopata</option>
              <option value="Chincheros">Chincheros</option>
            </select>
          </div>
        </div>

        <!-- 
        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_unid">Unidad:</label>
          <div class="col-md-4">
            <select id="cmb_unid" name="cmb_unid" class="form-control">
              <option value=""></option>
              <?php
                //while($lista_unid=mysqli_fetch_assoc($result_unid))
                 // echo "<option  value='".$lista_unid["id_unid"]."'>".$lista_unid["desc_uni"]."</option>";
              ?>
            </select>
          </div>
        </div>
    -->
  
    

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_unid">Unidad:</label>
          <div class="col-md-4">
            <select id="cmb_unid" name="cmb_unid" class="form-control">
              <option value="-">-</option>
              <option value="UREG">U. Registral</option>
              <option value="UADM">U. Administración</option>
              <option value="UPP">U. Plan. y Presu</option>
              <option value="UAJ">U. Asesoria Juridica</option>
              <option value="OCI">OCI</option>
              <option value="UTI">UTI</option>
              <option value="Imagen">Imagen</option>


            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_area">Area:</label>
          <div class="col-md-4">
            <select id="cmb_area" name="cmb_area" class="form-control">
              <option value="-">-</option>
              <option value="Abastecimiento">Abastecimiento</option>
              <option value="Archivo">Archivo</option>
              <option value="Cajas">Cajas</option>
              <option value="Mesa de Partes">Mesa de Partes</option>
              <option value="Publicidad">Publicidad</option>
              <option value="Registral">Registral</option>
              <option value="Catastro">Catastro</option>
              <option value="Diario">Diario</option>
              <option value="Unica">Unica</option>
              <option value="Asesoria Juridica">Asesoria Juridica</option>
              <option value="UTI">UTI</option>
              <option value="Imagen">Imagen</option>
              <option value="Jefatura">Jefatura Zonal</option>
              <option value="UPPM">UPPM</option>
              <option value="Secretaria Tecnica">Secretaria Tecnica</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_carg">Cargo:</label>
          <div class="col-md-4">
            <select id="cmb_carg" name="cmb_carg" class="form-control">
              <option value="-">-</option>
              <option value="Practicante">Practicante</option>
              <option value="Registrador">Registrador</option>
              <option value="Asistente Registral">Asistente Registral</option>
              <option value="Analista Catastral">Analista Catastral</option>
              <option value="Analista de UPPM">Analista de Planeamiento y Presupuesto</option>
              <option value="Coord. Catastro">Coord. Catastro</option>
              <option value="Analista de Sistemas">Analista de Sistemas</option>
              <option value="Analista de Redes">Analista de Redes</option>
              <option value="Abogado Certificador">Abogado Certificador</option>
              <option value="Cajero">Cajero</option>
              <option value="Cajero">Orientador</option>
              <option value="Digitador">Digitador</option>
              <option value="Operador Mesa de Partes">Operador Mesa de Partes</option>
              <option value="Personal Externo">Personal Externo</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_IP">Dirección IP:</label>  
          <div class="col-md-4">
          <input id="txt_IP" name="txt_IP" type="text" placeholder="Ingrese el IP" class="form-control input-md">
            
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_sust">Sustento:</label>
          <div class="col-md-7">                     
            <textarea class="form-control" id="txt_sust" name="txt_sust"></textarea>
          </div>
        </div>

        </fieldset>
        <br>
        <br>
        <br>
        <p>* Ingresar el nombre del Jefe Inmediato o de Unidad</p>
        <fieldset>

        <!-- Form Name -->
        <legend>2. De la autorización: 
        <input type="radio" onclick="javascript:yesnoCheck();" id="JEFE" name="rdb_aut" value="JEFE" checked>
        <label for="JEFE">Jefe</label>
        <input type="radio" onclick="javascript:yesnoCheck();" id="DOCU" name="rdb_aut" value="DOCU">
        <label for="DOCU">Documento</label><br><br></legend>
        
        <!-- Text input-->
        <div id="ifYes" style="visibility:visible;">
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_jefe">Jefe de la Unidad/Jefe Inmediato</label>  
          <div class="col-md-6">
          <input id="txt_jefe" name="txt_jefe" type="text" placeholder="Ingrese el nombre del Jefe" class="form-control input-md">
          </div>
        </div>
        </div>

        <div id="ifNO" style="visibility:hidden;">
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_doc">Documento</label>  
          <div class="col-md-6">
          <input id="txt_docu" name="txt_docu" type="text" placeholder="Documento que sustenta la autorización" class="form-control input-md">
          </div>
        </div>
        </div>

        </fieldset>
        
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="principal">
      <p>*Seleccione los sistemas</p>

          <fieldset>

          <!-- Form Name -->
          <legend>3. Sistemas</legend>

          <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Sistemas Registrales</label>
            <div class="col-md-6">
            <div class="checkbox">
              <label for="checkboxes-0">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-0" value="Usuario Windows">
                Usuario Windows
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-1">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-1" value="Consulta Registral">
                Consulta Registral
              </label>
            </div>
            <!-- <div class="checkbox">
              <label for="checkboxes-1">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-1" value="Indice Verificadores">
                Indice Verificadores
              </label>
            </div> -->
            <div class="checkbox">
              <label for="checkboxes-2">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-2" value="Libro Diario">
                Libro Diario
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-3">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-3" value="Mesa de Partes">
                Mesa de Partes
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-4">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-4" value="RPU Gráfico">
                RPU Gráfico
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-5">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-5" value="SARP">
                SARP
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-6">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-6" value="SCUNAC">
                SCUNAC
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-7">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-7" value="SEPR">
                SEPR
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-8">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-8" value="SIGESAR">
                SIGESAR
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-9">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-9" value="SIR">
                SIR
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-10">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-10" value="SIR Minero">
                SIR Minero
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-11">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-11" value="SIR RPV">
                SIR RPV
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-12">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-12" value="SGTD">
                SGTD
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-13">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-13" value="SOU">
                SOU
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-14">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-14" value="SPIJ">
                SPIJ
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-15">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-15" value="SPR">
                SPR
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-16">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-16" value="SPRN">
                SPRN
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-17">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-17" value="SPRN(MESA DE PARTES)">
                SPRN(MESA DE PARTES)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-18">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-18" value="TOOLGIS">
                TOOLGIS
              </label>
            </div>

            </div>
          </div>

          <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Sistemas Web</label>
            <div class="col-md-5">
            <div class="checkbox">
              <label for="checkboxes-19">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-19" value="Citrix">
                Citrix
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-20">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="Correo Institucional">
                Correo Institucional
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-21">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="PSI">
                PSI
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-22">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-22" value="RENIEC">
                RENIEC
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-23">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-23" value="SGD">
                SGD
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-24">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-24" value="SGD(MESA DE PARTES)">
                SGD(MESA DE PARTES)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-25">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-25" value="SGIT">
                SGIT
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-26">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-26" value="SPRL - Extranet">
                SPRL - Extranet
              </label>
            </div>
	    
            </div>
          </div>

          <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Sistemas Administrativos</label>
            <div class="col-md-4">
            <div class="checkbox">
              <label for="checkboxes-27">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-27" value="AXIOM">
                AXIOM
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-28">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-28" value="Clarissa">
                Clarissa
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-29">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-29" value="CheckSmart">
                CheckSmart
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-30">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-30" value="Devoluciones">
                Devoluciones
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-31">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-31" value="Firma ONPE">
                Firma ONPE
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-32">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-32" value="MADAF SIAF">
                MADAF SIAF
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-33">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-33" value="Melissa">
                Melissa
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-34">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-34" value="Modulo Logistica">
                Modulo Logistica
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-35">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-35" value="LEGAJO">
                LEGAJO
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-36">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-36" value="ReFirma PDF">
                ReFirma PDF
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-37">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-37" value="SIAF">
                SIAF
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-38">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-38" value="SICA">
                SICA
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-39">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-39" value="SIGA">
                SIGA
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-40">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-40" value="SISABA">
                SISABA
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-41">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-41" value="SISTRAM">
                SISTRAM
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-42">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-42" value="SUTESOR">
                SUTESOR
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-43">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-43" value="TESORERIA">
                TESORERIA
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-44">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-44" value="Registro de Visitas">
                Registro de Visitas
              </label>
            </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Informática/Otros</label>
            <div class="col-md-4">
            <div class="checkbox">
              <label for="checkboxes-45">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-45" value="AnyDesk">
                AnyDesk
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-46">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-46" value="Base de Datos">
                Base de Datos
              </label>
            </div>

            <div class="checkbox">
              <label for="checkboxes-47">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-47" value="KeyFile">
                KeyFile
              </label>
            </div>

            <div class="checkbox">
              <label for="checkboxes-48">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-48" value="VPN">
                VPN
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-49">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-49" value="FTP">
                FTP
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-50">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-50" value="Certificado Digital">
                Certificado Digital
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-51">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-51" value="Discovery">
                Discovery
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-52">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-52" value="Telefono IP">
                Telefono IP
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-53">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-53" value="SoftPhone">
                SoftPhone
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-54">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-54" value="Acceso a Internet">
                Acceso a Internet
              </label>
            </div>

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Antivirus WithSecure</label>
            <div class="col-md-4">
              <div class="checkbox">
              <label for="checkboxes-54">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-54" value="Bloqueo USB/CD">
                Bloqueo USB/CD
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-55">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-55" value="USB (R / W)">
                USB (R / W)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-56">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-56" value="USB (Lectura)">
                USB (Lectura)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-57">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-57" value="CD (R / W)">
                CD (R / W)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-58">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-58" value="CD (Lectura)">
                CD (Lectura)
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-59">
                <input type="checkbox" name="checkboxes[]" id="checkboxes-59" value="Consola WithSecure (Read)">
                Lectura Consola
              </label>
            </div>
          </div>

          </fieldset>
    </div>
    <!-- Button -->
    <center>
        <button type="submit" class="btn btn-primary" value="GENERAR" name="submit">Generar Formato</button> 

        <!-- <button type="submit" class="btn btn-primary" value="CARGO" name="Cargo">Generar Cargo</button> -->
    </center>

    
       <!--
    <div class="form-group">
      <label class="col-md-4 control-label" for="btn_gene"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-primary" type="submit">Generar Formato</button>
        </div>
    </div>
     -->
  </form>
</div>

<script>
$(function(){
  $('#botoncito').on('click', function(){
    var dni = $('#dni').val();
    var url = 'consulta_reniec.php';
    $.ajax({
    type:'POST',
    url:url,
    data:'dni='+dni,
    success: function(datos_dni){
      var datos = eval(datos_dni);
        $('#mostrar_dni').text(datos[0]);
        $('#txt_nomb').val(datos[1]); 
        $('#txt_ape_pat').val(datos[2]);
        $('#txt_ape_mat').val(datos[3]);
        $('#txt_DNI').val(datos[0]);
    }
  });
  return false;
  });
});

function yesnoCheck() {
    if (document.getElementById('JEFE').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
        document.getElementById('ifNO').style.visibility = 'hidden';
    }
    else {
      document.getElementById('ifYes').style.visibility = 'hidden';
      document.getElementById('ifNO').style.visibility = 'visible';
    }

}

</script>

</body>
</html>