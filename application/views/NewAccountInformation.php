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
                <h2> Information </h2>
            </div>
            <div class="col-md-12" style="padding-left: 100px; margin-top: 15px;">

                <label class="control-label">Account Auto Id : </label>
                <input id="accountAutoId" type="text" placeholder="Account Auto Id" readonly 
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label">Account Owner Name with Initials : </label>
                <input id="accountOwnerNameWithInitials" type="text" placeholder="Account Owner Name with Initials" 
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label">Password : </label>
                <input id="accountOwnerPassword" type="password"  
                       class="form-control" style="width: 300px;">
                <br/>

                <label class="control-label">National Id Number : </label>
                <input id="accountOwnerNationalIdNumber" type="text" placeholder="National Id Number" 
                       class="form-control" style="width: 300px;" required="Fill the National Id Number">
                <br/>

                <label class="control-label">Other Identity Number/s : </label>
                <input id="accountOwnerOtherIdentityNumberDL" type="text" placeholder="DL" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="accountOwnerOtherIdentityNumberPP" type="text" placeholder="PP" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/> <br/>

                <label class="control-label">Full Name : </label>
                <textarea id="accountOwnerFullName" placeholder="Full Name" 
                          class="form-control" rows="5" Cols="25" style="width: 700px; resize: none;" ></textarea>
                <br/>

                <label class="control-label">Address : </label>
                <textarea id="accountOwnerAddress" placeholder="Address" 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label">Telephone Numbers : </label>
                <input id="accountOwnerTelephoneHome" type="text" placeholder="Home Number" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="accountOwnerTelephoneMobile" type="text" placeholder="Mobile Number" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/><br/>

                <label class="control-label">Route to Destination : </label>
                <textarea id="accountOwnerRouteToDestination" placeholder="Route to Destination" 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label">Apa Wahana : </label>
                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Bank</th>
                            <th>Branch</th>
                            <th>Cheque Number</th>
                            <th>Amount(Rs.) </th>
                            <th>Cheque Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:100px;">
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                            <td contenteditable='true'></td>
                        </tr>                        
                    </tbody>
                </table>
                <br/>

                <label class="control-label">Apa Idama : </label>
                <textarea id="" placeholder="Apa Idama" 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label">Apa Cheque : </label>
                <input type="text" id="" placeholder="Apa Cheque" 
                       class="form-control" style="width: 300px;"></textarea>
                <br/>

                <label class="control-label">Apakaru National Id Number : </label>
                <input id="" type="text" placeholder="Apakaru National Id Number" 
                       class="form-control" style="width: 300px;" required="Fill the National Id Number">
                <br/>

                <label class="control-label">Apakaru Other Identity Number/s : </label>
                <input id="" type="text" placeholder="DL" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="" type="text" placeholder="PP" 
                       class="form-control" style="width: 250px; display: inline-block">
                <br/> <br/>

                <label class="control-label">Apakaru Full Name : </label>
                <textarea id="" placeholder="Apakaru Full Name" 
                          class="form-control" rows="5" Cols="25" style="width: 700px; resize: none;" ></textarea>
                <br/>

                <label class="control-label">Apakaru Address : </label>
                <textarea id="" placeholder="Apakaru Address" 
                          class="form-control" rows="5" Cols="25" style="width: 900px; resize: none;"></textarea>
                <br/>

                <label class="control-label">Apakaru Telephone Numbers : </label>
                <input id="" type="text" placeholder="Home Number" 
                       class="form-control" style="width: 250px; display: inline-block" >
                <input id="" type="text" placeholder="Mobile Number" 
                       class="form-control" style="width: 250px; display: inline-block">
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
