@extends('admin.app')
@section('content')

   <div class="content">
   <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Property list</li>
  </ol>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Property list</h4>
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
                          Property Title
                        </th>
                        <th>
                        Property Desc
                        </th>
                        <th>
                        Purpose
                        </th>
                        <th>
                          Property Type
                        </th>
      
                        <th>
                          Beds
                        </th>
                        <th>
                          Baths
                        </th>
                        <th>
                          Floor
                        </th> 
                        <th>
                          Location
                        </th>
                        <th>
                          City 
                        </th>
                        
                        <th>
                          Contact
                        </th>
                        <th>
                          Area
                        </th>
                        <th>
                          Thumbnail
                        </th>
                        <th>
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($Properties as $property)
                      <tr>
                      <td>
                      {{$property->id}}
                     </td>
                     <td>
                      {{$property->property_title}}
                     </td>
                     <td>
                      {{ $property->property_description}}
                     </td>

                     <td>
                     {{ $property->purpose}}
                     </td>

                        <td>
                        {{ !empty($property->category) ? $property->category->property_type:'' }}
                        </td>
                    
                        <td>
                        {{ $property->beds}}
                         </td>
                         <td>
                         {{ $property->baths}}
                         </td>
                         <td>
                         {{ $property->floor}}
                         </td>
                         <td>
                         {{ $property->location}}
                         </td>
                         <td>
                         {{ $property->city}}
                         </td>
                         <td>
                         {{ $property->contact_no}}
                         </td>
                         <td>
                         {{ $property->land_area}}
                         </td>
                         <td>
                      <img src="{{asset('uploads/images').'/'.$property->thumbnail}}" style="width:100px; height:70px;" alt="product image"/>
                         </td>
                    
                        <td>
                    
                        <a class="btn btn-info" href="{{URL::to('property/edit/'.$property->id)}}" id="edit">
                         Edit
                        </a>  

 
                        <a class="btn btn-danger" href="{{URL::to('property/delete/'.$property->id)}}" onclick="confirmDeleteProduct()" id="delete-product">
                         X
                    </a>                  
                        </td>
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                @if(count($Properties) == 0)

                
                 <h1 class="text-center">  <i class="tim-icons icon-atom"></i> No Properties</h1>
                 <div class="text-center">
                 <p>Sorry there is no property so plz again add property<p>
              
            <a  class="btn btn-primary"  href="{{route('admin.property.index')}}">
              Add Property
            </a>
           </div>
           
                @endif
              </div>
              
            </div>
            
          </div>
         
      </div>


      <script>
     $(document).ready(function(){
$('.addProduct').on('click',function(){
  $('#showModal').modal('show');

});
});

      </script>

      
<script  text="type/javascript">
     $(document).ready(function(){
$('.addform').submit(function(e){
  e.preventDefault();
  $.ajax({
    type:"POST",
    url:'admin/product/store',
    data:$('.addform').serialize(),
    success:function(response){
      console.log(response);
      alert('Product Added Successfully');
    }
    error:function(error){
      console.log(error);
      alert('Product Not Added Successfully');
    }
  });
})
});


</script>
      @endsection