@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Ajouter une Tache</h1>
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
                    <form action="{{ route('taches.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col mb-3">
                                <input type="text" placeholder="Titre" name="titre" class="form-control" id="titre" required>
                            </div>
                            <div class="col mb-3">
                                <input type="text" placeholder="Description" name="description" class="form-control" id="description">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="etat" name="etat" value="1">
                            <label class="form-check-label" for="etat">Tâche complétée ?</label>
                        </div>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
