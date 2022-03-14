<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
?>

<div class="container mt-5" >
<form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
  <div class="col-8">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do Jogo">
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
$nomejogo = isset($_POST["nomejogo"])? $_POST["nomejogo"] : ""; 

$dado = visuJogoNome($conn,$nomejogo);

foreach($dado as $nomejogo):
?>
    <tr>
      <th scope="row"><?=$nomejogo["idjogo"];?></th>
      <td><?=$nomejogo["nomejogo"]?></td>
      <td><?=$nomejogo["valorjogo"]?></td>
      <td><?=$nomejogo["generojogo"]?></td>
      <td>
        <form action="../view/alterarformJogo.php" method="POST">
          <input type="hidden" value="<?=$nomejogo["idjogo"]?>" name="codigoJogo">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td><?=$nomejogo["idjogo"]?></td>
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