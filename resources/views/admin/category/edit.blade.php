@extends('admin.app')
@section('content')
<div class="content">
<ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item "><a href="{{route('admin.category.create')}}">Property Type list</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Property Type</li>
  </ol>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Property Type</h5>
              </div>

            
              <div class="col-md-12">
                    @if (count($errors) > 0)
                     @foreach($errors->all() as $error)
                     <div class="alert alert-danger">
                     {{ $error }}
                      </div>
                      @endforeach
                  @endif
                  </div>

                
                  <div class="col-md-12">
                    @if (session()->has('message'))
                     <div class="alert alert-success">
                     {{ session('message') }}
                      </div>
                  @endif
                  </div>

                 

              <div class="card-body">
                <form method="post" action="{{url('category/update/'.$category->id)}}" >
                @csrf


                  <div class="row">
                
                    <div class="col-md-8 ">
                      <div class="form-group">
                        <label>Property Type</label>
                        <input type="text"  class="form-control" placeholder="Property Type" style="border:2px solid #e14eca; background-color:transparent;" name="property_type" value="{{$category->property_type}}" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="50"  style="border:2px solid #e14eca; border-radius:10px; background-color:transparent;"  class="form-control" name="description"  placeholder="Describe yourself here..."  >{{$category->description}}</textarea>

                    </div>
                    </div>
                  </div>
                  

                 
                <button type="submit" class="btn btn-fill btn-primary">Edit </button>
              
                  
                  
                </form>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="{{asset('img/usama.jpg')}}" alt="...">
                      <h5 class="title">usama programmar</h5>
                    </a>
                    <p class="description">
                      Ceo/Co-Founder
                    </p>
                  </div>
                </p>
                <div class="card-description">
                  Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="https://www.facebook.com/profile.php?id=100009236833271&sk=photos_all" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection