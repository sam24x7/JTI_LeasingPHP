<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <form class="form-horizontal" role="form">
            <div class="col-lg-12">
                <h2>Settlement Accounts</h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">            

                <div style="float: Left; display: inline-block; width: 200px;">
                    <label class="control-label">Account Id : </label>
                    <input id="accountAutoId" type="text" placeholder="Account Auto Id" readonly 
                           class="form-control" style="width: 300px;">   
                    <br/>

                    <label class="control-label">Account Owner's Name : </label>
                    <input id="accountOwnerName" type="text" placeholder="Account Owner's Name" readonly 
                           class="form-control" style="width: 500px;">    
                    <br/>
                    <br/>
                </div>
                
                <div style="width: 500px; padding-right: 100px;  ">
                    <div>
                        <button type="button" class="btn btn-block btn-primary" style="display: inline-block;">
                            Button - 1 (Warika Adaka ta Aduwen Gewu)
                        </button>                        
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-block btn-primary" >
                            Button - 2 (Warika Adaka ta Wadiyen Gewu)
                        </button>
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-block btn-primary" >
                            Button - 3 (Apaya Pawara Ganimen Pasu)
                        </button>
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-block btn-primary" >
                            Button - 4 (Gewa Nima Wu)
                        </button>
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-block btn-primary" >
                            Button - 5 (Nogewu)
                        </button>
                    </div>                 
                </div>
            </div>

        </form>
    </body>
</html>
