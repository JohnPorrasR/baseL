<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      @yield('title','@johnporrasr')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{!! asset('asset/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!! asset('asset/css/AdminLTE.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('asset/css/_all-skins.min.css') !!}">
    @yield('style')
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <a href="/" class="logo">
          <span class="logo-mini">JPR</span>
          <span class="logo-lg"><b>@johnporras</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Tiene una notificación</li>
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 nuevos seguidores
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">Ver todos</a></li>
                </ul>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="https://pbs.twimg.com/profile_images/519104103218028544/VaEV_3cK_400x400.jpeg" class="user-image" alt="User Image">
                  <span class="hidden-xs">John Vladimir Porras Ramirez</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="https://pbs.twimg.com/profile_images/519104103218028544/VaEV_3cK_400x400.jpeg" class="img-circle" alt="User Image">
                    <p>
                      John Vladimir Porras Ramirez <br> Web Developer
                      <small>@johnporrasr</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu pro}incipal</li>
            <li>
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Incio</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Nosotros</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Vision</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Mision</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Administraci&oacute;n</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Personas</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Menu</a></li>
              </ul>
            </li>
<!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
-->
          </ul>
        </section>
      </aside>

       @yield('content')
<!--
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
-->    
    </div>

    <script src="{!! asset('asset/js/lib/jQuery-2.1.4.min.js') !!}"></script>
    <script src="{!! asset('asset/js/lib/bootstrap.min.js') !!}"></script>
    @yield('script')
  </body>
</html>
