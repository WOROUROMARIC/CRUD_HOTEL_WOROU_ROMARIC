<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center" >
        <div class="row">
            <div class="col s12">
                <h1>liste de chambres</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Création d'une chambre</a>
                <hr>

                @if(session('Status'))
                <div  class="alert alert-success" role="alert">
                  {{session('Status')}}
                </div>
              @endif

                <table class="table">
                    <thead>
                     <tr>
                         <th>N°</th>
                         <th>Nom de l'Hotel</th>
                         <th>Description de l'Hotel</th>
                         <th>NOM DE LA CHAMBRE</th>
                         <th>Prix</th>
                         <th>Nombre de lits</th>
                         <th>Max d'adultes</th>
                         <th>Enfants maximum autorisé</th>
                         <th>Attributs</th>
                         <th>Status</th>
                         <th>Actions</th>
                     </tr>
                    </thead>
                     
                    <tbody>

                      @php
                      $ide =1 ;
                   @endphp

                      @foreach ($hotels as $hotel )
                        <tr>
                            <td>{{$ide}}</td>
                            <td>{{$hotel->Nom_de_lHotel}}</td>
                            <td>{{$hotel->description_de_lHotel}}</td>
                            <td>{{$hotel->nom_de_la_chambre}}</td>
                            <td>{{$hotel->prix}}</td>
                            <td>{{$hotel->Nombre_de_lits}}</td>
                            <td>{{$hotel->max_dadultes}}</td>
                            <td>{{$hotel->Enfants_maximum_autorisé}}</td>
                            <td>{{$hotel->Attributs}}</td>
                            <td>1{{$hotel->Status}}</td>
                            <td>
                              <a href="/update_hotel/{{$hotel->id}}"  class="btn btn-info">Update</a> 
                              <a href="/delete_hotel/{{$hotel->id}}"  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php
                         $ide +=1 ;
                         @endphp
                        @endforeach
                    </tbody>
                 </table>
                 {{$hotels->links()}}
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>