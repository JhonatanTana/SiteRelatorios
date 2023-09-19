function logar(){
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

if(login == "admin" && senha == "Cdc@123"){
    alert('Sucesso');
    location.href = "inicio.html";
}
else if(login == "logistica" && senha == "log2022"){
    alert('Sucesso');
    location.href = "log.html";
}
else {
  alert('Usuario ou senha incorretos');
}
}