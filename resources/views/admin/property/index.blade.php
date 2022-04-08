@extends('admin.app')
@section('content')
<div class="content">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Property</li>
  </ol>
</nav>
<form method="Post" action="{{url('admin/property/store')}}" enctype="multipart/form-data" >
                @csrf
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add Property</h5>
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
                
                    <div class="col-md-8 ">
                      <div class="form-group">
                        <label>Property Title</label>
                        <input type="text"  class="form-control" placeholder="Property Title" style="border:2px solid #e14eca; background-color:transparent; color:white;`" name="property_title" >
                      </div>
                    </div>

                


                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Property Description</label>
                        <textarea rows="4" cols="50"  style="border:2px solid #e14eca; border-radius:10px; background-color:transparent; color:white;"  class="form-control" name="property_description"  placeholder="Describe Property Description here..."  ></textarea>

                    </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location</label>
                        <textarea rows="4" cols="50"  style="border:2px solid #e14eca; border-radius:10px; background-color:transparent; color:white;"  class="form-control" name="location"  placeholder="Describe Location here..."  ></textarea>

                    </div>
                    </div>
                  </div>
                  
                  <div class="row">
                
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>Bedrooms</label>
                    <input type="text"  class="form-control" placeholder="Bedrooms" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="beds" >
                  </div>
                </div>


                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>Bathrooms</label>
                    <input type="text"  class="form-control" placeholder="Bathrooms" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="baths" >
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>Floors</label>
                    <input type="text"  class="form-control" placeholder="Floors" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="floor" >
                  </div>
                </div>


                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>Land Area</label>
                    <input type="text"  class="form-control" placeholder="Land Area" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="land_area" >
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>Province</label>
                    <input type="text"  class="form-control" placeholder="Province" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="state" >
                  </div>
                </div>


                <div class="col-md-6 ">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text"  class="form-control" placeholder="City" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="city" >
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

           <div class="row">
           <div class="col-md-10 ">
                  <div class="form-group">
                    <label>Property Dealer Contact No</label>
                    <input type="number"  class="form-control" placeholder="Property Dealer Contact No" style="border:2px solid #e14eca; background-color:transparent; color:white;" name="contact_no" >
                  </div>
                </div>
           </div>

                <div class="row">
              <div class="col-md-12 ">
                  <div class="form-group">
                  <label for="cars">Purpose</label>

                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white;" class="custom-select" name="purpose" >
                    <option  class="form-control" style="color:black;" value="For Sale">For Sale</option>
                    <option class="form-control" style="color:black;" value="For Rent">For Rent</option>
                    <option class="form-control" style="color:black;" value="For Purchase">For Purchase</option>
                
                    </select>
                  
                  </div>
                </div>
                </div>

 

                <div class="row">
              <div class="col-md-12 ">
                  <div class="form-group">
                  <label for="cars">Property Type:</label>

                    <select  style="border:2px solid #e14eca; background-color:transparent; color:white;" class="custom-select" id="category" name="category_id" >
                   @if($categories->count() > 0)
                   @foreach($categories as $category)
                    <option class="form-control" style="color:black;" value="{{$category->id}}">{{$category->property_type}}</option>
                    @endforeach
                    @endif
                    </select>
                  </div>
                </div>
                </div>


  


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
  $('#category').change(function(){
  var countryID = $(this).val();  
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('get-subcategory')}}?category_id="+countryID,
      success:function(res){        
      if(res){
        $("#subcategory").empty();
        $("#subcategory").append('<option>Select State</option>');
        $.each(res,function(key,value){
          $("#subcategory").append('<option style="color:black;" value="'+ key+'">'+value+'</option>');
        });
      
      }else{
        $("#subcategory").empty();
      }
      }
    });
  }else{
    $("#subcategory").empty();
  }   
  });

</script>
@endsection