


  
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>:::. Sistema de Apoio - Sistema de Apoio .::: </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- toastr -->
    <script src="assets/toastr/jquery.min.js"></script>
    <link href="assets/toastr/font-awesome.min.css" rel="stylesheet" />
    <style>
    /*
    .table-striped>tbody>tr:nth-of-type(odd) {
      background-color: #eff5f2;
    }
    thead{
      background:#008948;
      color: #ffffff;
      font-weight: 600;
      font-size: 1.0em;
    }
    */
    .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
      border: 1px solid #d8d8d8;
    }
  
    </style>
    <!-- WhatsApp -->
    <link rel="stylesheet" href="assets/dist/css/WhatsApp.css">
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/js/sorttable.js"></script>
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="assets/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/fac.png">
    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    
      <style>
        .error{
          color:red;
          font-weight: normal;
        }
          
          .center{ text-align: center;}
          .right{ text-align: right;}
          .left{ text-align: left;}
  
          .btn-table{
              padding: 1px 8px;
          }
          .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{ padding: 3px; padding-left: 8px; }
          .text-med{ color: #f39c12;}
          .text-fis{ color: #dc5dc7;} 
          .text-adm{ color:#a3238e;} 
          .text-enf{ color:#ffcb08;} 
          
          
          input { text-transform: uppercase; }
          select { text-transform: uppercase; }
          textarea { text-transform: uppercase; }
          
          .center{ text-align: center; }
          .right{ text-align: right;}
          .red{ color: red;}
          .bold{ font-weight:bold;}
          .green{ color: #008c4f;}
          
        
          
          .bot{ padding: 1px 8px; font-size: 13px; }
        
        
          
          
          .form-group .form-control{
              border: 0px solid #ccc;
              border-bottom: 1px solid #ccc;
          }
          label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 0px;
            font-weight: 600;
        }
        .form-group{
            margin-left: 10px;
        } 
        .blue{ color: blue;}
        
          .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
              z-index: 3;
              color: #fff;
              cursor: default;
              background-color: #00a65a;
              border-color: #00a65a;
          }
          
    
      table>tbody{
          text-transform: uppercase;
      }
    
    
    
    /*
      .sortable{
      width:100%; 
      border-collapse:collapse; 
    }
    .sortable td{ 
      padding:7px; border:#4e95f4 1px solid;
    }
    .sortable tr{
      background: #b8d1f3;
    }
    .sortable tr:hover {
            background-color: #ffff99;
        }
    */
    
    /*
    
    .box-body .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: #87e2b7;
      border: 1px solid #87e2b7;
      color: #ffffff;
    }
    */
    
  .modal-header {
      border-bottom-color: #666;
      border-top: 1px solid #666;
      border-left: 1px solid #666;
      border-right: 1px solid #666;
      background: #666;
      color: white;
  }
    
  </style> 
  <!-- EFEITOS DOS INPUTS -->
  <style>
  .skin-blue-light .main-header .navbar {
    // background-color: #444444;
  }    
  .skin-blue-light .main-header .logo{
    //  background-color: #444444;
  }
  </style>   
      
  <!-- EFEITOS DOS INPUTS -->
  <style>
  
  
  
  .form-group .wrap {
    width: 450px;
    margin: 0 auto;
  }

  .form-group .mat-label {
    display: block; 
    transform: translateY(0);
    //color: #bababa; 
    transition: all 0.5s;
  }

  .form-group .mat-input {
    position: relative;
    background: transparent;
    width: 100%;
    border: none;
    outline: none;
    padding: 4px 0; 
    color: #555;
  }

  .form-group .mat-div {
    padding: 10px 0 0 0;
    position: relative;
  }

  .form-group .mat-div:after, .mat-div:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 1px;
    background-color: #ccc; 
    bottom: 0;
    left: 0;
    transition: all 0.5s;
  }

  .form-group .mat-div::after {
    background-color: #008948;
    transform: scaleX(0);
  }


  .form-group .mat-div::after {
    background-color: #008948;
    transform: scaleX(0);
  }

  .form-group .form-control:after, .form-control:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 1px;
    background-color: #e2e2e2; 
    bottom: 0;
    left: 0;
    transition: all 0.5s;
  }

  .form-group .form-control::after {
    background-color: #3c8dbc;
    transform: scaleX(0);
  }
  
  .form-group .is-active::after {
    transform: scaleX(1);
  }

  .form-group .is-active .mat-label {
    color: #008948;
  }

  .form-group .is-completed .mat-label {
    font-size: 14px;
    transform: translateY(0);
  }

  .form-group button {
    background-color: #93E1D8;
    border: none;
    display: block;
    margin: 35px auto;
    padding: 15px 30px;
    border-radius: 10px;
    cursor: pointer;
  }

  .input-group .input-sm { 
      font-size: 14px; 
  }

      .select2-container--default .select2-selection--multiple {
          position: relative;
          background: transparent;
          width: 100%;
          border: none;
          outline: none;
          padding: 0px 0;
          font-size: 14px;
      }
      .select2-container--default.select2-container--focus .select2-selection--multiple, .select2-container--default .select2-search--dropdown .select2-search__field{
          border: 0px;
      }
      .select2-container--default .select2-selection--multiple .select2-selection__choice{
          background-color: #00a65a; 
          background-color: #00a65a;
          border-color: #00a65a;
      }
      
      .select2-container--default .select2-results__option--highlighted[aria-selected] {
          background-color: #00a65a;
          color: white;
      }
      
      .ico_verde{ color: #008948;}
      .linha_menu{ border-bottom: 1px solid #e5e5e5; }
      .LogoMenu { display: block; }
      .LogoMenu2 { display: none; }
      .sidebar-collapse .LogoMenu { display: none; }
      .sidebar-collapse .LogoMenu2 { display: block; }
      
      .sidebar{
        position: relative;
        display: flex;
        flex-direction: column;
      }

      .user-panel{
        height: auto;
      }
      @media (min-width: 1200px){
        .container {
            max-width: 85% !important ;
        }
      }

      .navbar-static-top{
        display: flex
      }
      .navbar-custom-menu{
        display: flex;
        justify-content: flex-end;
      }

  </style>

    <script>
    window.console = window.console || function(t) {};
  </script>

    
    
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="sidebar-mini skin-blue-light fixed ">

  <!-- toastr-->
  <div>
      <script src="assets/toastr/toastr.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/toastr/toastr.min.css">
      <script type="text/javascript">
          
            
              
      </script>
  </div>
  <!-- toastr-->

  <div id="loading" ></div>
              <script type="text/javascript">
                          
                
                  function carpag() { 
                      document.getElementById("loading").innerHTML = "<div style='position: fixed; z-index: 9999999999; margin-top: 20%; text-align: center; margin: 0 auto; width: 100%; height: 100%; background: #fff; z-index: 9999999999; overflow: hidden; background:rgba(230, 250, 251, 0.51);'><br><br><br><br><br><br><br><br><br><br><br><br><img src='assets/images/carregando.gif' width='5%'><br><img src='assets/images/carrega.png' > </div>";
                  }
                  function carpagsalvar() {
                      document.getElementById("loading").innerHTML = "<div style='position: fixed; z-index: 9999999999; margin-top: 20%; text-align: center; margin: 0 auto; width: 100%; height: 100%; background: #fff; z-index: 9999999999; overflow: hidden; background:rgba(230, 250, 251, 0.51);'><br><br><br><br><br><br><br><br><br><br><br><br><img src='assets/images/carregando.gif' width='5%'><br><img src='assets/images/salvando.png' > </div>";
                  }
                  function carpagdel() {
                      document.getElementById("loading").innerHTML = "<div style='position: fixed; z-index: 9999999999; margin-top: 20%; text-align: center; margin: 0 auto; width: 100%; height: 100%; background: #fff; z-index: 9999999999; overflow: hidden; background:rgba(230, 250, 251, 0.51);'><br><br><br><br><br><br><br><br><br><br><br><br><img src='assets/images/carregando.gif' width='5%'><br><img src='assets/images/deletando.png' > </div>";
                  }
                  function carpagimp() {
                      document.getElementById("loading").innerHTML = "<div style='position: fixed; z-index: 9999999999; margin-top: 20%; text-align: center; margin: 0 auto; width: 100%; height: 100%; background: #fff; z-index: 9999999999; overflow: hidden; background:rgba(230, 250, 251, 0.51);'><br><br><br><br><br><br><br><br><br><br><br><br><img src='assets/images/carregando.gif' width='5%'><br><img src='assets/images/importando.png' > </div>";
                  }
                  
              </script>

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      
      
      <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b><img style=" padding-bottom: 10px; padding-top: 10px;" src="assets/images/mini_logo.png"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img style=" padding-bottom: 10px; padding-top: 10px;" src="assets/images/Logo_Branco_Sombra_Fundo_Transparente.png"> </span>
      </a>
      
      
      
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
  
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" style="display: flex;" data-toggle="dropdown">
                <img src="assets/images/user.png" class="user-image" alt="User Image">
                <span class="hidden-xs">ADMINISTRADOR</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="assets/images/user.png" class="img-circle" alt="User Image">

                  <p>
                        ADMINISTRADOR                      <small>ADMINISTRADOR</small>
                  </p>
                </li>
              
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="alteracao_senha" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Alterar senha</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sair</a>
                      </div>
                    </li>
              </ul>
            </li> 
          </ul>
        </div>
          
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left ">
              <img class="LogoMenu" src="assets/images/logo_unimed.png" style=" width: 90%; margin-left: 6%;  " alt="Unimed">
              <img class="LogoMenu2" src="assets/images/logo-mini.png" style=" width: 90%; margin-left: 5%;  " alt="Unimed">
          </div>
        </div>
        <!-- search form -->
        <form action="pesquisa_menu" method="post" class="sidebar-form">
          <input type="hidden" name="tp_pesq" value="G">
          <div class="input-group">
            <input type="text" name="cod" class="form-control" placeholder="Pesquisar Guia...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form --> 
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU PRINCIPAL</li>
          <li class="active">
              <a onclick="carpag();" class="IconeMenu linha_menu" href="inicial"><i class="fa fa-th"></i> <span>Inicio</span></a>
          </li>
          
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa fa-folder"></i><span>Tabela</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="usuario"><i class="fa fa-circle-o"></i> Usuario</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="perfil"><i class="fa fa-circle-o"></i> Perfil de Usuario</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="setor"><i class="fa fa-circle-o"></i> Setor</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="motivo_compra"><i class="fa fa-circle-o"></i> Motivo de Compras</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="classificacao"><i class="fa fa-circle-o"></i> classificação de Produtos</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="produto"><i class="fa fa-circle-o"></i> Produto</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="fornecedor"><i class="fa fa-circle-o"></i> Fornecedor</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="motivo_reembolso"><i class="fa fa-circle-o"></i> Motivo de Reembolso</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="config_autorizacao"><i class="fa fa-circle-o"></i> Configuração Autorização</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="solic_tipo"><i class="fa fa-circle-o"></i> Tipo de Solicitação</a>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa   fa-edit "></i><span>Cobrança</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="inicial_demada"><i class="fa fa-circle-o"></i> Resumo</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="demanda_solicitacao"><i class="fa fa-circle-o"></i> Solicitação</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="lista_carta"><i class="fa fa-circle-o"></i> Carta de Comunicação</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="demanda_segunda_via"><i class="fa fa-circle-o"></i> Segunda Via Boleto</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="xls_demanda"><i class="fa fa-circle-o"></i> XLS de Solicitação</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="inadimplencia"><i class="fa fa-circle-o"></i> Clientes Suspensos</a>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa   fa-money"></i><span>Financeiro</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-barcode"></i> <span>Boleto</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="lista_remessa"><i class="fa fa-circle-o"></i> Remessas</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="boleto"><i class="fa fa-circle-o"></i> Boletos PF</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="boleto_pj"><i class="fa fa-circle-o"></i> Boletos PJ</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="xls_edi"><i class="fa fa-circle-o"></i> XLS EDI</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-file-text-o"></i> <span>Nota Fiscal</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="nota_fiscal"><i class="fa fa-circle-o"></i> Nota Fiscal</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-clipboard"></i> <span>Contas a Receber</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="xls_hrp_tit"><i class="fa fa-circle-o"></i> XLS Titulos</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-share-square-o"></i> <span>Contas a Pagar</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="con_pag"><i class="fa fa-circle-o"></i> XLS Contas a Pagar</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa   fa-shopping-cart "></i><span>Compras</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="inicial_compras"><i class="fa fa-circle-o"></i> Resumo</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="solicitacao"><i class="fa fa-circle-o"></i> Solicitação de Compras</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="cotacao"><i class="fa fa-circle-o"></i> Cotação de Compras</a>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa  fa-check-square-o"></i><span>Autorização</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="inicial_autorizacao"><i class="fa fa-circle-o"></i> Resumo </a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao"><i class="fa fa-circle-o"></i> Rede Local - Unimed</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_rede"><i class="fa fa-circle-o"></i> Rede Local - Intercâmbio </a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_rede_onco"><i class="fa fa-circle-o"></i> Rede Local - Oncologia</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_intercambio"><i class="fa fa-circle-o"></i> Intercambio</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_intercambio_onco"><i class="fa fa-circle-o"></i> Intercambio - Oncologia</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_operacional"><i class="fa fa-circle-o"></i> Custo Operacional</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_nao_trafegado"><i class="fa fa-circle-o"></i> Não Trafegadas</a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="autorizacao_fundo"><i class="fa fa-circle-o"></i> Fundo </a>
                                  </li>
                                
                                  
                                
                              
                                  <li class="">
                                      <a onclick="carpag();" href="xls_hrp"><i class="fa fa-circle-o"></i> XLS Autorização</a>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                                      
              
                  <li class="treeview ">  
                      <a href="#" class="linha_menu">
                          <i class="fa fa-fw fa-file-text"></i><span>Controles</span> 
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                    <ul class="treeview-menu ">
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-folder-open-o"></i> <span>Protoloco SAC</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="inicial_sac"><i class="fa fa-circle-o"></i> Resumo SAC</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="protocolo_sac"><i class="fa fa-circle-o"></i> Protocolos</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="xls_sac"><i class="fa fa-circle-o"></i> Geração do XLS</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-folder-open-o"></i> <span>Protoloco Jurídico</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="protocolo_nip"><i class="fa fa-circle-o"></i> Protocolo NIP</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                                
                                                              <li class="treeview ">
                                      <a href="#">
                                          <i class="fa fa-fw fa-folder-open-o"></i> <span>Protoloco Ouvidoria</span>
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu"> 
                                                                                  <li class=""><a onclick="carpag();" href="inicial_ouvidoria"><i class="fa fa-circle-o"></i> Resumo Ouvidoria</a></li>
                                                                                  <li class=""><a onclick="carpag();" href="protocolo_ouvidoria"><i class="fa fa-circle-o"></i> Protocolos</a></li>
                                          
                                      </ul>
                                  </li>
                                
                                  
                        
                    </ul>
                  </li>
                              
                          <!--
                  <li class="treeview">
                      <a href="#">
                          <i class="fa fa-share"></i> <span>Multilevel</span>
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                      <ul class="treeview-menu">

                          <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> Level One
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                  <li class="treeview">
                                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu">
                                          <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                          <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                      </ul>
                  </li>
                  -->
    
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
      <style>

      .content-header{
          margin: 0;
          background: #f9fafc;
          padding-bottom: 1px;
          padding-left: 12px;
          background: #f9fafc; 
          z-index: 0;
          min-height: 40px;
          border-bottom: 1px solid #e5e5e5;
          height: 40px;
          padding-top: 7px;
      }
      .skin-green-light .content-header{ background: #f9fafc;  }

      .content-header .header-title  {
          padding: 0;
          margin: 0 4px;
          font-size: 20px;
          font-weight: lighter;
          color: #737373;
          line-height: 35px;
          display: inline-block;
          padding-top: 5px;

      }
      </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  
      
      <section class="content-header" style="background: #f9fafc;">
        <div class="row"> 
              <div class="col-md-8 col-sm-8 col-xs-8">
          <span style=" font-size: 18px;">  Sistema de Apoio </span> <small> </small>
        </div>
        
        <div class="col-md-4 col-sm-4 col-xs-4">
          <ol class="" style="top: 0px; text-align:right;">
                      
                    </ol>
        </div>
      </div>
        
          

      </section>

      <!-- Main content -->
      <section class="content">
      <style>
      .content{
        padding-top: 5px; 
        padding-bottom: 5px;
        height: 80vh; 
      }
      .small-box{
          margin-bottom: 15px;
      }
      .small-box h3 {
          font-size: 30px;
      }
  
      @media (max-width: 992px) {
          
          .ImgInicial{ width: 40em; } 
      }  
    
      @media (max-width: 600px) {
          
          .ImgInicial{ width: 30em; } 
      } 
      @media (max-width: 492px) {
          
          .ImgInicial{ width: 22em; } 
      }
      </style> 

      
      <div>
        <?php include('chat.php')?>
      </div>
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
        <strong>&copy; 2020-2021 </strong> </footer>
    
  </div>
  <!-- ./wrapper -->

        <script id="rendered-js" >
          $(".mat-input").focus(function () {
            $(this).parent().addClass("is-active is-completed");
          });

          $(".mat-input").focusout(function () {
            if ($(this).val() === "")
            $(this).parent().removeClass("is-completed");
            $(this).parent().removeClass("is-active");
          });
  //# sourceURL=pen.js
      </script>

  <!-- jQuery 3 -->
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll -->
  <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="assets/plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>


  <!-- Page script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>
  <script>
  function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
        /* Exit the function: */
        return;
      }
    }
  }
  includeHTML();
  </script>
  </body>
  </html>








  
