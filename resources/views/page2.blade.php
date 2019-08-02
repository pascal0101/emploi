<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="DataTables_2/datatables.min.css">
  <link rel="stylesheet" href="DataTables_2/DataTables-1.10.18/css/jquery.dataTables.min.css">
   <script type="text/javascript" src="jquery/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="jquery/js/jquery-1.9.1.js"></script>
</head>
<body style="font-family: Arial">

<form id="form1" runat="server">
		<div style="width: 1000px; border: 1px ; padding: 3px;margin: 170px ">
		<table id="datatable">
			<thead>
				 <tr>
                  <th>Numero</th>
                  <th>Code</th>                 
                  <th>Nom</th>
                  <th>Prenom</th>               
                  <th>Sexe</th>
                  <th>Téléphone</th>
                  <th>Adresse</th>
                </tr>
			</thead>
 					        <?php $i=1;?>
                @foreach($postulants as $postulant)
                <tbody>
      
                  <td>{{($i++)}}</td>
                  <td>{{($postulant->Num_post)}}</td>
                  <td>{{($postulant->Nom_post)}}</td>
                  <td>{{($postulant->Prenom_post)}}</td>
                  <td>{{($postulant->Sexe)}}</td>
                  <td>{{($postulant->Tél)}}</td>
                  <td>{{($postulant->Adre)}}</td>

                </tr>               
                </tbody>
                @endforeach

		</table>
		</div>
		</form>
<script type="text/javascript" src="DataTables_2/datatables.min.js"></script>
<script type="text/javascript" src="DataTables_2/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').dataTable({
			"language":{
    "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    }

		}
   
		});

		});
</script>
</body>
</html>
