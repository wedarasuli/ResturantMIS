@extends('layout.master')

@section('content')
 <div class="row">

   <div class="col-md-2 "></div>
   <div class="col-md-10">
    <div class="card">
      <div class="card-block">
      <form action="{{route('update.food',$food->id)}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
                <h6 class="heading-small text-muted mb-4">Add Returant Foods </h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Food Name</label>
                        <input type="text" class="form-control" value="{{$food->food_name}}" placeholder="food_name" name="food_name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">price </label>
                        <input type="text" class="form-control"  value="{{$food->price}}" placeholder="price" name="price">
                      </div>
                    </div>
                  </div>


                

                <div class="row">
                   
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Photo</label>
                        <input type="file" class="form-control" placeholder="Photo" name="photo">
                      </div>
                    </div>
                  </div>
                </div>

                 <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                               
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <div class="row">
                                <div class="col-md-6">
                                <button type="submit" class=" btn btn-primary btn btn-flat">submit</button>
                                </div>
                                <div class="col-md-6"> </div>
                      
                        </div>
                    </div>

                  </div>

              </form>


        
     
      </div>
    </div>
   
   </div>
 
 </div>


@stop