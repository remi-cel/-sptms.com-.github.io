function validateinput() {

    var email=document.regform.email.value
    atpost=email.indexOf("@")
    dotpost=email.indexOf(".")
    if ((atpost<1)||(dotpost-atpost<2))
    {
        alert('Email format is incorrect!! ')
        document.regform.email.focus();
        return false;
    }

        if (document.regform.pwd.value!=document.regform.pwd1.value)
        {
            alert('Password and Confirm password Are not the same!')
            document.regform.pwd.focus()
            return false;
        }
        var telindex=document.regform.tel.value;
        if (telindex.length<10)
        {
            alert('Phone number format is not collect!!')
            document.regform.tel.focus();
            return false;
        }
        var memberid=document.regform.orgId.value
        r=memberid.indexOf("R")
    indexno=memberid.length
    if (r!=0||indexno!==4)
    {
     alert('Member Id formart is incorrect!!')
     document.regform.orgId.focus();
        return false;
    }
    }
