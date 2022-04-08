@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sub-Categories list</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Blog list</h4>
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
                         Blog Title
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
                        @foreach($blogs as $blog)
                      <tr>
                      <td>
                      {{$blog->id}}
                     </td>
                     <td>
                     {{$blog->title}}
                     </td>
                      
                        <td>
                        {{$blog->description}}
                        </td>
                        <td>
                        {{$blog->created_at}}
                        </td>
                        <td>

                        <a class="btn btn-info" href="{{URL::to('blog/edit/'.$blog->id)}}" id="edit">
                         Edit
                    </a>  

                    <a class="btn btn-primary" href="{{URL::to('blog/trash/'.$blog->id)}}" id="trash">
                       Trash
                    </a>  
                        <a class="btn btn-danger" href="{{URL::to('blog/delete/'.$blog->id)}}" onclick="confirmDelete()" id="delete-subcategory">
                         X
                    </a>                  
                        </td>
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @if(count($blogs) == 0)

                
                 <h1 class="text-center">  <i class="tim-icons icon-paper"></i> No Blogs</h1>
                 <div class="text-center">
                 <p>Sorry there is no blogs so plz again add blogs<p>
              
            <a  class="btn btn-primary"  href="{{route('admin.blog.index')}}">
              Add Blog
            </a>
           </div>
           
                @endif
              </div>
              
            </div>
          
          </div>
         
      </div>
      @endsection