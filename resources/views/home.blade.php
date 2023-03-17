@extends('adminlte::page')

@section('title')
Home
@endsection
@section('content_header')
<h1>Dashboard</h1>
@endsection

@section('content')
  <div >
    <div class="row my-4">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\salle::count()}}</h3>
                    <p>salles</p>
                </div>
           
            
           
           <a href="{{url('admin/salles')}}" class="small-box-footer">
           Plus d'informations <i class="fas fa-arrow-circle-right"></i>
           </a>
           </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{\App\Models\machine::count()}}</h3>
                    <p>machines</p>
                </div>
           
            
           
           <a href="{{url('admin/machines')}}" class="small-box-footer">
           Plus d'informations <i class="fas fa-arrow-circle-right"></i>
           </a>
           </div>
        </div>
    </div>
    
</div>
@endsection

