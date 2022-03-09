@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-1">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter</button>

            </div>
        </div>
       
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle demande</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Type de la demande:</label>
                <select  name="type_demande" class="form-control" id="recipient-name">
                    <option value="mep">Action Mep</option>
                    <option value="service">demande de service</option>
                    <option value="incident">Incident</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Date d'atterissage:</label>
                <input type="date" name="date_att" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">demandeur:</label>
                <input type="text" name="demandeur" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">description:</label>
                <textarea class="form-control" name="description" id="message-text"></textarea>
              </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Durée d'intervention:</label>
                <input type="text" name="duree" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">nombre d'intervenat</label>
                <input type="integer" name="nombre_intervenant" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">nombre d'intervenat externe</label>
                <input type="integer" name="nombre_intervenant_externe" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">dependance de l'action avec entité externe:</label>
                <input type="text" name="dependance" class="form-control" id="recipient-name">
            </div>
            
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
        <table class="table table-striped ">
            <thead>
              <tr>
                
                <th scope="col">Type de la demande</th>
                <th scope="col">Date d'atterissage</th>
                <th scope="col">Demandeur</th>
                <th scope="col">Description/Commentaire</th>
                <th scope="col">Durée</th>
                <th scope="col">Nombre d'intervenats</th>
                <th scope="col">nombre d'intervenat externe</th>
                <th scope="col">Dependance</th>
              </tr>
            </thead>
            <tbody>
                @foreach($demandes as $demande )
              <tr>
                <th scope="row">{{$demande->type_demande}}</th>
                <th scope="row">{{$demande->date_atterissage}}</th>
                <th scope="row">{{$demande->demandeur}}</th>
                <th scope="row">{{$demande->description}}</th>
                <th scope="row">{{$demande->duree}}</th>
                <th scope="row">{{$demande->nombre_intervenat}}</th>
                <th scope="row">{{$demande->nombre_intervenat_externe}}</th>
                <th scope="row">{{$demande->dependance_entite_voisine}}</th>
                
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
