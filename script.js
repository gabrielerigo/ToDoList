$(document).ready(function(){

	$("#entradaUsuario").focus(function(){
		//$(this).val('');
	});

	$("#entradaUsuario").keydown(function(e){ // e = evento
		if (e.which == 13){
        		criaNovoToDo();
		}	

	});


	$("#addToDo").click(function(){
                criaNovoToDo();

	});               

	manipulaCheckbox();
        
        
	function criaNovoToDo(){
		var input = $("input[name=text]");
		var textoToDo = input.val();
		var item = 
			'<p class="item pendente">\
				<input type="checkbox" name="checkbox" class="one">\
				<label>' + textoToDo + '</label>\
				<img class="excluir" id="hey" src="imagens/lixeira.png"/>  \
			</p>';
                                          
		$("#items").append(item);
		input.val('');
                
                // MÈtodo GET de enviar dados para server
                /*$.get("cadastraToDo.php?toDo=" + textoToDo, function(data){
                    alert("Data: " + data);
                });*/
                
                
                
                // MÈtodo POST de enviar dados para server
                $.post("cadastraToDo.php", {
                    toDo: textoToDo
                },function(data){
                   // alert("Data: " + data);
                });  

		manipularExclusaoToDo();

	}
        
	function manipularExclusaoToDo(){
		$('.excluir').click(function(evento){
			var elementoClicado = $(this);
			
                        elementoClicado.parent().remove();

                        console.log(elementoClicado.attr('element_id'));

                    var toDel = elementoClicado.attr('element_id');
                    $.post('exclusaoToDo.php', {
                        toDel: toDel
                    }, function(data){
                      //  alert("Data: " + data);
                    });  

       		});
	}
        
    manipulaCheckbox();
    
    manipularExclusaoToDo();
    
}); 


function manipulaCheckbox(){
	// essa manipulaÁ„o de evento √© usada quando a p√°gina cria elementos din√¢micos
	$("body").on('click', 'input[name=checkbox]', function(){
                    var $this = $(this);
                    if (this.checked) {
                        $this.parent().addClass('concluido');
                    } else {
                        $this.parent().removeClass('concluido');
                    }
                });
                   
            
        	/*
		var novoLink = $(this).attr('src');
		$("#casal").attr('src', novoLink); */
	// Isso serve para quando o elemento j√° na tela ao iniciar o sistema e s√≥ pode ser chamado 
        // uma vez
	/*$("input[name=checkbox]").click(function(){
		alert('teste');
	});*/
}