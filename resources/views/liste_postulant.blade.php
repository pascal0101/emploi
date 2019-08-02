@extends('layouts.aceuil1')


@section('content')
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
             <center><h3 class="card-title"><i class="glyphicon glyphicon-folder-open"></i>Liste des postulant avec les emplois</h3></center> 

            </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
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
          </div>
         </div>
     </section>
     @endsection