<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8"/>
		<link rel = "stylesheet" href = ""/>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<script src = ""></script>
		<title> CRUD </title>
	</head>
	<body>
		<h1> CRUD </h1>
		<form  class = "create" method = "POST">
			<input type = "numeric" class = "borderRecebido" placeholder = "" id = "venda" /><br/>
            <button  name = "create"  onclick = "calcularCompra()" type = "submit">Create</button>	
		</form>
        <br/>
        <form  class = "update" method = "POST">
        <input  class = "inputCompra borderVenda" type = "numeric" placeholder = ""  id = "compra"/><br/>
			<button  name = "update"  class = "backVenda" onclick = "calcularVenda()" type = "submit">Update</button>
		</form>
        <br/>
        <form  class = "delete" method = "POST">
        <input  class = "inputCompra borderVenda" type = "numeric" placeholder = ""  id = "compra"/><br/>
			<button  name = "delete"  class = "backVenda" onclick = "calcularVenda()" type = "submit">Delete</button>
		</form>

	</body>
</html>