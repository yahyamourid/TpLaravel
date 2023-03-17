@extends('adminlte::page')

@section('title')
Liste des salles
@endsection
@section('content_header')
<h1>Liste des salle </h1>
@endsection

@section('content')
  <div class="container">
    
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                       <h4>Salles</h4>
                    </div>
                </div>
                <div class="card-body">
                <table id="mytable" class="table table-bordered table-stripped" style="text-align:center">
                    <thead>
                    <tr>
                            <th>Id</th>
                            <th>code </th>
                            <th>libelle</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salles as $key=> $salle)
                        <tr>
                            <td>{{$salle->id}}</td>
                            <td>{{$salle->code}}</td>
                            <td>{{$salle->libelle}}</td>
                            <td class="d-flex justift-content-center align-items-center">
                                
                                <a href="{{route('salles.edit',$salle->id)}}" class="btn btn-sm btn-warning mx-2">
                                <i class="fas fa-edit"></i></a>
                                <form id ="{{$salle->id}}" action="{{route('salles.destroy',$salle->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <button onclick="deleteAd({{$salle->id}})" type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i></button>


                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>

            </div>
             
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

    @if(session()->has("success"))
        <script>
             Swal.fire({
  title: "{{session()->get('success')}}",
  showClass: {
    popup: 'animate_animated animate_fadeInDown'
  },
  hideClass: {
    popup: 'animate_animated animate_fadeOutUp'
  }
})
        </script>
    @endif
    <script>
        function deleteAd(id){
    Swal.fire({
        title: 'Tu es sur?',
        text: "Vous ne pourrez pas revenir en arrière!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer !',
        cancelButtonText: 'Non, annuler!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(id).submit();
        } else if (result.isDenied) {
            Swal.fire(
                'Annulé',
                'Es-tu sur d\'annuler ?',
                'Erreur'
            )
        }
    })
}

    </script>
@endsection

