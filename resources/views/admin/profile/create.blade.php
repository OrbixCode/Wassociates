@extends('admin.app')
@section('content')
<div class="content">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add New User Profile</li>
  </ol>
</nav>
<form method="Post" action="{{url('admin/profile/store')}}" enctype="multipart/form-data" >
                @csrf
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add New User Profile</h5>
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
               


                  <div class="row">
                
                    <div class="col-md-7 ">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text"  class="form-control" placeholder="name" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="name" >
                      </div>
                    </div>
                    
                    <div class="col-md-5 ">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text"  class="form-control" placeholder="email" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="email" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                
                <div class="col-md-5 ">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text"  class="form-control" id="password" placeholder="password" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="password" >
                  </div>
                </div>
                
                <div class="col-md-7 ">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text"  class="form-control" id="confirm_password" placeholder="confirm password" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="confirm_password" >
                  </div>
                </div>
              </div>
                  
                  <div class="row">
                
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="status">Status</label>
                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white;" class="custom-select" name="status" >
                    <option class="form-control" value="0">Blocked</option>
                    <option  class="form-control"value="1">Active</option>
                   </select>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label>Role</label>
                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white;"   class="custom-select" name="role_id" >
                    @if($roles->count() > 0)
                    @foreach($roles as $role)
                    <option class="form-control" value="{{$role->id}}" >{{$role->name}}</option> 
                    @endforeach
                    @endif
                    </select>
                    </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text"  class="form-control" placeholder="address" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="address" >
                  </div>
                </div>
              </div>
                 
              <div class="row">   
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Country</label>
                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white;" id="country"   class="custom-select" name="country_id" >
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    <option class="form-control" value="{{$country->id}}" >{{$country->name}}</option>
                    @endforeach 
                    </select>
                    </div>
                </div>
              

              <div class="col-md-4">
                  <div class="form-group">
                    <label>State</label>
                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white; " id="state"  class="custom-select" name="city_id" >
                    
                    </select>
                    </div>
                </div>
              

              <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white; " id="city"  class="custom-select" name="city_id" >
                   
                    </select>
                    </div>
                </div>
              </div>
              </div>
              
            </div>
            <button  type="submit" class=" ml-3  btn btn-fill btn-primary">Save</button>

          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <div class="cont-thumbnail">
                              
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="thumbnail" name="thumbnail" accept=".png, .jpg, .jpeg" />
                                        <label for="thumbnail"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imgthumbnail" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
          </div>
         
    </div>
             
             </form>
             </div>
             <script type=text/javascript>
  $('#country').change(function(){
  var countryID = $(this).val();  
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('get-states-by-country')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $("#state").empty();
        $("#city").empty();
        $("#state").append('<option>Select State</option>');
        $.each(res,function(key,value){
          $("#state").append('<option style="color:black;" value="'+ key+'">'+value+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  });
  $('#state').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('get-cities-by-state')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $("#city").empty();
        $("#city").append('<option>Select City</option>');
        $.each(res,function(key,value){
          $("#city").append('<option style="color:black;" value="'+ key +'">'+value+'</option>');
        });
      
      }else{
        $("#city").empty();
      }
      }
    });
  }else{
    $("#city").empty();
  }
    
  });
</script>
@endsection