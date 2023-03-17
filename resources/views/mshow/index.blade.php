@extends('adminlte::page')

@section('title', 'Liste des machines')

@section('content_header')
    <h1>Liste des machines</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Les machines de la salle :  {{$salles->first()->libelle }}</h3>
                </div>
                <div class="card-body">
                    <table  id ="mytable" class="table table-bordered" style="text-align:center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Référence</th>
                                <th>Marque</th>
                                <th>dateAchat</th>
                                <th>prix</th>
                                <th>salleid</th>
                                
                            </tr>    
                        </thead>
                        <tbody>
                        @foreach ($machines as $machine)
            <tr>
                <td>{{ $machine->id }}</td>
                <td>{{ $machine->reference }}</td>
                <td>{{ $machine->marque}}</td>
                <td>{{ $machine->dateAchat }}</td>
                <td>{{ $machine->prix }}</td>
                <td>{{ $machine->salleid}}</td>
            </tr>
        @endforeach
                    <table>
                    <a href="#" onclick="history.back();" class="btn btn-primary">Retour</a>
                </div>
            </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#mytable').DataTable({
            dom:'Bfrtrip',
            buttons:[
                'copy','excel','csv','pdf','print'
            ]
        })
    });
    
</script>
@endsection
