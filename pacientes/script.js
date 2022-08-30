function confirmarExclusao(cpf, nome, sobrenome) {
    if(window.confirm("Deseja excluir o registro: \n" + cpf + " - " + nome + " " + sobrenome ))
    window.location = "excluirPessoa.php?cpf=" + cpf;
}

$(document).ready(function(){
    $("#form-pesquisa").submit(function(evento){
        evento.preventDefault();
        let pesquisa = $("#pesquisa").val();
        let dados = {pesquisa : pesquisa}

        $.post("buscaPessoa.php", dados, function(retorna){
            $(".resultados").html(retorna);
        });
    });
});