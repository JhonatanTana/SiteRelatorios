function logar(){
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

if(login == "admin" && senha == "Cdc@123"){
    alert('Sucesso');
    location.href = "inicio.php";
}
else if(login == "logistica" && senha == "log2022"){
    alert('Sucesso');
    location.href = "log.html";
}
else if(login == "matriz" && senha == "Cdc@mat23"){
    alert('Sucesso');
    location.href = "Matriz/inicio.php";
}
else if(login == "filial" && senha == "Cdc@fil23"){
    alert('Sucesso');
    location.href = "Filial/inicio.php";
}
else {
  alert('Usuario ou senha incorretos');
}
}