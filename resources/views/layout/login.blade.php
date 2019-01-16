@include('partials.head')

<div class ="row style=">
  <div class="col-md-3"></div>

 <div class="col-md-7">

  @if(isset(Auth::user()->email))
  <script>window.location="/loign/suceessloign"</script>
  @endif

  @if ($message=Session::get('error'))
  <div class="alert alert-danger alert-block">
  <button type ="button" class="close" data-dismiss="alert">  </button>
  <strong>{{$message}}</strong>
  </div>
   @endif

  @if(count($errors) > 0)
   
   <div class="alert alert-danger">
     <ul>
       @foreach($errors->all() as $error)
        <li>{{$error}}</li>
       @endforeach
     </ul>
   </div>
  @endif
<form class="form-horizontal" method="post" action="{{url('/login/checklogin')}}">
  {{csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
@include('partials.js')