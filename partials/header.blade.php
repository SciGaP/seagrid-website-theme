<title>SEAGrid</title>

<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/style.css"/>

<div class="seagrid">
    <div class="container-fluid">
        <nav class="nav navbar-default navbar-inverse">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll" id="home">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{ URL::to('/') }}/home">
                    <img class="seagrid-logo" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/logo.png"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Download <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background:#000;">
                            <li>
                            <a class="page-scroll" href="{{URL::to('/')}}/../themes/{{Session::get('theme')}}/assets/app/Seagrid_Mac_Desktop_Client.dmg">Desktop App for Mac</a>
                            </li>
                            <li>
                            <a class="page-scroll" href="{{URL::to('/')}}/../themes/{{Session::get('theme')}}/assets/app/SEAGrid_Windows_Desktop_Client.exe">Download App for Windows</a>
                            </li>
                            <li>
                            <a class="page-scroll" href="{{URL::to('/')}}/../themes/{{Session::get('theme')}}/assets/app/SDC_Linux.tar.gz">Download App for Linux</a>
                            </li>
                        </ul>
                    </li>
                <!--
                    <li>
                        <a class="page-scroll" href="https://seagrid.org/jnlp/seagrid.jnlp">Download Desktop App</a>
                    </li>
                -->
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}/pages/documentation">Documentation</a>
                    </li>
                    <!--
                    <li>
                        <a class="page-scroll" href="#collaborators">News</a>
                    </li>
                    -->
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}/pages/publications">Publications</a>
                    </li>
                    <li>
                        @if(Session::has('authz-token'))
                            <a class="page-scroll" target="_blank" href="https://data.seagrid.org/login.php?code={{Session::get('authz-token')->accessToken}}">SEAGrid Data</a>
                        @else
                            <a class="page-scroll" target="_blank" href="https://data.seagrid.org/login.php">SEAGrid Data</a>
                        @endif
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}/pages/about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}/pages/contact">Contact</a>
                    </li>
                    <!--
                    <li>
                        <a class="page-scroll btn btn-primary" href="#collaborators">Get Access</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
