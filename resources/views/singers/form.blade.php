<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Nombre:</label>
<input type="text" class="form-control" id="validationTooltip01" name="name" value="{{ isset($singer->name )?$singer->name:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Apellido:</label>
<input type="text" name="lastname" class="form-control" id="validationTooltip02" value="{{ isset($singer->lastname )?$singer->lastname:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Nombre Artístico:</label>
<input type="text" name="artisticname" class="form-control" id="validationTooltip03" value="{{ isset ($singer->artisticname)?$singer->artisticname:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su nombre artístico!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Edad:</label>
<input type="number" name="age" class="form-control" id="validationTooltip04" value="{{ isset($singer->age )?$singer->age:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su edad!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Género de Música:</label>
<input type="text" name="musicgenre" class="form-control" id="validationTooltip05" value="{{ isset($singer->musicgenre )?$singer->musicgenre:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su género de música!
    </div>
  </div>
<br><br>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>

