var password = document.getElementById("pass");
var cpassword = document.getElementById("cpass");


function checkpassword(){
    if( password.value != cpassword.value ){

        alert("Password does not match!");

    }
    else if( password.value < 8 ){

        alert("plz enter 8 character password!")

    }
    else{
        //alert("Sucsessfully submit!");
    }
}

function enableButton(){

    var checkBox =document.getElementById("checkbox");
    var btn =document.getElementById("submit");

    if(checkBox.checked){
        btn.removeAttribute("disabled");
        btn.classList.add("btn");
    }
    else{
        btn.disabled="true";
        btn.classList.remove("btn");
    }

}


var e = document.getElementById("eye");
var hide = false;

function show(){
    if(hide == false){
        password.setAttribute("type", "text");
        hide = true;
    }
    else{
        password.setAttribute("type", "password");
        hide = false;
    }
}

function cshow(){
    if(hide == false){
        cpassword.setAttribute("type", "text");
        hide = true;
    }
    else{
        cpassword.setAttribute("type", "password");
        hide = false;
    }
}
