@extends('layouts.bootstrap')


@section('content')
<style type="text/css">
.col-md-8{
  margin:auto;

}

</style>
<body>
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 col-md-offset-5 col-sm-10 col-sm-offset-1">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
    <h3 class="card-title"><strong>POSTULANT</strong></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST">
                {{csrf_field()}}

                <div class="card-body">


                   <div class="form-group">
                    <label for="Prenom">Numero_Enregistrement</label>
                    <input type="Number" class="form-control"  name="Numero">
                  </div>

                  <div class="form-group has-error">
                    <label for="Nom" class="contol-label" >Nom</label>
                    <input type="text" class="form-control"  name="Nom">
                  </div>

                  <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control"  name="Prenom">
                  </div>


                   <div class="form-group">
                    <label for="Prenom">Sexe</label>

                    <select class="form-control"  name="Sexe">
                      <option>.............</option>
                      <option value= 'M' > Masculin</option>
                      <option value= 'F' > F&eacute;minin</option> 
                    </select>
                    

                  </div>


                   <div class="form-group">
                    <label for="Prenom">Télephone</label>
                    <input type="Number" class="form-control"  name="Telephone">
                  </div>



                   <div class="form-group">
                    <label for="Prenom">Adresse</label>
                    <input type="text" class="form-control"  name="Adresse">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info"id="valider"><i class="fa fa-check"></i>valider</button>
                  <button type="reset" class="btn btn-danger float-right"><i class="fa fa-close"></i>Annuler</button>
                </div>
                </div>
                </div>
               </div>
              </form>
            </div>

            <script type="text/javascript">
            $('#valider1').click(function(e){
                //alert('toto');
                   e.preventDefault();
                    $.ajax({
                        type:'post',
                        url:'page',
                        data:{
                          '_token':$('input[name=_token]').val(),
                          'nom':$('input[name=nom]').val(),
                          'prenom':$('input[name=prenom]').val()
                        },
                        success:function(data){
                          window.location.reload();
                        },
                      });
                });
            </script>
</body>
@endsection
