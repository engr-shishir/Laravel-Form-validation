<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
<script src="{{asset('js')}}/jquery.js"></script>
 <title>Laravel Basic Crud</title>
</head>
<body>
  <div style="padding:30px;"></div>
 <div class="container">
  <div class="row">
   <div class="col-md-7">
    <div class="card">
     <div class="card-header text-center">
      <span class="h3">All Student</span>
     </div>
     <div class="card-body">
      
    <table class="table table-dark">
     <thead>
       <tr>
         <th >#</th>
         <th >Name</th>
         <th >Class</th>
         <th >Roll</th>
         <th colspan="2">Action</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>@mdo</td>
       </tr>
     </tbody>
   </table>
     </div>
    </div>
   </div>
   <div class="col md-5">    
    <div class="card">
     <div class="card-header text-center">
      <span class="h3">Laravel Basic Crud</span>
     </div>
     <div class="card-body">
      <form method="POST" action="{{ url('/crud/store') }}">
       @csrf 
       <div class="form-group">
         <label for="name">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" />
         @error('name')
          <strong class="text-danger">{{ $message }}</strong>
         @enderror
       </div>
       <div class="form-group">
         <label for="class">Class</label>
         <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" />
         @error('class')
          <strong class="text-danger">{{ $message }}</strong>
         @enderror
       </div>
       <div class="form-group">
         <label for="roll">Roll</label>
         <input type="text" class="form-control @error('roll') is-invalid @enderror" id="roll" />
         @error('roll')
          <strong class="text-danger">{{ $message }}</strong>
         @enderror
       </div>

       <button type="submit" class="btn btn-info form-control">Submit</button>
     </form>
     </div>
    </div>
   </div>
  </div>
 </div>

</body>
</html>