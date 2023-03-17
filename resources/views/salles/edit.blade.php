@extends('adminlte::page')

@section('title')
Modifier une salle
@endsection
@section('content_header')
<h1>Modifier une salle</h1>
@endsection

@section('content')
  <div class="container">
  @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                       <h4>Modifier une salle</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('salles.update',$salle->id)}}" class="mt-3" method="post">
                        @csrf
                        @method('PUT')
                        <div class="from-groupe mb-3">
                            <label for="code">Code</label>
                            <input type="text" placeholder="Code" class="form-control" name="code" value="{{old('code',$salle->code)}}">
                        </div>
                        <div class="from-groupe mb-3">
                            <label for="libelle">Libelle</label>
                            <input type="text" placeholder="Libelle" class="form-control" name="libelle" value="{{old('libelle',$salle->libelle)}}">
                        </div>
                        <div class="from-groupe ">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
             
        </div>
    </div>
</div>
@endsection

