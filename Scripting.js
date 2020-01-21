var form_call = document.getElementById("form");

var first_name_check = document.getElementById("fname");
first_name_check.onchange = firstname_check;
document.getElementById("sname").onchange = secondname_check;


//first name checking
function firstname_check(){
    var name_pattern = /^[a-zA-Z]+$/;

    var first_name = document.getElementById("fname").value;    
    if(first_name.match(name_pattern) || first_name.trim == ""){
        document.getElementById("fname_error").innerHTML = "  ";
        return true;
    }else{
        document.getElementById("fname_error").innerHTML = "*Invalid Input";
        return false;
    }
}



//second name checking 
function secondname_check(){
 
    var name_pattern = /^[a-zA-Z]+$/;
    var second_name= document.getElementById("sname").value;
    if(second_name.match(name_pattern) && second_name.length > 0){
       
         document.getElementById("sname_error").innerHTML = " ";
        return true;
    }else{
        document.getElementById("sname_error").innerHTML = "*Invalid Input";
        return false;
    }
}


//code for the full name 
document.getElementById("sname").onblur = fullname_fill;
function fullname_fill(){
        var fname = document.getElementById('fname').value;
        var sname = document.getElementById('sname').value;
        fullname.value = fname.concat(" ", sname);
}
//phone number check
document.getElementById("phno").onchange = ph_no_check;
function ph_no_check(){
    
    var valid_pattern= '/^[(]+\ ++\d{2}[)]+[^0]+\d{9}/';
    var ph_no = document.getElementById("phno").value;
    if(!ph_no.match(valid_pattern)){
        document.getElementById("ph_no_error").innerHTML = "valid";
        return true;
    }else{
        document.getElementById("ph_no_error").innerhtml = "Invalid phno.";
        return false;
    }
}
//email check
document.getElementById("email_input").onchange = email_check;
function email_check()
    {
            
            var input = document.getElementById("email_input").value;
        // var input = "kunal.singh@innoraft.com";
            var pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            if(input.match(pattern))
            {
                    document.getElementById("email_error").innerHTML=" ";
                    return true;
            }
            else
            {
                    document.getElementById("email_error").innerHTML="invalid email";
                    return false;
            }
        }
//form send 
form_call.onsubmit = function(){
    if(firstname_check() && secondname_check() && email_check()){
        return true;
    }else{
        return false;
    }
}

