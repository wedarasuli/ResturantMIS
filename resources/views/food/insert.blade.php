@extends('layout.master')

@section('content')
 <div class="row">

   <div class="col-md-2 "></div>
   <div class="col-md-10">
    <div class="card">
      <div class="card-block">
      <form action="{{route('insert.new.food')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
                <h6 class="heading-small text-muted mb-4">Add Returant Foods </h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Food Name</label>
                        <input type="text" class="form-control" placeholder="food_name" name="food_name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">price </label>
                        <input type="text" class="form-control" placeholder="price" name="price">
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
                                <div class="col-md-2">
                                <button type="submit" class=" btn btn-primary btn btn-flat">Submit</button>
                                </div>
                                <div class="col-md-6">
                                <button type="cancel" class=" btn btn-danger btn btn-flat">Cancel</button>
                                 </div>
                      
                        </div>
                    </div>

                  </div>

              </form>
      </div>
    </div>
   
   </div>
 
 </div>


@stop