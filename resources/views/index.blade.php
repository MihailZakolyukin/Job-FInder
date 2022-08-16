@extends('layouts.app')

@section('title')
    Job Finder
@endsection

@section('content')
     <div class="jumbotron">
        <div class="mx-auto align-middle jumbotron-content">
            <div>
              <h1 class="display-4 h1">Find The Job That Fits Your Skills</h1>
              <form action="/userdashboard" method="get">
                <div class="input-group mb-3 w-50">
                  <input type="text" class="form-control" placeholder="Search Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
                  <div class="input-group-append">
                    <button class="input-group-text bg-info text-light" id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>  
          </div>
       </div>
    </div>
    <section id="BrowseCategories">
        <div class="container">
            <h2 class="h2 text-center">Most popular jobs in your area</h2>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=1">
                    <i class="fas fa-paint-brush fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted"> Graphics &amp; Design</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=2">
                    <i class="fas fa-code fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Programming &amp; Tech</h5></a> 
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=3">
                    <i class="far fa-chart-bar fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Digital Marketing</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=4">
                    <i class="fas fa-pencil-alt fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted"> Writing &amp; Translation</h5></a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=5">
                    <i class="fas fa-video fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted">Video &amp; Animation</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=6">
                    <i class="fas fa-keyboard fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Admin Support</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=7">
                    <i class="fas fa-cog fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Architecture &amp; Engineering</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=8">
                    <i class="fas fa-chart-pie fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Management &amp; Finance</h5></a>
                </div>
            </div>
        </div>
    </section> 
@endsection