  @extends('layout.master')

  @section('content')
  <div class="row">

    <div class="col-md-2 "></div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-block">
        <form action="{{route('staff.register')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                  <h6 class="heading-small text-muted mb-4">Register Staff</h6>
                  <div class="pl-lg-4">


                  <div class="row">   


                          <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label">Name</label>
                          <input type="text" name="name" id="name" 
                                      class="form-control">
                        </div>
                    </div>
                

                  <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label"  for="input-email">FatherName</label>
                          <input type="text" required name=""
                                          class="form-control" id="password_confirmation"  name="father_name"
                                          placeholder="">
                        </div>
                      </div>
                      </div>
                  
                  
                    <div class="row">

                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label">Address</label>
                          <input type="text" name="address" id="name" 
                                      class="form-control">
                        </div>
  </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Age</label>
                          <input type="text" name="age" id="email"
                                      class="form-control">
                        </div>
                      </div>
                      </div>

              <div class="row">   
                  <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Salary</label>
                          <input type="text"  name="salary" value="" class="form-control"  id="password" placeholder="">
                        </div>
                    </div>

                  <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label"  for="input-email">Phone</label>
                          <input type="text"  name="phone"
                                          class="form-control" id="password_confirmation" 
                                          placeholder="">
                        </div>
                      </div>
                      </div>

                        <div class="row">   
                  <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">photo</label>
                          <input type="file" name="photo" value="" class="form-control"  id="password" placeholder="">
                        </div>
                    </div>

                  
                      </div>

                        
                  <div class="card-body pt-0 pt-md-4">
                  <input  type="submit"  class="btn btn-info" >
                  
                  </div>
    <hr>
                </form>

        
        </div>
      </div>
    
    </div>
  
  </div>


  @stop