<?php header('Content-Type: 1| +/html; charset=ISO-8859-1'); ?>
<!doctype html>
<html>
<head>
  <?php 
    // include("bd_conexion.php");
    //$result_unid = mysqli_query($conexion,"SELECT * FROM t_unid"); 
    //header("Content-Type: text/html;charset=utf-8");
  ?>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>FSA - CARGO</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
  <script src="js/jquery.min.js"></script>
</head>

<!-- ESTRUCTURA DE LA PAGINA DE CARGO DE ACCESOS -->

<body class = "container">
  <div class = "container">
    <h1 align="center" ><b>CARGO DE ACCESOS</b></h1>
    <hr>
  </div>
  <div id="contenedor" class = "container">
    <style>
      .container {
        width: auto;
        max-width: 100%;
              }
      .form-group {
        margin-bottom: 8px;
      }
      #feedbackForm {
        font-size: 12px;
      }
      #contenedor{
      text-align: left;
      width: 1300px;
      margin: auto;}

      #lateral{
      width: 500px;  /*Este ser� el ancho que tendr� tu columna*/
      background-color: #FFFFFF;  /*Aqu� pon el color del fondo que quieras para este lateral*/
      float:left; /*Aqui determinas de lado quieres quede esta "columna" */
      border:#000000 0px solid; 
      }

      #principal{
      margin-left:500px; /*Este margen hace que no se encime el contenido en tu men�lateral, es     importante que pongas un pocos pixeles m�s que el ancho  de tu columna lateral*/
      background-color: #FBFCFC;
      border:#000000 0px solid; /*ponemos un dorde para que se vea bonito*/
      }
  </style>
  <form class="form-horizontal" action="formPDFcargo.php" method="post">
    
    <!-- CONTENEDOR DE LA IZQUIERDA (DATOS DEL USUARIO) -->
    
    <div id="lateral" class="row">
      <h3 align = "left"><b>Ingresar los datos del usuario</b></h3>
      <br>
      <!--  <form class="form-horizontal">  -->
        <fieldset>

        <!-- Form Name -->
        <!-- <legend>1. De la Solicitud</legend> -->
     
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_nomb">Nombres:</label>  
          <div class="col-md-6">
          <input id="txt_nomb" name="txt_nomb" type="text" placeholder="Ingrese sus Nombres" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_pat">Apellido Paterno:</label>  
          <div class="col-md-6">
          <input id="txt_ape_pat" name="txt_ape_pat" type="text" placeholder="Ingrese su Apellido Paterno" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_ape_mat">Apellido Materno:</label>  
          <div class="col-md-6">
          <input id="txt_ape_mat" name="txt_ape_mat" type="text" placeholder="Ingres su Apellido Materno" class="form-control input-md">
            
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_IP">DNI:</label>  
          <div class="col-md-6">
          <input id="txt_IP" name="txt_DNI" type="text" placeholder="Ingrese DNI" class="form-control input-md">  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="txt_IP">Dirección IP:</label>  
          <div class="col-md-6">
          <input id="txt_IP" name="txt_IP" type="text" placeholder="Ingrese el IP" class="form-control input-md">  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_ofi">Oficina:</label>
          <div class="col-md-6">
            <select id="cmb_ofi" name="cmb_ofi" class="form-control">
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
              <option value="San Jeronimo">San Sebastian</option>
              <option value="Calca">Calca</option>
              <option value="Anta">Anta</option>
              <option value="urcos">Urcos</option>
              <option value="Chumbivilcas">Chumbivilcas</option>
              <option value="Uripa">Uripa</option>
              <option value="Challhuahuacho">Challhuahuacho</option>
              <option value="Santiago">Santiago</option>
              <option value="Tambopata">Tambopata</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="cmb_carg">Cargo:</label>
          <div class="col-md-6">
            <select id="cmb_carg" name="cmb_carg" class="form-control">
              <option value="-">-</option>
              <option value="CAS">CAS</option>
              <option value="CAP">CAP</option>
              <option value="Practicante">PRACTICANTE</option>
              <option value="Externo">EXTERNO</option>
            </select>
          </div>
        </div>

        <!-- <div class="form-group">
          <label class="col-md-4 control-label" for="txt_IP">Correo:</label>  
          <div class="col-md-6">
          <input id="txt_correo" name="txt_correo" type="text" placeholder="Ingrese el correo" class="form-control input-md">
            
          </div>
        </div>     -->

    </div>

    <!-- CONTENEDOR DE LA DERECHA (SISTEMAS PARA REGISTRAR) -->

    <div id="principal" class = "row">
      <h3 align = "left"><b>Seleccione los sistemas</b></h3>

          <!-- <fieldset> -->

          <!-- Form Name -->
          <!-- <legend>2. Sistemas</legend> -->

          <!-- Multiple Checkboxes -->
          <div class="form-group-md">
            <div>
              <label class="col-md control-label" for="checkboxes">Sistemas Registrales</label>
            </div>
            <div class = "align-items: center">
              <table width = "700">
                <tr>
                  <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="Usuario Windows">
                        Usuario Windows 
                      </label>
                    </div>
                  </td>
                  <td class = "col-md-8">
                    <input id="txt_user_ad" name="txt_user_ad" type="text"class="form-control input-md">                
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox">
                      <label for="checkboxes-0">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-0" value="Consulta Registral">
                        Consulta Registral
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_consulta" name="txt_user_consulta" type="text"class="form-control input-md">
                </td>
              </tr>
              <!-- ya no esta operativo -->
              <!-- <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-1">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-1" value="Indice Verificadores">
                        Indice Verificadores
                      </label>
                    </div>
                </td>
                <td>
                    <input id="txt_user_SIV" name="txt_user_SIV" type="text"class="form-control input-md">
                </td>
              </tr> -->
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-2">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-2" value="Libro Diario">
                        Libro Diario
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_libro" name="txt_user_libro" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-3">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-3" value="Mesa de Partes">
                        Mesa de Partes
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_mepa" name="txt_user_mepa" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-4">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-4" value="RPU Grafico">
                        RPU Grafico
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_rpu" name="txt_user_rpu" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-4">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-4" value="SARP">
                        SARP
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sarp" name="txt_user_sarp" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-5">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-5" value="SCUNAC">
                        SCUNAC
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_scunac" name="txt_user_scunac" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-6">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-6" value="SEPR">
                        SEPR
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sepr" name="txt_user_sepr" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-7">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-7" value="SIGESAR">
                        SIGESAR
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sigesar" name="txt_user_sigesar" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-8">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-8" value="SIR">
                        SIR
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sir" name="txt_user_sir" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-9">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-9" value="SIR Minero">
                        SIR Minero
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_minero" name="txt_user_minero" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-10">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-10" value="SIR RPV">
                        SIR RPV
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_rpv" name="txt_user_rpv" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-19">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-19" value="SGTD">
                        SGTD
                      </label>
                    </div>
                </td>
                <td class = "col-md-8"> 
                    <input id="txt_user_sgtd" name="txt_user_sgtd" type="text"class="form-control input-md">  
                </td>
                </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-11">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-11" value="SOU">
                        SOU
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sou" name="txt_user_sou" type="text" class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-12">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-12" value="SPIJ">
                        SPIJ
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_spij" name="txt_user_spij" type="text" class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-13">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-13" value="SPR">
                        SPR
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_spr" name="txt_user_spr" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-14">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-14" value="SPRN">
                        SPRN
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sprn" name="txt_user_sprn" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-14">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-14" value="SPRN(MESA DE PARTES)">
                        SPRN(MESA DE PARTES)
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sprnMP" name="txt_user_sprnMP" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-15">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-15" value="ToolGIS">
                        ToolGIS
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sprn" name="txt_user_toolgis" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="Quemador SARP">
                        Quemador SARP
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_QSARP" name="txt_user_QSARP" type="text"class="form-control input-md">
                </td>
              </tr>
            </table>  
            </div>
          </div>
          <hr>

          <!-- SISTEMAS WEB OPCIONES -->
          <div class="form-group-md">
            <label class="control-label" for="checkboxes">Sistemas Web</label>
            <br>
            <div class = "align-items: center">
              <table WIDTH="700">
                <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-14">                        
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-14" value="Citrix">
                          Citrix
                        </label>
                      </div>
                  </td>
                <td class = "col-md-8">
                    <input id="txt_user_citrix" name="txt_user_citrix" type="text"class="form-control input-md">                  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-15">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-15" value="Correo Institucional">
                        Correo Institucional
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_correo" name="txt_user_correo" type="text"class="form-control input-md">  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-16">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-16" value="PSI">
                        PSI
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_psi" name="txt_user_psi" type="text"class="form-control input-md">  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-17">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-17" value="RENIEC">
                        RENIEC
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_reniec" name="txt_user_reniec" type="text"class="form-control input-md">  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-17">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-17" value="SGD">
                        SGD
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sgd" name="txt_user_sgd" type="text"class="form-control input-md">  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-17">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-17" value="SGD(MESA DE PARTES)">
                        SGD(MESA DE PARTES)
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sgdMP" name="txt_user_sgdMP" type="text"class="form-control input-md">  
                </td>
                </tr>
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-18">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-18" value="SGIT">
                        SGIT
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_sgit" name="txt_user_sgit" type="text"class="form-control input-md">  
                </td>
                </tr>
        
                <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-19">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-19" value="SPRL">
                        SPRL - Extranet
                      </label>
                    </div>
                </td>
                <td class = "col-md-8"> 
                    <input id="txt_user_sprl" name="txt_user_sprl" type="text"class="form-control input-md">  
                </td>
                </tr>
              </table>
            </div>
          </div>
          <br>

          <hr>

          <!-- SISTEMAS ADMINISTRATIVOS OPCIONES -->
          <div class="form-group-md">
            <label class="control-label" for="checkboxes">Sistemas Administrativos</label>
            <br>
            <div class = "align-items: center">
            <table width = 700>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="AXION">
                          AXION
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_axion" name="txt_user_axion" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="Clarissa">
                          Clarissa
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_Clarissa" name="txt_user_Clarissa" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="CheckSmart">
                          CheckSmart
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_CheckSmart" name="txt_user_CheckSmart" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="Devoluciones">
                          Devoluciones
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_devo" name="txt_user_devo" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="Firma">
                          Firma ONPE
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_Firma" name="txt_user_Firma" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-20">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="MADAF">
                          MADAF SIAF
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_madaf" name="txt_user_madaf" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-21">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="Melissa">
                          Melissa
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_meli" name="txt_user_meli" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-22">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-22" value="Modulo Logistica">
                          Modulo Logistica
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_logis" name="txt_user_logis" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-22">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-22" value="LEGAJO">
                          LEGAJO
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_lega" name="txt_user_lega" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-22">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-22" value="ReFirma">
                          ReFirma PDF
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_refirma" name="txt_user_refirma" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-23">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-23" value="SIAF">
                          SIAF
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_siaf" name="txt_user_siaf" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-24">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-24" value="SICA">
                          SICA
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_sica" name="txt_user_sica" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-24">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-24" value="SIGA">
                          SIGA
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_siga" name="txt_user_siga" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-25">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-25" value="SISABA">
                          SISABA
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_sisaba" name="txt_user_sisaba" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-26">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-26" value="SISTRAM">
                          SISTRAM
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_sistram" name="txt_user_sistram" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-27">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-27" value="SUTESOR">
                          SUTESOR
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_sute" name="txt_user_sute" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-27">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-27" value="TESORERIA">
                          TESORERIA
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_teso" name="txt_user_teso" type="text"class="form-control input-md">  
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-27">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-27" value="Registro de Visitas">
                          Registro de Visitas
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                       <input id="txt_user_visitas" name="txt_user_visitas" type="text"class="form-control input-md">  
                  </td>
              </tr>
            </table>
          
            </div>
          </div>

          <hr>

          <!-- MODULOS DE INFORMATICA -->

          <div class="form-group-md">
            <label class="control-label" for="checkboxes">Informatica/Otros</label>
            <br>
            <div class = "align-items: center">
            <table width = 700>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-20">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="AnyDesk">
                        AnyDesk
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_any" name="txt_user_any" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-20">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-20" value="Base de Datos">
                        Base de Datos
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_bd" name="txt_user_bd" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="KeyFile">
                        KeyFile
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_keyfile" name="txt_user_keyfile" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="VPN">
                        VPN
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_vpn" name="txt_user_vpn" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="FTP">
                        FTP
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_ftp" name="txt_user_ftp" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="Certificado Digital">
                        Certificado Digital
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_certficado" name="txt_user_certficado" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-21">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="Discovery">
                        Discovery
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_discovery" name="txt_user_discovery" type="text"class="form-control input-md">
                </td>
              </tr>
              <tr>
                <td>
                    <div class="checkbox">
                      <label for="checkboxes-22">
                        <input type="checkbox" name="checkboxes[]" id="checkboxes-22" value="Acceso a Internet">
                        Acceso a Internet
                      </label>
                    </div>
                </td>
                <td class = "col-md-8">
                    <input id="txt_user_Acceso" name="txt_user_Acceso" type="text"class="form-control input-md">
                </td>
              </tr>
            </table>    
          </div>
          
          <hr>
          <!-- ANTIVIRUS WITHSECURE OPCIONES -->
          
          <div class="form-group-md">
            <label class="control-label" for="checkboxes">Antivirus WithSecure</label>
            <br>
            <div class = "align-items: center">
              <table width = 700>
                <tr>
                  <td>
                      <div class="checkbox">
                        <label for="checkboxes-21">
                          <input type="checkbox" name="checkboxes[]" id="checkboxes-21" value="WithSecure">
                          Consola WithSecure
                        </label>
                      </div>
                  </td>
                  <td class = "col-md-8">
                      <input id="txt_user_mcafee" name="txt_user_mcafee" type="text"class="form-control input-md">
                  </td>
                </tr>             
                </table>
                </div>
              </div>
          </div>

          <!-- </fieldset> -->
    </div>
    <br>
    <!-- Button -->
    <center>
        <button type="submit" class="btn btn-primary" value="GENERAR" name="submit">Enviar Formato</button> 
    </center>
       
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