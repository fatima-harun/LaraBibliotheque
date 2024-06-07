<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Page d'inscription</title>
</head>
<body>
<form action="{{route('traitement')}}" method="POST">
  @method('post')
  @csrf
<div class="mb-3">
  <!-- {{ old('nom') }} est utilisé pour récupérer la valeur précédemment soumise pour le champ nom -->
    <label for="exampleInputPassword1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nom" value="{{ old('nom') }}">
    @error('nom')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" value="{{ old('prenom') }}">
    @error('prenom')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="telephone" value="{{ old('telephone') }}">
    @error('telephone')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
    @error('email')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" value="{{ old('adresse') }}">
    @error('adresse')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <!-- Au niveau du mot de passe on ne met pas de value="{{ old('mdp') }}" parce que l'utilisateur doit créer un nouveau mot de passe lorsque ça échoue -->
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" >
    @error('mdp')
    <div class="text text-danger">
       {{$message}}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Inscription</button>
  <p>Déja un compte ? <a href="">Connectez-vous</a></p>
</form>
</body>
</html>{{old('nom')}}