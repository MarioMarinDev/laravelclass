<form action="{{ route('validation.store') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control"/>
    @include('partials.forms.error', ['field' => 'name'])
  </div>

  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea name="description" id="description" rows="2" class="form-control"></textarea>
    @include('partials.forms.error', ['field' => 'description'])
  </div>

  <div class="form-group">
    <label for="value">Valor</label>
    <input type="number" id="value" name="value" class="form-control"/>
    @include('partials.forms.error', ['field' => 'value'])
  </div>

  <div class="form-group">
    <label for="file">Archivo TXT</label>
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="file" name="file">
        <label class="custom-file-label" for="file">Seleccionar acrhivo</label>
      </div>
    </div>
    @include('partials.forms.error', ['field' => 'file'])
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="active" id="active">
      <label class="form-check-label" for="active">
        Activo
      </label>
    </div>
    @include('partials.forms.error', ['field' => 'active'])
  </div>

  <hr/>

  <div class="form-group">
    <a href="{{ $back }}" class="btn btn-secondary">
      Cancelar
    </a>
    <button type="submit" class="btn btn-success">
      Guardar
    </button>
  </div>

</form>
