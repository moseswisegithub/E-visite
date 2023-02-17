@extends('layouts.main')



@section('right')
<a class="btn-book-a-table" href="{{ route('home')  }}">Partager ta carte</a>
@endsection

@section('content')


    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-6 d-none d-lg-block">
                                
                                
                                <div class="container center uploadImage">
                                    <form name="upload" method="post" action="#" enctype="multipart/form-data" accept-charset="utf-8">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 center">
                                                <div class="btn-container">

                                                    <div>
                                                        <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                                        <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                                         <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                                    
                                                        <p id="namefile">
                                                            Prendre ou importer une photo
                                                        </p>
                                                   
                                                        <button type="button" id="btnup" class="btn btn-primary btn-lg">
                                                            <i class="bi bi-camera"></i>
                                                        </button>
                                                   
                                                        <input type="file" value="" name="fileup" id="fileup">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </form>
                                </div>

                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Nicole WILLIAMS</h1>
                                    </div>
                                    <div class="text-center">
                                        <span class="small" href="forgot-password.html">Social Media Manager <span>MTN Group</span></span>
                                    </div>

                                    <div class="text-center">
                                        <span class="small" href="forgot-password.html">Cotonou,BENIN</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>

            </div>

        </div>



        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card" style="background-color: black">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="justify-content-center">
                            <h6 style="color: white">Veuillez renseigner les champs ci dessous</h6>
                            <form>
                                <div class="form-group">
                                  <input type="email" class="form-control col-md-6 ml-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prénom et NOM">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control col-md-6 ml-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numéro de téléphone">
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control col-md-6 ml-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse E-mail">
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control col-md-6 ml-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lieu de rencontre">
                                  </div>

                                  <h6 style="color: white">Souhaitez vous prendre un rendez-vous?</h6>
                                
                                    <div class="row">
                                      <div class="col-md-3  ml-2">
                                        <input type="date" class="form-control" placeholder="Date">
                                      </div>
                                      <div class="col-md-3  ml-2">
                                        <input type="time" class="form-control" placeholder="Heure">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select col-md-6 ml-1 mt-3">
                                            <option selected>Motif de rencontre</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>

                                    <div class="form-group ">
                                        <textarea class="form-control  col-md-6 ml-1 mt-3" id="validationTextarea" placeholder="Décrivez votre besoin" required></textarea>
                                    </div>
                                    

                                <button type="submit" class="btn btn-primary justify-content-center">Enrégistrer</button>
                              </form>
                        </div>

                       
                    </div>
                </div>

            </div>

        </div>

      
       
    </div>




@endsection