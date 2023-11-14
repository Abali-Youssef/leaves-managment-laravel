
@extends('auth.admin.layout')
@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                        
                            <div class="col-xl-6 col-md-6">
                                <div class="card border-success mb-3" >
                                <div class="card-header text-success"><h5>Congés à venir</h5></div>
                                        <div class="card-body text-success">
                                                <h6 class="card-title">Nombre des congés  : {{$congeAvenir}} </h6>
   
                                         </div>
                               
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card border-secondary mb-3" >
                                <div class="card-header text-secondary"><h5>Congés en cours</h5></div>
                                        <div class="card-body text-secondary">
                                        <h6 class="card-title">Nombre des congés  : {{$congesEnCours}}</h6>

                                         </div>
                                
                                </div>
                            </div>                            
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Vision sur les mois précédants
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Variation des congés au cours de cette année</div>
                        </div>
                        
                    </div>
                </main>
                
            </div>        
@endsection
@section('title','Tableau de bord')