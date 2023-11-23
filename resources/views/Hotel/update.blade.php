<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container" >
        <div class="row">
            <div class="col s12">
                <h1>Modifier les informations de l'hotel </h1>
                <hr>

                @if(session('Status'))
                  <div  class="alert alert-success" role="alert">
                    {{session('Status')}}
                  </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error) 
                       <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>


                <form  action="/update/traitement" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{$hotels->id}}">
                    <div class="form-group">
                        <label for="Nom_de_lHotel" class="form-label">Nom de l'Hotel</label>
                        <input type="text" class="form-control" value="{{$hotels->Nom_de_lHotel}}" id="Nom_de_lHotel"  name="Nom_de_lHotel"> 

                    </div>

                    <div class="form-group">
                        <label for="description_de_lHotel" class="form-label">Description de l'hotel</label>
                        <input type="text" class="form-control" value="{{$hotels->description_de_lHotel}}" id="description_de_lHotel"  name="description_de_lHotel">   
                    </div>

                    <div class="form-group">
                        <label for="nom_de_la_chambre" class="form-label">Nom de la chambre</label>
                        <input type="text" class="form-control" value="{{$hotels->nom_de_la_chambre}}" id="nom_de_la_chambre"  name="nom_de_la_chambre">   
                    </div>

                    <div class="form-group">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" class="form-control" value="{{$hotels->prix}}" id="prix"  name="prix">   
                    </div>

                    <div class="form-group">
                        <label for="Nombre_de_lits" class="form-label">Nombre de lits</label>
                        <input type="text" class="form-control" id="Nombre_de_lits" value="{{$hotels->Nombre_de_lits}}"  name="Nombre_de_lits">   
                    </div>

                    <div class="form-group">
                        <label for="max_dadultes" class="form-label">Max d'adultes</label>
                        <input type="text" class="form-control" id="max_dadultes" value="{{$hotels->max_dadultes}}" name="max_dadultes">   
                    </div>

                    <div class="form-group">
                        <label for="Enfants_maximum_autorisé" class="form-label">Enfants maximum autorisé</label>
                        <input type="text" class="form-control" id="Enfants_maximum_autorisé" value="{{$hotels->Enfants_maximum_autorisé}}"   name="Enfants_maximum_autorisé">   
                    </div>


                    <div class="form-group">
                        <label for="Attributs" class="form-label">Attributs</label>
                        <select name="Attributs" id="Attributs" value="{{$hotels->Attributs}}" class="form-control multiple-task" >
                          <option value="disponible" >Services de nettoyage</option>
                          <option value="disponible" >Services de Reveil</option>
                          <option value="disponible" >Television</option>
                          <option value="non_disponible" >Petit dejeunner</option>
                          <option value="non_disponible" >Autres</option>

                        </select>
                        
 
                    </div>

                    <div class="form-group">
                        <label for="Status" class="form-label">Status</label>
                        <select name="Status" id="Status" value="{{$hotels->Status}}"  class="form-control multiple-task">
                            <option value="disponible" >Disponible</option>
                            
                            <option value="non_disponible" >Non disponible</option>
                          </select>  
                    </div>

                    

                  
                    <br>
                    
                    <button type="submit" class="btn btn-primary">AOUTER LES informations </button>
                    <br>
                    <br>
                    <a href="/hotel" class="btn btn-danger">Revenir aux infoamations</a>
                </form>
            

                   
               
            </div>
    </div>

    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>