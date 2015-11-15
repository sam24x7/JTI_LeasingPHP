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
                <h2 style=" display: inline-block;" class="Font_Style"> f;dr;=re </h2>
                <h2 style="display: inline-block; padding-left: 20px;"> - F/P/DP</h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">

                <label class="control-label Font_Style">iajxl%Sh  wxlh </label>
                <input id="accountAutoId" type="text" placeholder="iajxl%Sh  wxlh" readonly 
                       class="form-control Font_Style" style="width: 300px;">
                <br/>

                <label class="control-label Font_Style" >Khlre ku </label>
                <input id="accountOwnerNameWithInitials" type="text" placeholder="Khlre ku" 
                       class="form-control Font_Style" style="width: 300px;">
                <br/>

                <label class="control-label Font_Style">ryiH jpkh </label>
                <input id="accountOwnerPassword" type="password"  
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label Font_Style" >cdyem wxlh </label>
                <input id="accountOwnerNationalIdNumber" type="text" 
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label Font_Style">fjk;a ye m; wxl </label>
                <input id="accountOwnerOtherIdentityNumberDL" type="text" placeholder="DL" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="accountOwnerOtherIdentityNumberPP" type="text" placeholder="PP" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/> <br/>

                <label class="control-label Font_Style">iuamQraK ku </label>
                <textarea id="accountOwnerFullName" placeholder="iuamQraK ku" 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 700px; resize: none;" ></textarea>
                <br/>

                <label class="control-label Font_Style">,smsKh </label>
                <textarea id="accountOwnerAddress" placeholder=",smsKh" 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label Font_Style">oqr l:kh</label>
                <input id="accountOwnerTelephoneHome" type="text" placeholder="Home Number" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="accountOwnerTelephoneMobile" type="text" placeholder="Mobile Number" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/><br/>

                <label class="control-label Font_Style">.ukau.</label>
                <textarea id="accountOwnerRouteToDestination" placeholder=".ukau." 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label Font_Style">wem jdykh </label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="Font_Style">jdykh </th>
                            <th class="Font_Style">jra.h</th>
                            <th class="Font_Style">udos,sh</th>
                            <th class="Font_Style">jdyk wxlh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:100px;">
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                        </tr>                        
                    </tbody>
                </table>

                <br>
                <label class="control-label Font_Style">wem bvu </label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="Font_Style">bvua  - Tmamq wxlh 2</th>
                            <th class="Font_Style">bvfua jsia;rh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:100px;">
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                        </tr>                        
                    </tbody>
                </table>
                <br>

                <label class="control-label Font_Style">wem fplam;</label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="Font_Style">nexl=j</th>
                            <th class="Font_Style">YdLdj</th>
                            <th class="Font_Style">fpla wxlh</th>
                            <th class="Font_Style">uqo,</th>
                            <th class="Font_Style">fpla oskh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:100px;">
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                            <td contenteditable='true' class="Font_Style"></td>
                        </tr>                        
                    </tbody>
                </table>
                <br/>                

                <label id="ApakaruIdNumbers" class="control-label Font_Style">wemlre cdyem wxlh</label>
                <input  type="text" 
                       class="form-control" style="width: 300px;" >
                <br/>

                <label id="ApakaruOtherIdNumbers" class="control-label Font_Style" >bosrsm;al, fjk;a ye m;a wxl </label>
                <input type="text" placeholder="DL" class="form-control" style="width: 250px; display: inline-block" >
                <input  type="text" placeholder="PP" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/> <br/>

                <label id="ApakaruFullName" class="control-label Font_Style">iuamQraK ku</label>
                <textarea  placeholder="iuamQraK ku" 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 700px; resize: none;" ></textarea>
                <br/>

                <label id="ApakaruAddress" class="control-label Font_Style">,smsKh</label>
                <textarea placeholder=",smsKh" 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label id="ApakaruPhoneNumbers" class="control-label Font_Style">oqr l:kh </label>
                <input type="text" placeholder="Home Number" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input type="text" placeholder="Mobile Number" 
                       class="form-control" style="width: 250px; display: inline-block">
                
                <br/><br/>
                <label id="lblNotes" class="control-label Font_Style">igyka</label>
                <textarea id="txtNotes" placeholder="igyka" 
                          class="form-control Font_Style" rows="5" Cols="25" style="width: 900px; resize: none;" ></textarea>
                       
                <br/><br/><br/>

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
