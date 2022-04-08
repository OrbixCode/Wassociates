@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Property-Type List</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Property-Type list</h4>
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
                          Name
                        </th>
                        <th>
                          Description
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
                        @foreach($categories as $category)
                      <tr>
                      <td>
                      {{$category->id}}
                     </td>
                        <td>
                          {{$category->property_type}}
                        </td>
                        <td>
                        {{$category->description}}
                        </td>
                        <td>
                        {{$category->created_at}}
                        </td>
                        <td>

                        <a class="btn btn-info" href="{{URL::to('category/edit/'.$category->id)}}" id="edit">
                         Edit
                    </a>  

                    <a class="btn btn-primary" href="{{URL::to('category/trash/'.$category->id)}}" id="trash">
                       Trash
                    </a>  
                        <a class="btn btn-danger" href="{{URL::to('category/delete/'.$category->id)}}" onclick="confirmDelete()" id="delete-category">
                         X
                    </a>                  
                        </td>
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @if(count($categories) == 0)

                
                 <h1 class="text-center">  <i class="tim-icons icon-atom"></i> No Property-Type</h1>
                 <div class="text-center">
                 <p>Sorry there is no property-type so plz again add Property-Type<p>
              
            <a  class="btn btn-primary"  href="{{route('admin.category.index')}}">
              Add Property-Type
            </a>
           </div>
           
                @endif
              </div>
              
            </div>
            <div>{{$categories->links()}}</div>
          </div>
         
      </div>
      @endsection