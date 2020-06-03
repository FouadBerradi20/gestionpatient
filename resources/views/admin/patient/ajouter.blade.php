@extends('admin.layouts.template')
@section('content')


    <!-- Main wrapper  -->
    <div id="main-wrapper">
       
     
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Patient</h3> </div>
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
                <form class="form-horizontal" action="{{ route('patient.store') }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                            <div class="box-body">

                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">matricule</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" class="form-control" name="matricule" placeholder="matricule">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">Nom</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="text" class="form-control" name="nom" placeholder="Nom">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">prenom</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="text" class="form-control" name="prenom" placeholder="prenom">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">cin</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="text" class="form-control" name="cin" placeholder="cin">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">date de naissance</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="date" class="form-control" name="datenaissance" placeholder="date de naissance">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">adresse</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="text" class="form-control" name="adresse" placeholder="adresse">
                               
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-sm-2 control-label">pavillon</label>
                            
                                <div class="col-sm-12">
                                <input id="" type="text" class="form-control" name="pavillon" placeholder="pavillon">
                               
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Brand" class="col-sm-2 control-label">type</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="type" >
                                                    <option value="" >---selected---</option>
                                                    <option value="autonome">autonome</option>
                                                    <option value="perte">perte d'automonie</option>
                                               
                                                   
                                                    
                                                   
                                    </select>
                                  
                                </div>
                            </div>
                            
                            
                            

                            
                            
                         
                          
                            
                            
                          
                         
                            <div class="box-footer">
                            <button type="reset" class="btn btn-default">Annuler</button>
                            <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
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
