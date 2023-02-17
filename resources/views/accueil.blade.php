@extends('layouts.main')



@section('right')
<a class="btn-book-a-table" href="#">Obtient ta carte</a>
@endsection


@section('content')


    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row mt-5">
                            <div class="col-md-6 d-none d-lg-block column" id="nicoleCard">
                                <img src="{{ asset('E-visite/assets/img/nicole.jpg')}}" alt=""> 
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-190 mb-4" style="font-weight: bold;">Nicole WILLIAMS</h1>
                                    </div>
                                    <div class="text-center">
                                        <span class="small" href="forgot-password.html">Social Media Manager <br><span style="font-weight: bold;">MTN Group</span></span>
                                    </div>

                                    <div class="text-center">
                                        <span class="small" href="forgot-password.html">Cotonou,BENIN</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <a href="" class="offset-md-1 btn btn-dark col-md-4"> Sauvegarder</a>
                            <a href="{{ route("contact") }}" class="btn btn-primary col-md-4 offset-md-2"> Echanger contact</a>

                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </div>




@endsection