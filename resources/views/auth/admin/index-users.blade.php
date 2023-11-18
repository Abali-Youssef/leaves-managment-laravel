@extends('auth.admin.layout')
@section('content')
@if(Session::has('success'))
<script>
  Swal.fire({
  position: 'top',
  icon: 'success',
  title: '{{ Session::get('success')}}',
  showConfirmButton: false,
  timer: 2000,
})
</script>
@endif
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Utilisateurs </h1>
                        <ol class="breadcrumb mb-4">
                            
                        </ol>
                        <div class="d-flex justify-content-between mb-3">
  <a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-add ml-3"></i></a>


  <form action="{{route('users.search')}}" method="get"> <div class="form-group">
    @csrf
    <input type="text" name="search" value="{{old('search')}}" class="form-control" placeholder="Search..."  >
  </div></form>
 
</div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                liste des utilisateurs
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
  <thead>
  <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>nom</th>
                                            <th>CIN</th>
                                            <th>N. SOM</th>
                                            <th>Nationalité</th>
                                            <th>Email</th>
                                            <th>Département</th>
                                            <th>Poste</th>
                                            <th>Tel</th>
                                            <th>Actions</th>
                                        </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
                                        <tr>
                                        
                                            <td>{{$user->id}}</td>
                                            <td><div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
                                            <img src="{{url('Image/'.$user->image)}}"  alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                                            </div></td>
                                            
                                            <td>{{$user->last_name.' ' .$user->first_name.'-'.$user->first_name_ar.' ' .$user->last_name_ar}}</td>
                                            <td>{{$user->cin}}</td>
                                            <td>{{$user->num_de_som}}</td>
                                            <td>{{$user->nationalite}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->departement_name}}</td>
                                            <td>{{$user->poste}}</td>
                                            <td>{{$user->phone}}</td>
                                            
                                            <td>  <div class="btn-group" role="group">
    <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-sm btn-info mx-2"><i class="fa fa-edit"></i></a>
    
    <form action="{{route('admin.users.desactivate',['user'=>$user->id])}}" id="desactive-form" method="POST">
      @csrf
      <button type="submit"  class="btn btn-sm btn-danger" onclick="submitForm(event,'voulez-vous désactiver cet utilisateur ?','Désactiver')"><i class="fa fa-ban" aria-hidden="true"></i></button>
    </form>

  </div></td>
                                        </tr>
                                        @endforeach
                                        
  </tbody>
  
</table>
{{ $users->links() }}

</div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
            
@endsection
@section('title','gestion des utilisateurs')