@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Liste des Taches<button id="delete-selected" type="button" class="btn btn-danger float-right ml-2" data-toggle="tooltip" data-placement="top" title="Supprimer plusieurs"><i class="fa fa-trash" aria-hidden="true"></i></button><a class="btn btn-primary justify-content-center float-right" data-toggle="tooltip" data-placement="top" title="Ajouter" href="{{ route('taches.create') }}"><i class="fa fa-plus"></i></a>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('taches.deleteSelectedF') }}" method="POST" id="delete-form">
                        @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <th><input data-toggle="tooltip" data-placement="top" title="tous Cocher" type="checkbox" id="check-all"></th> <!-- Case à cocher pour tout cocher -->
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Etat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($taches as $tache)
                            <tr>
                                <td><input type="checkbox" class="culture-checkbox" name="culture_ids[]" value="{{ $tache->id }}"></td> <!-- Case à cocher individuelle -->
                                <td>{{ $tache->titre}}</td>
                                <td>{{ $tache->description ?? 'indefinie' }}</td>
                                <td>{{ $tache->etat == 1 ? 'Complétée' : 'Non complétée' }}</td>
                                <td>
                                    <a href="{{ route('taches.show', $tache->id) }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('taches.edit', $tache->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
       </div>
    </div>
</div>

<script>
    //Gérer la case à cocher "tout cocher"
    $('#check-all').change(function() {
        if (this.checked) {
            $('.culture-checkbox').prop('checked', true);
        } else {
            $('.culture-checkbox').prop('checked', false);
        }
    });
    $('#delete-selected').click(function() {
        var selectedCultures = [];
        // Parcourez toutes les cases à cocher individuelles
        $('.culture-checkbox:checked').each(function() {
            selectedCultures.push($(this).val());
        });

        if (selectedCultures.length === 0) {
            alert('Veuillez sélectionner au moins une tache à supprimer.');
            return;
        }

        // Déterminez le message en fonction du nombre d'éléments sélectionnés
        console.log(selectedCultures)
        var confirmationMessage = (selectedCultures.length === 1) ?
            'Voulez-vous vraiment supprimer cet élément ?' :
            'Voulez-vous vraiment supprimer ces éléments ?';

        // Affichez la boîte de dialogue de confirmation
        if (confirm(confirmationMessage)) {
            // Si l'utilisateur confirme, soumettez le formulaire de suppression
            $('#delete-form').submit();
        }
    });
</script>
@endsection
