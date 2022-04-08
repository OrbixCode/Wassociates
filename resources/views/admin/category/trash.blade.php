@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Trashed Category</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Trash Category</h4>
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
                          Date Trashed
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
                          {{$category->title}}
                        </td>
                        <td>
                        {{$category->description}}
                        </td>
                        <td>
                        {{$category->created_at}}
                        </td>
                        <td>
 

                    <a class="btn btn-primary" href="{{URL::to('category/restore/trash/category/'.$category->id)}}" id="trash">
                       Restore Trash Category
                    </a>  
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
  
              </div>
              
            </div>
          
          </div>
         
      </div>
      @endsection