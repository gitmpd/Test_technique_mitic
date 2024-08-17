@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tache : {{ $tache->titre }}</h1>
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Description :</strong> {{ $tache->description ?? 'indéfinie' }}</p>
                    <p><strong>Etat:</strong> {{ $tache->etat == 1 ? 'Complétée' : 'Non complétée' }} </p>
                </div>
            </div>
            <a href="{{ route('taches.index') }}" class="btn btn-success mb-2 mt-2">Retour</a>
        </div>
    </div>
</div>
@endsection
