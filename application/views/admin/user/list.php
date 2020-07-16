<?php $this->load->view('header');?>
<?php $this->load->view('navbar');?>
<main class="p-4">
  	<div class="border p-4">
  		<h2>Usuarios</h2>
  		<div class="row">
	  		<div class="col-12 col-md-8 col-lg-6 pt-4">
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="container_search" placeholder="Filtrar por nombre">
					<div class="input-group-append">
						<button class="btn btn-outline-primary" type="button">Buscar</button>
					</div>
				</div>
			</div>
  		</div>
		<div class="col-lg-12 p-0">
			<a href="<?= base_url()?>User/new" class="btn btn-sm btn-primary" >Agregar usuario</a>
		</div>
  	</div>
  	<div class="pt-4" id="tableResult">
	  	<div>
			<div class="d-flex justify-content-between align-items-center">
				<label id="labelPages">Mostrar
					<select class="custom-select custom-select-sm" id="pagesPerRow" >
					</select>
					Registros
				</label>
			    <nav aria-label="..."  id='pagination'></nav>
            </div>
        </div>
  		<!-- Posts List -->
  		<div class="table-responsive">
			<table class="table table-sm table-bordered table-hover" id='postsList'>
			 	<thead class="thead-light">
			  		<tr>
				        <th>Editar</th>
				        <th>Nombre(s)</th>
				        <th>Apellidos</th>
			      	</tr>
			    </thead>
			    <tbody></tbody>
			</table>	
		</div>
  	</div>
</main>
<?php $this->load->view('footer');?>
<script type="text/javascript">
	$(document).ready(function(){
		// carga la paginacion
		loadPagination();
	});
   	function loadPagination(pageno=1){
   		//tomna el valor de registros por pagina
    	var pagesPerRow = $('#pagesPerRow').val();
    	var filter = $('#container_search').val();
    	//se hace la peticion para la paginacion
       	$.getJSON("<?= base_url();?>User/loadRecords/"+pageno+'/'+pagesPerRow,{Filter: filter})
		.done(function( json ) {
			console.log(json.pagination.result)
			// se asigna la paginacion al div correspondiente
			$('#pagination').html(json.pagination);
			//se vacia la tabla actual de los registros
            $('#postsList tbody').empty();
            //se recorren los registros para llenar la tabla
	        $.each( json.pagination.result, function(index,usr) {
	          	var tr = "<tr>";
	          	tr += "<td><a href='<?= base_url()?>User/edit/"+usr.id+"'><button class='btn btn-primary'>Edit</button></a></td>";
	          	tr += "<td>"+ usr.first +"</td>";
	          	tr += "<td>"+ usr.last +"</td>";
	          	tr += "</tr>";
	          	$('#postsList tbody').append(`
				  <tr>
				  	<td><a href='${base_url}User/edit/${usr.id}'><button class='btn btn-primary'>Edit</button></a></td>
					<td>${usr.first != null ? usr.first : ''}</td>
					<td>${usr.last != null ? usr.last : ''}</td>
				  </tr>
				`);
	        });
		})
		.fail(function( jqxhr, textStatus, error ) {
			notifyAlert('Internal Server Error','Please contact your support.',500);
	      	var err = textStatus + ", " + error;
	      	console.log("Request Failed: " + err );
	      	console.log("response Text: " + jqxhr.responseText );
	    });
	}
    $('#container_search').on('change',function(e){
		loadPagination();
	});
</script>
