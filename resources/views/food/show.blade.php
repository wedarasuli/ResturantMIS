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
                    <th scope="col">Name Food </th>
                    <th scope="col">price</th>
                    <th scope="col">photo</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                    <th scope="col">add To Menu</th>
                  
                  </tr>
                </thead>
                <tbody>
                </tr>
   @foreach ($food as $foods)
    
       

                          <tr>
                           
                            <td>{{$foods->food_name}}</td>
                            <td>{{$foods->price}}</td>
                            <td><img  height="100px" width="150px" src="{{asset($foods->photo)}}" alt=""></td>
                            <td><a href="{{route('edit.food',$foods->id)}}">Edit</a></td>
                            <td><a href="{{route('delet.food',$foods->id)}}">Delete</a></td>
                           
                          
                            @if($foods->menu)
                            <td>added</td>

@else
<td><a  class="btn btn-primary" href="{{route('add.menu',$foods->id)}}">Add</a></td>
@endif
               
                          
                         

                            <!-- <td><a  class="btn btn-primary" href="{{route('add.menu',$foods->id)}}">Add</a></td> -->
                          </tr>
          
        @endforeach
                
                
                </tbody>
              </table>
    
      </div>
    </div>
   
   </div>
 
 </div>


@stop