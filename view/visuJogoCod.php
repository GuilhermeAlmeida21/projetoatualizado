<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
?>

<div class="container mt-5" >
<form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
  <div class="col-8">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do Jogo</label>
    <div class="input-group">
      <div class="input-group-text">Código</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Código do Jogo">
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
$codigojogo = isset ($_POST["codigoJogo"])? $_POST["codigoJogo"]:"" ;

if($codigojogo){

$dado = visuJogoCodigo($conn,$codigojogo);

if($dado){

?>
    <tr>
      <th scope="row"><?=$codigoJogo["idJogo"];?></th>
      <td><?=$codigoJogo["nomeJogo"]?></td>
      <td><?=$codigoJogo["valorJogo"]?></td>
      <td><?=$codigoJogo["generoJogo"]?></td>
      <td>
        <form action="../view/alterarformJogo.php" method="POST">
          <input type="hidden" value="<?=$nomeUsuarios["idJogo"]?>" name="codigoJogo">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        
      </td>
      <td><?=$codigoJogo["idJogo"]?></td>
    </tr>
<?php
}
}
?>   
    
  </tbody>
</table>

</div>


<?php
include_once("../view/footer.php");
?>