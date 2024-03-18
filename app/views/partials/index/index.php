        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>

        <style>
            body{
                background: rgb(100,210,236);
background: -moz-linear-gradient(167deg, rgba(100,210,236,1) 4%, rgba(47,76,205,1) 48%, rgba(58,114,243,1) 48%, rgba(94,71,223,1) 67%, rgba(89,97,202,1) 67%, rgba(114,155,205,1) 94%, rgba(114,156,239,1) 99%);
background: -webkit-linear-gradient(167deg, rgba(100,210,236,1) 4%, rgba(47,76,205,1) 48%, rgba(58,114,243,1) 48%, rgba(94,71,223,1) 67%, rgba(89,97,202,1) 67%, rgba(114,155,205,1) 94%, rgba(114,156,239,1) 99%);
background: linear-gradient(167deg, rgba(100,210,236,1) 4%, rgba(47,76,205,1) 48%, rgba(58,114,243,1) 48%, rgba(94,71,223,1) 67%, rgba(89,97,202,1) 67%, rgba(114,155,205,1) 94%, rgba(114,156,239,1) 99%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#64d2ec",endColorstr="#729cef",GradientType=1);
            }
        </style>
        <div  class=" py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize"><center><b>BEMVINDO SISTEMA INFORMASAUN REJISTU DADUS FUNSIONARIU KONTRATADU CORPU GUARDA FLORESTA
 MUNICIPIO AINARU BAZEADU WEB</b></center>
</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        
                        <div  class="p-3 animated fadeIn page-content" style="background: rgb(100,210,236);
background: -moz-linear-gradient(167deg, rgba(100,210,236,1) 7%, rgba(114,155,205,1) 29%, rgba(114,156,239,1) 99%);
background: -webkit-linear-gradient(167deg, rgba(100,210,236,1) 7%, rgba(114,155,205,1) 29%, rgba(114,156,239,1) 99%);
background: linear-gradient(167deg, rgba(100,210,236,1) 7%, rgba(114,155,205,1) 29%, rgba(114,156,239,1) 99%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#64d2ec",endColorstr="#729cef",GradientType=1);">
                            <div>
                               <center>
                               <h4><i class="material-icons">lock_open</i>  Login Sistema</h4> <br>
                                <img src="assets/images/logo.png" alt="" style="width: 90px;">
                               </center>
                                <hr />
                                <?php 
                                $this :: display_page_errors(); 
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">account_circle</i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">lock</i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                            </i>
                                            Login <i class="material-icons">lock_open</i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                        <i class="material-icons">account_box</i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        