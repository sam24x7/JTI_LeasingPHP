/*
 *This is the Only Java Script File for the JTI_Finance Solution 
 *
 *CREATED BY: Vikum Samaranayake
 */

// Home_page.php Files Script 
    function HomePhpSelectBranch(id){
      
        if(id===1){
            document.getElementById("check_AG").checked = true;            
        }else if(id===2){
            document.getElementById("check_PT").checked=true;
        }else if(id===3){
            document.getElementById("check_WD").checked=true;
        }else if(id===4){
            document.getElementById("check_KE").checked=true;
        }else if(id===5){
            document.getElementById("check_PL").checked=true;
        }else if(id===6){
            document.getElementById("check_Extra").checked=true;
        }
    }
    function HomePhpSelectAccType(id){
        
        if(id===1){
            document.getElementById("type_f").checked = true;            
        }else if(id===2){
            document.getElementById("type_p").checked=true;
        }else if(id===3){
            document.getElementById("type_dp").checked=true;
        }else if(id===4){
            document.getElementById("type_rc").checked=true;
        }else if(id===5){
            document.getElementById("type_x").checked=true;
        }
    }
    
    