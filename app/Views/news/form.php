<h2 class = "pt-3 m-5"> <?php echo isset($id) ? "Editando Notícia" : "Nova Notícia" ?> </h2>
<?php echo \Config\Services::validation()->listErrors(); ?>

<form action = "/news/store" method="post">

<div class = "form-group pt-3 m-5">
<label for = "titulo"> Titulo </label>
<input type = "text" class = "form-control" name = "titulo" id = "titulo" value = "<?php echo isset($titulo) ? $titulo : '' ?>">

</input>
</div>

<div class = "form-group pt-3 m-5">
<label for = "body"> Noticia </label>
<textarea  class = "form-control" name = "body" id = "body" col = "30" rows = "10">
<?php echo isset($body) ? $body : '' ?>
</textarea>
</div>

<input type = "hidden" name = "id"  value="<?php echo isset($id) ? $id : '' ?>">

<div class = "form-group pt-2 m-5">
<input type = "submit" value = "Salvar" class = "btn btn-primary" />
</div>
</form>