<head>
  <link rel="shortcut icon" href="../images/smaKardesimLogo.svg" />
</head>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="display:flex;float:left;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand m-auto" href="anasayfa.php" style="margin-top: -10px;">
                <img style="width:45px;display: inline-block;" src="../images/smaKardesimLogo.svg" alt="SMA Kardeşim"></a>
            </div>
            <!-- /.navbar-header -->
                        
            <ul class="nav navbar-top-links navbar-right " style="float:right;">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="far fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php
                         if($kullanici->role>2)  
                        { ?>
                        <li><a href="kllnclar.php"><i class="fa fa-user fa-fw"></i> Kullanıcılar</a>
                        </li>
                        
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
                        </li>
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="http://127.0.0.1:8000/cikis">
                                @csrf
                                <a href="http://127.0.0.1:8000/cikis" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition w-100" style="width: 100%;display: inline-block;">Çıkış</a>
                            </form>
                        </li>
                    </ul>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="anasayfa.php"><i class="fas fa-tachometer-alt"></i> Anasayfa</a>
                        </li>
                        <?php if($kullanici->role>1)  
                        { ?>
                        <li>
                            <a href="kayit.php"><i class="fab fa-wpforms"></i> Çocuklar</a>
                        </li>
                        
                        <?php }
                         if($kullanici->role>2)  
                        { ?>
                        <li>
                            <a href="kllnclar.php"><i class="fas fa-user-tie"></i> Kullanıcılar</a>
                        </li>
                        
                        <?php } ?>
                    </ul>
                    <div id="check_list"></div>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <style>
        li.dropdown.show {
            display: inline-block !important;
        }
        .dropdown-menu > li > form > a:focus, .dropdown-menu > li > form > a:hover {
            color: #262626;
            text-decoration: none;
            background-color: #f5f5f5;
        }
        .dropdown-menu > li > form > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }
        </style>