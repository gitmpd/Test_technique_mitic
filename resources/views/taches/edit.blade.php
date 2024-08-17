@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Modifier une Tache</h1>
                </div>
                <div class="card-body">
                    @if ($message = session('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('taches.update', $tache->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <label for="titre">Titre</label>
                                <input type="text" name="titre" class="form-control" value="{{ $tache->titre }}">
                            </div>
                            <div class="col">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $tache->description ?? 'indefini' }}">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <!-- Champ caché pour envoyer la valeur 0 si la case n'est pas cochée -->
                            <input type="hidden" name="etat" value="0">
                            <!-- Case à cocher pour envoyer la valeur 1 si elle est cochée -->
                            <input type="checkbox" class="form-check-input" id="etat" name="etat" value="1" {{ $tache->etat == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="etat">Tâche complétée ?</label>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
