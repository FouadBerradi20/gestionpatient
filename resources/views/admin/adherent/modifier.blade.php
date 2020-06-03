@extends('admin.layouts.template')
@section('content')


    <!-- Main wrapper  -->
    <div id="main-wrapper">
       
     
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Adherent</h3> </div>
                <div class="col-md-7 align-self-center">
                    
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
        
                        <div class="card">
                            <div class="card-title">
                                

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
               <form class="form-horizontal" action="{{  route('adherente.destroy', ['id' => $adherent->id]) }}" method="POST"    >
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">

                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">Nom</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" value="{{ $adherent->NomAdherents }}"   class="form-control" name="nom" placeholder="Name">

                                </div>
                            </div>        
                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">N° télé</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" value="{{ $adherent->Numerotelephone }}"   class="form-control" name="numtele" placeholder="Name">

                                </div>
                            </div>        
                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">E-Mail</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" value="{{ $adherent->Email }}"   class="form-control" name="email" placeholder="Name">

                                </div>
                            </div>                 
                            <div class="box-footer">
                            <button type="reset" class="btn btn-default">Annuler</button>
                            <button type="submit" class="btn btn-danger pull-right">Modifier</button>
                        </div>
                            <!-- /.box-footer -->
                        </div>
                </form>
               
                               </div>
                         
                            </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
      
        </div>
        <!-- End Page wrapper  -->
    </div>

@endsection
