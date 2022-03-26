<label for="name">Nombre:</label>
<input type="text" name="name" id="" value="{{ isset ($singer->name)?$singer->name:''}}">
<label for="lastname">Apellido:</label>
<input type="text" name="lastname" id="" value="{{ isset ($singer->lastname)?$singer->lastname:''}}">
<label for="artisticname">Nombre artístico:</label>
<input type="text" name="artisticname" id="" value="{{ isset ($singer->artisticname)?$singer->artisticname:''}}">
<label for="age">Edad</label>
<input type="text" name="age" id="" value="{{ isset ($singer->age)?$singer->age:''}}">
<label for="musicgenre">Genero de música:</label>
<input type="text" name="musicgenre" id="" value="{{ isset ($singer->musicgenre)?$singer->musicgenre:''}}">
<button type="submit">Guardar</button>