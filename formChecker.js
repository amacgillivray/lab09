

let submit = document.getElementById("submit");
let reset  = document.getElementById("reset");
let form   = document.getElementById("form");

function check_email ( email )
{    
    if (email.indexOf("@") <= 0)
        return false;

    if (email.indexOf(".") <= email.indexOf("@"))
        return false;
        
    if (email.indexOf(".") == email.length-1)
        return false;
        
    return true;
}

function reset_cb ( e )
{
    form.reset();
}

function submit_cb( e )
{
    // validate
    let uname = document.getElementById("e");
    let pw = document.getElementById("pw");
    
    if (pw.value.length == 0)
    {
        alert("Password must not be empty.");
        form.reset();
        return;
    }
    
    if (!check_email(uname.value))
    {
        alert("Please enter a valid email address.");
        // form.reset();
        return;
    }
    
    form.submit();
}

reset.addEventListener("click", reset_cb );
submit.addEventListener("click", submit_cb );
