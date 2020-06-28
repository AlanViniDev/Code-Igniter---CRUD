
<script>
function confirma(){
    if(!confirm("Deseja excluir ?")){
        return false;
    }
    return true;
}
</script>

<h2 class = "pt-1 m-2"> Arquivo de notícias </h2>
<div class = "row m-2">
<a href = "/news/create" class = "btn btn-success pt-1"> Nova notícia </a>
</div>

<table class = "table pt-1 m-2">
<tr> 
<th>Título</th>
<th>Ação</th>
</tr>
<?php if (!empty($news) && is_array($news)) : ?>
<?php foreach ($news as $news_item) : ?>
<tr>
<td> <a href = "<?php echo "/news/view/".$news_item['id'] ?>"> <?php echo $news_item['titulo']?></a></td>
<td> <a href = "<?php echo "/news/edit/".$news_item['id'] ?>">Editar</a></td>
<td> <a href = "<?php echo "/news/delete/".$news_item['id'] ?>" onclick = "return confirma()">Excluir</a></td>
</tr>
<?php endforeach; ?>
<?php  else : ?>
<tr> 
<td colspan = "1" class = "p-1">Nenhuma notícia encontrada</td>
<td> </td>
</tr>
<?php endif; ?>
</table>