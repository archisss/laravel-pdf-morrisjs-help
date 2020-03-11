@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Agregar Servicio</h3>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<form action="" method="POST" class="p-4">
					@csrf
					<div class="form-group">
						<label>Servicio</label>
						<input class="form-control" type="text" name="cliente" placeholder="Ejemplo: Servicio de limpieza">
					</div>
					<div class="form-group">
                            <label for="ulDescripcion">Descripción</label>
	                    	<ul class="ulDescripcion">
	                    		<li><input class="form-control nuevoListItem" type="text" name="descripcion[]" placeholder="Ingresa la descripción del servicio"></li>
	                    	</ul>	
	                    </div>
					<div class="btnrow text-center">
                        <button type="button" class="btn btn-warning addRow">Agregar fila</button>
                    </div>
					<button type="submit" class="btn btn-primary">Agregar</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row pt-5">
		<div class="col-lg-12">
			<div class="card">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Servicio</th>
				      <th scope="col">Descripciones</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr>
				  		<td>#</td>
				  		<td>First</td>
				  		<td>Second</td>
				  	</tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection