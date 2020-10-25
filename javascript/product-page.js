let log = console.log;
function CepCheck(cep)
{
    log("função em desenvolvimento");
    if(cep.length > 6){
        document.getElementById('endereco').innerHTML = 'Rua Anhanhanha';
        document.getElementById('numero').innerHTML = '777';
        document.getElementById('estado').innerHTML = 'SP';
        document.getElementById('cidade').innerHTML = 'Guarulhos';    
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