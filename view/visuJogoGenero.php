<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
?>

<div class="container mt-5" >
<form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
  <div class="col-8">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Gênero do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">Gênero</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Gênero do Jogo">
    </div>
  </div>
  <div class="col-2">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Gênero</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
<?php
$generoJogo = isset($_POST["generojogo"])? $_POST["generojogo"] : ""; 

$dado = visuJogoGenero($conn,$generoJogo);

foreach($dado as $generoJogo):
?>
    <tr>
      <th scope="row"><?=$generoJogo["idjogo"]?></th>
      <td><?=$generoJogo["nomejogo"]?></td>
      <td><?=$generoJogo["valorjogo"]?></td>
      <td><?=$generoJogo["generojogo"]?></td>

        <form action="../view/alterarformJogo.php" method="POST">
          <input type="hidden" value="<?=$nomeUsuarios["idjogo"]?>" name="idjogo">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td><?=$generoJogo["idjogo"]?></td>
    </tr>
<?php
endforeach;
?>   
    
  </tbody>
</table>

</div>


<?php
include_once("../view/footer.php");
?>