@extends('auth.employe.layout')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jours fériés</h1>
                        <ol class="breadcrumb mb-4">
                            
                        </ol>
                        <div class="d-flex justify-content-between mb-3">

</form>
 
</div>
                        <div class="card mb-4" >
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste des jours fériés
                            </div>
                            <div class="card-body" style="max-height: 70vh !important;overflow:scroll !important;">
                            <div class="table-responsive">
                            <table class="table">
  <thead>
  <tr>
                                            
                                            <th>Intitulé</th>
                                            <th>Date</th>
                                            
                                        </tr>
  </thead>
  <tbody>
  @foreach($holidays as $key => $value)
                                        <tr>
                                        
                                            
                                            <td>{{$key}}</td>
                                            <td><b>{{$value}}</b></td>
                                          
                                            
                    
                                        </tr>
                                        @endforeach
                                        
  </tbody>
  
</table>


</div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
@endsection
@section('title','jours fériés')