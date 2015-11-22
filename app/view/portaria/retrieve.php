<div class="panel panel-default">
    <div class="panel-heading">Lista Portarias</div>
    <div class="panel-body">

        <?php if ($controller->resultados): ?>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Portaria</th>
                        <th style="width: 220px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->resultados as $d) { ?>
                        <tr>
                            <td><?php echo $d['identificacao'] . ' ' . $d['interessados'] . ' ' . $d['conteudo'] ?></td>

                            <td class="text-right">
                                <a class="btn btn-default" href="#">Editar</a>
                                <a class="btn btn-default" href="portaria/deletar/<?php echo $d['_id'] ?>">Deletar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php else: ?>
            Sem portarias registardas!
        <?php endif ?>
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
