function check(){
    if(document.querySelector("input[type='checkbox']").checked==true)
        showPassword();
    else
        hidePassword();
}

function showPassword(){
    document.querySelector("input[name='password']").type='text';
    document.querySelector("input[name='cpassword']").type='text';
}

function hidePassword(){
    document.querySelector("input[name='password']").type='password';
    document.querySelector("input[name='cpassword']").type='password';
}

