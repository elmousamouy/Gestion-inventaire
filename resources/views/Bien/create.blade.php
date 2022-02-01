@extends('Layouts.main')

@section('content')
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Ajouter un nouveau Bien') }}          
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="{{route('bien.store')}}" method="POST" enctype="multipart/form-data" class="m-5">
      @csrf
        <div class="form-row">
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Categorie') }}</label>
            <select class="form-control" id="nom_entreprises" name="categorie_id">
              <option selected>Choose...</option>
              @foreach ($categories as $categorie)
              <option value="{{ $categorie->id }}">{{ $categorie->nom_cat }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Entreprises') }}</label>
              <select class="form-control" id="entreprises" name="entreprise_id">
                <option selected>Choose...</option>
                @foreach ($entreprises as $entreprise)
                <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprises }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Referance') }}</label>
            <input type="text" class="form-control" name="referance">
            <span class="text-danger ">@error('referance') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Duree') }}</label>
            <input type="text" class="form-control"  name="duree_ammortissement"  value="">
            <span class="text-danger ">@error('site') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Site') }}</label>
            <input type="text" class="form-control" name="site">
            <span class="text-danger ">@error('site') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Sous Site') }}</label>
            <input type="text" class="form-control" name="sous_site">
            <span class="text-danger ">@error('sous_site') {{$message}} @enderror</span>
          </div>

          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Emplacement') }}</label>
            <input type="text" class="form-control" name="emplacement">
            <span class="text-danger ">@error('emplacement') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Code Barre') }}</label>
            <input type="text" class="form-control" name="code_barre">
            <span class="text-danger ">@error('code_barre') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Designation') }}</label>
            <input type="text" class="form-control" name="designation">
            <span class="text-danger ">@error('designation') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __("Date d'achat") }}</label>
            <input type="date" class="form-control" name="date_achat">
            <span class="text-danger ">@error('date_achat') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Fournisseur') }}</label>
            <input type="text" class="form-control" name="fournisseur">
            <span class="text-danger ">@error('fournisseur') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('N° serie') }}</label>
            <input type="text" class="form-control" name="n_serie">
            <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
          </div>
  
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('N° facture') }}</label>
            <input type="text" class="form-control"  name="n_factur">
            <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Prix acht') }}</label>
            <input type="text" class="form-control" name="prix_achat">
            <span class="text-danger ">@error('prix_acht') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Date mise enservice') }}</label>
            <input type="date" class="form-control" placeholder="date" name="date_mise_enservice"  value="">
            <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
          </div>

          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Quantitee') }}</label>
            <input type="text" class="form-control" placeholder="duree" name="quantitee"  value="">
            <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
          </div>

          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Factur') }}</label>
            <input type="file" class="form-control"  name="factur">
            <span class="text-danger ">@error('factur') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Code comptable') }}</label>
            <input type="text" class="form-control"  name="code_comptable"  value="">
            <span class="text-danger ">@error('code_comptable') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Compte comptable') }}</label>
            <input type="text" class="form-control"  name="compte_comptable"  value="">
            <span class="text-danger ">@error('code_comptable') {{$message}} @enderror</span>
          </div>

          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Sous fammille') }}</label>
            <input type="text" class="form-control" name="sous_famille">
            <span class="text-danger ">@error('sous_famille') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Description famille') }}</label>
            <input type="text" class="form-control" name="description_famille"  value="">
            <span class="text-danger ">@error('description_famille') {{$message}} @enderror</span>
          </div>

          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('N° BC') }}</label>
            <input type="text" class="form-control"  name="n_bc">
            <span class="text-danger ">@error('n_bc') {{$message}} @enderror</span>
          </div>
          <div class="form-group input-group-sm col-md-2">
            <label for="name">{{ __('Categorie') }}</label>
            <select class="form-control" id="affictation" name="affictation">
              <option selected>Choose...</option>
              <option  value="1">AFFICTER</option>
              <option value="0" >NON AFFICTER</option>
            </select>
          </div>
        </div>
          <center><button type="submit" class="btn btn-primary">Enregestrer</button></center>
      </form>
    </div>
  </div>
@endsection