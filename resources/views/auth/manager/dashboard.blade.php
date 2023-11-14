
@extends('auth.manager.layout')
@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card border-danger mb-3" >
                                        <div class="card-header text-danger"><h5>Nouvelles demandes</h5></div>
                                        <div class="card-body text-danger">
                                                <h6 class="card-title">Total des demandes : {{$nouvellesDemandes}} </h6>
                                                
                                         </div>
                                <div class="card-footer text-secondary d-flex align-items-center justify-content-between">
                                        <a class="small text-secondary stretched-link" href="{{route('manager.conge.new-demands')}}">voir les détails</a>
                                        <div class="small text-secondary"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-success mb-3" >
                                <div class="card-header text-success"><h5>Congés à venir</h5></div>
                                        <div class="card-body text-success">
                                                <h6 class="card-title">Nombre des congés  : {{$congeAvenir}} </h6>
   
                                         </div>
                                <div class="card-footer text-secondary d-flex align-items-center justify-content-between">
                                        <a class="small text-secondary stretched-link" href="{{route('manager.conge.all-demands')}}">voir les détails</a>
                                        <div class="small text-secondary"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-secondary mb-3" >
                                <div class="card-header text-secondary"><h5>Congés en cours</h5></div>
                                        <div class="card-body text-secondary">
                                        <h6 class="card-title">Nombre des congés  : {{$congesEnCours}}</h6>

                                         </div>
                                <div class="card-footer text-secondary d-flex align-items-center justify-content-between">
                                        <a class="small text-secondary stretched-link" href="{{route('manager.conge.inProgressConges')}}">voir les détails</a>
                                        <div class="small text-secondary"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>                            <div class="col-xl-3 col-md-6">
                                <div class="card border-primary mb-3" >
                                <div class="card-header text-primary"><h5>Demandes d'annulation</h5></div>
                                        <div class="card-body text-primary">
                                        <h6 class="card-title">Total des demandes:  {{$demandeAnnulation}}</h6>

                                         </div>
                                <div class="card-footer text-secondary d-flex align-items-center justify-content-between">
                                        <a class="small text-secondary stretched-link" href="{{route('manager.conge.demandes-annulation')}}">voir les détails</a>
                                        <div class="small text-secondary"><i class="fas fa-angle-right"></i></div>
                                    </div>
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