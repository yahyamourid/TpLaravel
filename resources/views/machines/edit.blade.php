@extends('adminlte::page')

@section('title')
Modifier une machine
@endsection
@section('content_header')
<h1>Modifier une machine</h1>
@endsection

@section('content')
  <div class="container">
  @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                       <h4>Editer une machine</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('machines.update',$machine->id)}}" class="mt-3" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="from-groupe mb-3">
                            <label for="reference">Reference</label>
                            <input type="text" placeholder="Reference" class="form-control" name="reference" value="{{old('reference',$machine->reference)}}">
                        </div>
                        <div class="from-groupe mb-3">
                            <label for="marque">Marque</label>
                            <input type="text" placeholder="Marque" class="form-control" name="marque" value="{{old('marque',$machine->marque)}}">
                        </div>
                        <div class="from-groupe mb-3">
                            <label for="prix">Prix</label>
                            <input type="number" placeholder="Prix" class="form-control" name="prix" value="{{old('prix',$machine->prix)}}">
                        </div>
                        <div class="from-groupe mb-3">
                            <label for="dateAchat">DateAchat</label>
                            <input type="date" placeholder="DateAchat" class="form-control" name="dateAchat" value="{{old('dateAchat',$machine->dateAchat)}}">
                        </div>
                        <div class="from-groupe mb-3">
                            <label for="salleid">salleid</label>
                            <input type="number" placeholder="salleid" class="form-control" name="salleid" value="{{old('salleid',$machine->salleid)}}">
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

