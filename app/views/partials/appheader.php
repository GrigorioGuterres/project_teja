<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark" style="background: rgb(58,243,142);
background: -moz-linear-gradient(167deg, rgba(58,243,142,1) 4%, rgba(58,114,243,1) 36%, rgba(47,76,205,1) 36%, rgba(94,71,223,1) 46%, rgba(89,97,202,1) 54%, rgba(179,71,140,1) 94%, rgba(191,104,160,1) 99%);
background: -webkit-linear-gradient(167deg, rgba(58,243,142,1) 4%, rgba(58,114,243,1) 36%, rgba(47,76,205,1) 36%, rgba(94,71,223,1) 46%, rgba(89,97,202,1) 54%, rgba(179,71,140,1) 94%, rgba(191,104,160,1) 99%);
background: linear-gradient(167deg, rgba(58,243,142,1) 4%, rgba(58,114,243,1) 36%, rgba(47,76,205,1) 36%, rgba(94,71,223,1) 46%, rgba(89,97,202,1) 54%, rgba(179,71,140,1) 94%, rgba(191,104,160,1) 99%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#3af38e",endColorstr="#bf68a0",GradientType=1);">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php print_link(HOME_PAGE) ?>">
            <img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" /> <?php echo SITE_NAME ?>
            </a>
            <?php 
            if(user_login_status() == true ){ 
            ?>
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            </button>
            <button type="button" id="sidebarCollapse" class="btn btn-dark">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <?php Html :: render_menu(Menu :: $navbartopleft  , "navbar-nav mr-auto" ); ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php 
                            if(!empty(USER_PHOTO)){
                            ?>
                            <img class="img-fluid" style="height:30px;" src="<?php print_link(set_img_src(USER_PHOTO,30,30)); ?>" />
                                <?php
                                }
                                else{
                                ?>
                                <span class="avatar-icon"><i class="material-icons">account_box</i></span>
                                <?php
                                }
                                ?>
                                <span>Hi <?php echo ucwords(USER_NAME); ?> !</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php print_link('account') ?>"><i class="material-icons">account_box</i> My Account</a>
                                <a class="dropdown-item" href="<?php print_link('index/logout?csrf_token=' . Csrf::$token) ?>"><i class="material-icons">exit_to_app</i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php 
                } 
                ?>
            </div>
        </div>
        <?php 
        if(user_login_status() == true ){ 
        ?>
        <nav id="sidebar" class="navbar-dark" style="background: rgb(45,112,220);
background: -moz-linear-gradient(167deg, rgba(45,112,220,1) 28%, rgba(26,102,224,1) 28%, rgba(61,132,231,1) 62%, rgba(130,178,255,1) 62%, rgba(120,165,255,1) 72%);
background: -webkit-linear-gradient(167deg, rgba(45,112,220,1) 28%, rgba(26,102,224,1) 28%, rgba(61,132,231,1) 62%, rgba(130,178,255,1) 62%, rgba(120,165,255,1) 72%);
background: linear-gradient(167deg, rgba(45,112,220,1) 28%, rgba(26,102,224,1) 28%, rgba(61,132,231,1) 62%, rgba(130,178,255,1) 62%, rgba(120,165,255,1) 72%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#2d70dc",endColorstr="#78a5ff",GradientType=1);">
            <ul class="nav navbar-nav w-100 flex-column align-self-start">
                <li class="menu-profile text-center nav-item">
                    <a class="avatar" href="<?php print_link('account') ?>">
                        <?php 
                        if(!empty(USER_PHOTO)){
                        ?>
                        <img class="img-fluid" src="<?php print_link(set_img_src(USER_PHOTO,260,200)); ?>" />
                            <?php
                            }
                            else{
                            ?>
                            <span class="avatar-icon"><i class="material-icons">account_box</i></span>
                            <?php
                            }
                            ?>
                        </a>
                        <h5 class="user-name">Hi 
                            <?php echo ucwords(USER_NAME); ?>
                        </h5>
                        <div class="dropdown menu-dropdown">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">account_box</i>
                            </button>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php print_link('account') ?>"><i class="material-icons">account_box</i> My Account</a>
                                <a class="dropdown-item" href="<?php print_link('index/logout?csrf_token=' . Csrf::$token) ?>"><i class="material-icons">exit_to_app</i> Logout</a>
                            </ul>
                        </div>
                    </li>
                </ul>
                <?php Html :: render_menu(Menu :: $navbarsideleft  , "nav navbar-nav w-100 flex-column align-self-start"  , "accordion"); ?>
            </nav>
            <?php 
            } 
            ?>