@extends('layout.master')

@section('content')
 <div class="row">

   <div class="col-md-2 "></div>
   <div class="col-md-10">
    <div class="card">
      <div class="card-block">

        <table class="table align-items-center  table-flush table-bordred">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Name </th>
                    <th scope="col">Father_Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                  
                  </tr>
                </thead>
                <tbody>
                </tr>
   @foreach ($staff as $staffs)
    
       

                          <tr>
                            <td>{{$staffs->id}}</td>
                            <td>{{$staffs->name}}</td>
                            <td>{{$staffs->father_name}}</td>
                            <td>{{$staffs->age}}</td>
                            <td>{{$staffs->salary}}</td>
                            <td>{{$staffs->phone}}</td>
                            <td><img  height="100px" width="150px" src="{{asset($staffs->photo)}}" alt=""></td>
                            <td><a href="{{route('staff.delete',$staffs->id)}}">Delete</a></td>
                            <td><a href="{{route('staff.edit',$staffs->id)}}">Edit</a></td>
                       
                           
                        
                          
                         

                          </tr>
          
        @endforeach
                
                
                </tbody>
              </table>
    
      </div>
    </div>
   
   </div>
 
 </div>


@stop