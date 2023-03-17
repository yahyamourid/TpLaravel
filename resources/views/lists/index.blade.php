@extends('adminlte::page')

@section('title', 'Liste des machines par salle')

@section('content_header')
<pre>
    </pre>
    <h1 align="center">Listes des machines par salle</h1>
  
@stop

@section('content')
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Choisir une salle</h3>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{route('mshow.index')}}">
                        <div class="form-group">
                            <label>Salle</label>
                            <select class="form-control" name="salle_id">
                                @foreach($salles as $salle)
                                    <option value="{{ $salle->id }}">{{ $salle->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Afficher les machines</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

