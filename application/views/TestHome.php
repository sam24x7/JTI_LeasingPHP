<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>

        <link type="text/css" href="<?php base_url(); ?>assets/style/bootstrap.min.css" media="screen" rel="stylesheet">
        <link type="text/css" href="<?php base_url(); ?>assets/style/bootstrap-theme.min.css" media="screen" rel="stylesheet">
        <link type="text/css" href="<?php base_url(); ?>assets/style/style.css" media="screen" rel="stylesheet">
        <script src="<?php base_url(); ?>assets/scripts/jquery.min.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>assets/scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>assets/scripts/scripts.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php // echo base_url();?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" style="padding-top: 50px;">
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button" class="btn btn-block btn-primary" onclick="HomePhpSelectBranch(1)">
                                AG
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_AG" class="HOME_branch">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button" class="btn btn-block btn-primary" onclick="HomePhpSelectBranch(2)">
                                PT
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_PT" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button" class="btn btn-block btn-primary" onclick='HomePhpSelectBranch(3)'>
                                WD
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_WD">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button"  class="btn btn-block btn-primary" onclick="HomePhpSelectBranch(4)">
                                KE
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_KE">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button" class="btn btn-block btn-primary" onclick="HomePhpSelectBranch(5)">
                                PL
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_PL" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 8px; margin-top: 8px;">					 
                            <button type="button" class="btn btn-block btn-primary" onclick="HomePhpSelectBranch(6)">
                                Default
                            </button>
                        </div>
                        <div class="col-md-2" style="margin-bottom: 8px; margin-top: 8px;">
                            <input type="radio" name="Home_php_Branches" id="check_Extra" >
                        </div>				
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="padding-top: 50px;">
                                <div class="col-md-2">							 
                                    <button type="button" class="btn btn-info"style="width: 70px;" onclick="HomePhpSelectAccType(1)">
                                        F
                                    </button>
                                </div>
                                <div class="col-md-2">

                                    <button type="button" class="btn btn-info" style="width: 70px; " onclick="HomePhpSelectAccType(2)">
                                        P
                                    </button>
                                </div>
                                <div class="col-md-2">

                                    <button type="button" class="btn btn-info" style="width: 70px;" onclick="HomePhpSelectAccType(3)">
                                        DP
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-info" style="width: 70px;" onclick="HomePhpSelectAccType(4)">
                                        RC
                                    </button>
                                </div>
                                <div class="col-md-2">

                                    <button type="button" class="btn btn-info" style="width: 70px;" onclick="HomePhpSelectAccType(5)">
                                        X
                                    </button>
                                </div>						
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="padding-left: 42px;">
                                    <input type="radio" class="HomePhp_AccTypes" name="Acc_Types" id="type_f" onclick="HomePhpSelectAccType(1)">
                                </div>
                                <div class="col-md-2" style="padding-left: 42px;">
                                    <input type="radio" class="HomePhp_AccTypes" name="Acc_Types" id="type_p" >
                                </div>
                                <div class="col-md-2" style="padding-left: 42px;">
                                    <input type="radio" class="HomePhp_AccTypes" name="Acc_Types" id="type_dp" >
                                </div>
                                <div class="col-md-2" style="padding-left: 42px;">
                                    <input type="radio" class="HomePhp_AccTypes" name="Acc_Types" id="type_rc" >
                                </div>
                                <div class="col-md-2" style="padding-left: 42px;">
                                    <input type="radio" class="HomePhp_AccTypes" name="Acc_Types" id="type_x" >
                                </div>						
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-right: 50px;">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-block btn-default" 
                               type="button" style=" margin-top: 5px;
                               margin-bottom: 5px;font-family: ARADHANA; 
                               src:url(fonts/ARADHANA.TTF);" 
                               data-toggle="modal" data-target="#myModal">f;dr;=re we;=,;a lzÍu ) kj .sKqu</a>
                            
                            <a href="#" class="btn btn-block btn-default" 
                               type="button" style=" margin-top: 5px;
                               margin-bottom: 5px;font-family: ARADHANA; 
                               src:url(fonts/ARADHANA.TTF);">f;dr;=re we;=,;a lzÍu ) mj;sk .sKqu  </a>
                               
                            <a href="#" class="btn btn-block btn-default" type="button" style=" margin-top: 5px; margin-bottom: 5px;font-family: ARADHANA; src:url(fonts/ARADHANA.TTF);">f;dr;=re mßlaYdj</a>
                            <a href="#" class="btn btn-block btn-default" type="button" style=" margin-top: 5px; margin-bottom: 5px;font-family: ARADHANA; src:url(fonts/ARADHANA.TTF);">.sKqï mßlaYdj</a>
                            <a href="#" class="btn btn-block btn-default" type="button" style=" margin-top: 5px; margin-bottom: 5px;font-family: ARADHANA; src:url(fonts/ARADHANA.TTF);">ixfYdaOKh lzÍu</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5" style="display: inline-block; padding-left: 30% ; font-size: 120%; font-family: ARADHANA; src:url(fonts/ARADHANA.TTF);">
                            <label style="display: inline-block; padding-right: 0px;"> .sKqï wxlh </label> 
                        </div>
                        <div class="col-md-7" style="padding-right: 50%; padding-left: 0px;">
                            <input placeholder="Account Number" class="form-control" type="text" name="AccNum" id="accNimId" style="font-size: 100%; width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #28a4c9;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                        <label style="display: inline-block"> Account Id</label>
                        <input type="text" placeholder="Account Auto Id" class="form-control" readonly/>
                       
                        <label style="display: inline-block">Account Owner Name with Initials</label>
                        <input type="text" placeholder="Account Owner Name" class="form-control" />
                       
                        <label style="display: inline-block">Password</label>
                        <input type="password" placeholder="Password" class="form-control" />

                        <label style="display: inline-block">National Id Number</label>
                        <input type="text" placeholder="National Id Number" class="form-control"/>
                     
                        <label style="display: inline-block">Account Owner Full Name</label>
                        <input type="text" placeholder="Account Owner Full Name" class="form-control"/>
                        
                        <label style="display: inline-block">Address</label>
                        <input type="text-area" placeholder="Address" class="form-control"/>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
