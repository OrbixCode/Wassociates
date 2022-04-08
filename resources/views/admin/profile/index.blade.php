@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">User list</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> User list</h4>
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
                          email
                        </th>
                        <th>
                          Role
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Country
                        </th>
                        
                        <th>
                          City
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
                        @foreach($users as $user)
                        
                      <tr>
                      <td>
                      {{$user->id}}
                     </td>
                     <td>
                      {{!empty($user->profile) ? $user->profile->name:''}}
                     </td>
                        <td>
                          {{$user->email}}
                        </td>
                        <td>
                        {{$user->role->name}}
                        </td>
                         <td>
                         {{!empty($user->profile) ? $user->profile->address:''}}
                         </td>
                         <td>
                         {{@$user->getCountry()}}
                         </td>
                         
                         <td>
                         {{@$user->getCity()}}
                         </td>
                        <td>
                        {{$user->created_at}}
                        </td>
                        <td>

                        <a class="btn btn-info" href="{{URL::to('profile/edit/'.$user->id)}}" id="edit">
                         Edit
                    </a>  

 
                        <a class="btn btn-danger" href="{{URL::to('user/delete/'.$user->id)}}" onclick="confirmDeleteProduct()" id="delete-product">
                         X
                    </a>                  
                        </td>
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @if(count($users) == 0)

                
                 <h1 class="text-center">  <i class="tim-icons icon-atom"></i> No Users</h1>
                 <div class="text-center">
                 <p>Sorry There Is No Users so plz again Add user<p>
              
            <a  class="btn btn-primary"  href="{{route('admin.product.index')}}">
              Add User
            </a>
           </div>
           
                @endif
              </div>
              
            </div>
            <div>{{$users->links()}}</div>
          </div>
         
      </div>
      @endsection