function VerifyRegister()
{
    let user     = document.getElementById("loginEmail").value;
    let pswr     = document.getElementById("loginSenha").value;
    let pswrConf = document.getElementById("loginSenhaConfirm").value;

    if (!user || !pswr)
    {
        alert("Campos de preenchimento obrigatório. Favor preencher!");
    }
    else
    {
        if (pswr != pswrConf)
        {
            alert("As senhas devem ser iguais!")
        }
        else
        {
            alert("Campos preenchidos com sucesso!");
        }
    }
}

function VerifyLogin()
{
    let user = document.getElementById("loginEmail").value;
    let pswr = document.getElementById("loginSenha").value;

    if (!user || !pswr)
    {
        alert("Campos de preenchimento obrigatório. Favor preencher!");
    }
    else
    {
        alert("Campos preenchidos com sucesso!");
    }
}