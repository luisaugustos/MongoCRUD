<div class="panel panel-default">
    <div class="panel-heading">Lista Portarias</div>
    <div class="panel-body">
        <p>
          <?php
            foreach ($array as $d) {
              var_dump($d);
            }
          ?>

        </p>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <button class="pull-right btn btn-primary">Incluir</button>
            </div>
        </div>
    </div>
</div>
