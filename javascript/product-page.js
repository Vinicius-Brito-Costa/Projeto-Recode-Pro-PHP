let log = console.log;
function CepCheck(cep)
{
    log("função em desenvolvimento");
    if(cep.length > 1){
        document.getElementById('endereco').value = "Rua Anhanhanha";
        document.getElementById('numero').value = "777";
        document.getElementById('estado').value = "SP";
        document.getElementById('cidade').value = "Guarulhos";
        document.getElementById('telefone').value = 9999999999;    
    }
}
function PrecificarTotal(valor)
{
    let quantidade = Math.round(document.getElementById('quantidade').value);
    let elemento = document.getElementsByClassName('valor-total')[0];
    if(quantidade < 1)
    {
        quantidade = 1
    }
    elemento.innerHTML = "R$ " + (valor * quantidade).toFixed(2);
    
}