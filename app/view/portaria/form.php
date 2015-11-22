<div class="panel panel-default">
  <div class="panel-heading">Cadastro Portarias</div>
  <div class="panel-body">
    <form class="form" id="form" role="form" method="post" action="portaria/save">
      <div class="row">
        <div class="col-md-6">
          <input type="hidden" name="id" id="id" value="">

          <div class="form-group">
            <label for="identificacao" class="required">Identificação da Portaria:</label>
            <input type="text" class="form-control required" id="numero" name="identificacao" placeholder="Portaria nº 273/GDG/IFC-CAM/2015" value="">
          </div>

          <div class="form-group">
            <label for="numero" class="required">Numero:</label>
            <input type="text" class="form-control required" id="numero" name="numero" placeholder="Numero Portaria" value="">
          </div>

          <div class="form-group">
            <label for="date" class="required">Data Portaria:</label>
            <input type="date" class="form-control" id="data" name="data" value=""/>
          </div>

          <div class="form-group">
            <label for="interessados" class="required">Interessados:</label>
            <input type="interessados" class="form-control" id="interessados" name="interessados" value=""/>
          </div>

          <div class="form-group">
            <label for="conteudo" class="required">Conteudo:</label>
            <textarea type="conteudo" class="form-control" id="conteudo" name="conteudo" row="7"></textarea>
          </div>

        </div>
      </div>

    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <button type="submit" class="pull-right btn btn-primary">Salvar</button>
        </div>
      </div>
    </form>
  </div>
</div>
