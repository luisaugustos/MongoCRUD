<div class="panel panel-default">
  <div class="panel-heading">Lista Portarias</div>
  <div class="panel-body">
    <p>
      <?php if($controller->resultados): ?>

      <?php foreach ($controller->resultados as $d): ?>
        <ul>
          <li><?php echo $d['identificacao'] . ' ' . $d['interessados'] . ' ' . $d['conteudo'] ?></li>
          <li>
            <a href="#">Editar</a>
            <a href="portaria/deletar/<?php echo $d['_id'] ?>">Deletar</a>
          </li>
        </ul>
      <?php endforeach ?>

      <?php else: ?>
      Sem portarias registardas!
    <?php endif ?>
    </p>
  </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <button class="pull-right btn btn-primary" onclick="window.location = 'portaria/inserir'">Incluir</button>
      </div>
    </div>
  </div>
</div>
