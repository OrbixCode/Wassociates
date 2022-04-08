@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery list</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Gallery list</h4>
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
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary text-center">
                      <tr>
                        <th>
                          ID
                        </th>

                        <th>
                          Gallery Image
                        </th>
                        <th>
                          Date Created
                        </th>
                        <th>
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($galleries as $gallery)
                      <tr>
                      <td>
                      {{$gallery->id}}
                     </td>
                        <td>
                        <img src="{{asset('uploads/gallery').'/'.$gallery->image}}" style="width:100px; height:70px;" alt="product image"/>
                        </td>
                        <td>
                        {{$gallery->created_at}}
                        </td>
                        <td>

                        <a class="btn btn-danger" href="{{URL::to('admin/gallery/delete/'.$gallery->id)}}" onclick="confirmDelete()" id="delete-category">
                         X
                         </a>                  
                        </td>
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @if(count($galleries) == 0)

                
                 <h1 class="text-center">  <i class="tim-icons icon-atom"></i> No Galleries</h1>
                 <div class="text-center">
                 <p>Sorry there is no galleries so plz again add galleries<p>
              
            <a  class="btn btn-primary"  href="{{route('admin.gallery.create1')}}">
              Add Gallery
            </a>
           </div>
           
                @endif
              </div>
              
            </div>
            <div>{{$galleries->links()}}</div>
          </div>
         
      </div>
      @endsection