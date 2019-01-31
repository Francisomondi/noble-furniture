@extends('layouts.app')

@section('content')

<main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
             About Us
            </h3>
      
            <div class="blog-post">
      
              <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
              <hr>
              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
              <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </blockquote>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              
            </div><!-- /.blog-post -->
      
            
          </div><!-- /.blog-main -->
      
          <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
              <h4 class="font-italic">Motto</h4>
              <p class="mb-0"> <em>Designed to please, Made to last</em></p>
            </div>
      
            <div class="p-3 mb-3 bg-light rounded">
              <h4 class="font-italic">Mission</h4>
              <p class="mb-0"> <em>To be kenya's leading online Furniture Store serving for a purpose.</em></p>
            </div>
      
            <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">Vision</h4>
                    <p class="mb-0"><em>Production for clients best interests</em> .</p>
            </div>
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
      
@endsection