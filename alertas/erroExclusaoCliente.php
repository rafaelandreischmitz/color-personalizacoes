﻿<style>
	#exibeAlerta{
		background-color: #ffb3b3;
		margin-left: 5%;
		width: 90%;
		height: 50px;
	}
	#alerta{
		font-family:Calibri;
		font-size:20px;
		font-weight:bold;
		text-align:center;
		padding-top: 1%;
	}
	#botaoAlerta{
		float:right;
		background-color:transparent;
		border-color:transparent;
		margin-top: -2%;
		margin-right: 1%;
	}
</style>

<script>
function fecharAlerta(){
	var alerta=document.getElementById("exibeAlerta");
	alerta.parentNode.removeChild(alerta);
}
</script>
<div id="exibeAlerta">
	<div id="alerta">
		Não é possível excluir esse cliente!
	</div>
	<div>
	<button type="button" id="botaoAlerta" onclick="fecharAlerta()"><img src="../img/excluir.png"></button>
	</div>
</div>
