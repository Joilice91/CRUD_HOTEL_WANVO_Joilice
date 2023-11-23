<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>liste</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css\formulaire.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>

<div><br><br>
    <a href="/Inscription"  class="btn btn-danger">Liste des Chambres</a>
</div><br><br>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
        @if(session('sms'))
          <div    class="alert alert-success"> 
          {{session('sms')}}
          </div> 
        @endif
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
                        
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>#</th>
						<th>Nom</th>
						<th>Description</th>
						<th>Nombre de chambre</th>
                        <th>Prix</th>
						<th>Nombre de lits</th>
                        <th>Nombre d'adulte au max</th>
                        <th>Nombre d'enfant au max</th>
                        <th>Attribut</th>
                        <th>Statut</th>
					
					
					
					
					
					</tr>
				</thead>
				<tbody>
                      @foreach($list as $chambre)
					<tr>
						<td</div> 
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="">
								<label for="checkbox1"></label>
						 	</span>
						</td>
						
						<td>{{ $chambre->id}}</td>
						<td>{{ $chambre->nom}}</td>
						<td>{{ $chambre->description}}</td>
						<td>{{ $chambre->nom_ch}}</td>
                        <td>{{ $chambre->prix}}</td>
                        <td>{{ $chambre->lits}}</td>
                        <td>{{ $chambre->adultes}}</td>
                        <td>{{ $chambre->enfants}}</td>
                        <td>{{ $chambre->attributs}}</td>
                        <td>{{ $chambre->statut}}</td>
						<td>
							<a href="/update-ch/{{ $chambre->id}}">update</a>
						</td>
						<td>

								@csrf
								<button type="submit">SUPPRIMER</button>
							</form>
						</td>
					</tr>
					@endforeach 
				</tbody>
			</table>
			
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->


<!-- Delete Modal HTML -->

</body>
</html>