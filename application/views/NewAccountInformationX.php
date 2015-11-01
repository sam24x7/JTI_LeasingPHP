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
                <h2> Information X</h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">

                <label class="control-label">Account Auto Id : </label>
                <input id="accountAutoId" type="text" placeholder="Account Auto Id" readonly 
                       class="form-control" style="width: 300px;">                
                <br/>
                
                <label class="control-label">Password : </label>
                <input id="password" type="password"  
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label">National Id Number : </label>
                <input id="nationalIdNumber" type="text" placeholder="National Id Number" 
                       class="form-control" style="width: 300px;" required="Fill the National Id Number">
                <br/>

                <label class="control-label">Other Identity Number/s : </label>
                <input id="otherIdentityNumberDL" type="text" placeholder="DL" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="otherIdentityNumberPP" type="text" placeholder="PP" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/> <br/>

                <label class="control-label">Full Name : </label>
                <textarea id="fullName" placeholder="Full Name" 
                          class="form-control" rows="5" Cols="25" style="width: 700px; resize: none;" ></textarea>
                <br/>

                <label class="control-label">Address : </label>
                <textarea id="address" placeholder="Address" 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label">Telephone Numbers : </label>
                <input id="telephoneHome" type="text" placeholder="Home Number" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="telephoneMobile" type="text" placeholder="Mobile Number" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/><br/>

                <label class="control-label">Other Notes : </label>
                <textarea id="note" placeholder="Other Notes..." 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>
                <br/>                

                <div style="float: right;">
                    <input class="btn btn-small btn-success" type="button" value="Save" style="width: 100px;">
                    <input class="btn btn-small btn-primary" type="button" value="Confirm" style="width: 100px;">
                    <input class="btn btn-small btn-danger" type="button" value="Cancel" style="width: 100px;">
                </div>
                <br/><br/><br/>

            </div>

        </form>
    </body>
</html>
