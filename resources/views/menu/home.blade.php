@extends('layout.master')

@section('content')
 <div class="row">

   <div class="col-md-2 "></div>
   <div class="col-md-10">
    <div class="card">
      <div class="card-block">

        <div class="row">

          <div class="col-md-4">

            <h1 id="image">1</h1>
            <h3>Name</h3>
            <h2>price</h2>
            <button onclick="addone()">Payment</button>
          
          
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        
        </div>
     

      
      </div>
    </div>
   
   </div>
 
 </div>

   <script type="text/javascript">

     function addone(){
       var foo=documnet.getElementById('image').innerHTML
       foo++;
       document.getElementById('image').innerHTML=foo;
     }
     
   
   
   </script>


@stop