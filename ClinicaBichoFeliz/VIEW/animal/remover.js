function remover(id, nome){
    if(confirm("Você tem Certeza de que Deseja remover o Animal "+ id +" - " + nome + "?")){
        location.href = "remAnimal.php?id="+id;
    }
}