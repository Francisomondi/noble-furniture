@extends('layouts.app')
@section('content')
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active">      
        </li>
        <li data-target="#myCarousel" data-slide-to="1"> </li>
           
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
           <img src="/images/t.jpg" alt="leather seat" class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" rect fill="#777" width="100%" height="50%"/>
         
          <div class="container">
            <div class="carousel-caption text-left" style="color:#180F0F">
              <h1>QUALITY FABRIC SOFA SETS.</h1>
              <h4 >Wide selection of high-end modern living room sofas, sectionals, sofa beds and leather sofas, always at attractive prices.Visit our Stores for a wider Variety of Furniture Collection</h4>
             
            </div>
          </div>
        </div>
        <div class="carousel-item">
                <img src="/images/o.jpeg" alt="furniture image" class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" rect fill="#777" width="100%" height="50%"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>BEST LEATHER SOFAS.</h1>
              <h4 style="color:#180F0F">At Noble Furnitures we deal in best Leather furniture in the country. Our custom made lwather sofas come in different colours and measurements suited for your needs.</h4>
              
            </div>
          </div>
        </div>
        <div class="carousel-item">
                <img src="/images/u.jpeg" alt="leather seat" class="bd-placeholder-img" width="100%" height="50%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" rect fill="#777" width="100%" height="50%"/>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <h4 style="color:#FFFFFF">At Noble Furnitures we deal in best Leather furniture in the country. Our custom made lwather sofas come in different colours and measurements suited for your needs.</h4>
              
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <section class="jumbotron text-center">
            <div class="container">
              <h1 class="jumbotron-heading">WELCOME TO NOBLE FURNITURES </h1>
              <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
              <p>
                <a href="/client" class="btn btn-primary my-2">Clients Home Gallery</a>
                <a href="#" class="btn btn-secondary my-2">Inquiry Form</a>
              </p>
            </div>
    </section>
  
  
   
  
  
    
      
          <hr class="featurette-divider">
      
  
          <div class="album py-5 bg-light">
            <div class="container">
              
            <div class="row" >
                    @if(count($furnituregalleries)>0)
    
                    @foreach($furnituregalleries as $furnituregallery)
                
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm" >
                            <h3 style="text-align:center;">{{$furnituregallery->name}}</h3>
                            
                            <a href="/dinnings/{{$furnituregallery->id}}">
                            <img src="/storage/photos/dinning/{{$furnituregallery->image}}" alt="leather seat" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"  rect fill="#55595c" width="100%" height="100%"/>
                            </a>
                              <div class="card-body">
                                    <p class="card-text">{{$furnituregallery->description}}</p>
                                    <p class="card-text" >KES: {{$furnituregallery->price}}</p>
                                  
                                    <div class="d-flex justify-content-between align-items-center">
                                          <div class="btn-group">
                                              <a href="/dinnings/{{$furnituregallery->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                              <a href="/dinnings/{{$furnituregallery->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                          
                                          </div>
                                        
                                        <small class="text-muted">{{$furnituregallery->created_at->diffForHumans()}}</small>
                                        <small class="text-muted">{{$furnituregallery->condition}}</small>
                                    </div>
                              </div>
    
                        </div>
                          
            </div>
                  @endforeach
                  
    
                  @else
                    <p>No gallery found</p>
                  
                  @endif      
                  
              </div>
              
                  {{$furnituregalleries->links()}}
                  <a class="btn btn-sm btn-outline-secondary" style="float:left" href="/" role="button">Back
                    &raquo;</a>
              </div>
    </div>

      <hr class="featurette-divider">
  
      <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h5 class="border-bottom border-gray pb-2 mb-0">Contac Us</h5>
            <div class="media text-muted pt-3">
              <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#007bff" width="100%" height="100%"/><text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text></svg>
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@Telephone</strong>
                0727 358 045<br>
                0792537308
              </p>
            </div>
            <div class="media text-muted pt-3">
              <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#e83e8c" width="100%" height="100%"/><text fill="#e83e8c" dy=".3em" x="50%" y="50%">32x32</text></svg>
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@E-mail</strong>
                Info@noblefurtures.co.ke <br>
                Noblefurtures@gmail.com
            
              </p>
            </div>
            <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#e83e8c" width="100%" height="100%"/><text fill="#e83e8c" dy=".3em" x="50%" y="50%">32x32</text></svg>
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <strong class="d-block text-gray-dark">@Social-media</strong>
                     Facebook: <a href="www.facebook.com/noblefurniture">Noble Furnitures  </a><br>
                     Instagram: <a href="instagram.com/noblefurniture">Noble_Furnitures  </a><br>
                     Twitter: <a href=" www.twitter.com/noblefurniture">@Noble_Furnitures  </a><br>
                     <br>
                    
                  
                    </p>
                  </div>
            <div class="media text-muted pt-3">
              <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32"  role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#6f42c1" width="100%" height="100%"/><text fill="#6f42c1" dy=".3em" x="50%" y="50%">32x32</text></svg>
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@postal address</strong>
                B.O.Box 0771-00518
                <small class="d-block  mt-3">
                       Mbotela Makadara Along jogoo Road<br>
                                Left turn to Town Before Foot Bridge
                </small>
               
              </p>
            </div>
           
          </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
  
  
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; Noble furnitures, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
  </html>
  
@endsection