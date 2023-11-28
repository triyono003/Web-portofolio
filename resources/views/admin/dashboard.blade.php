<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

 <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
<body>
  <section>
    <nav>
     <ul>
       <a href="/">back home</a>
       <li><h2>Selamat Datang Admin</h2></li>
     </ul>
    </nav>
      <br><br>
    <div class="data-user">
      <button id="btnShow"> tampilkan data pengunjung </button>
      <br><br>
    <table border=""id="table">
      <tr>
        <th>No</th>
        <th>Desktop</th>
        <th>Tablet</th>
        <th>Phone</th>
        <th>Browser</th>
        <th>VBrowser</th>
        <th>Ip</th>
        <th>Platform</th>
        <th>VPlatform</th>
        <th>Robot</th>
        <th>times</th>
      </tr>
       @foreach($dataVisitor as $index=>$data)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$data->desktop}}</td>
        <td>{{$data->tablet}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->browser}}</td>
        <td>{{$data->vbrowser}}</td>
        <td>{{$data->clientip}}</td>
        <td>{{$data->platform}}</td>
        <td>{{$data->vplatform}}</td>
        <td>{{$data->robot}}</td>
        <td>{{$data->created_at}}</td>
      </tr>
      @endforeach

    </table>
    </div>
    <br><br>
  <hr>
  <br>
      <button id="btnShowUpload"> tambah data </button>
    <div id="upload-data">
      <br> <br>
      <div class="show-form">
      <h2>tambah project</h2> <br>
      <form action="/admin/dashboard"method="post"id="form-id"enctype="multipart/form-data">
        @csrf
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
        @error("name")
        <div class="alert-danger">{{$message}}</div>
        @enderror
      <br>
        <input type="text"name="name"placeholder="project name"id="name"> 
        <br>
        @error("description")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      <br>
      <div class="descInput">
      <input id="x" type="hidden" name="description">
       <trix-editor input="x"class="trix-content"></trix-editor>
      </div>
      <br>
        @error("image")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="file"id="file"name="image">
        <label for="file">Choose a file</label>
    <br>
      <button type="submit"id="upload">upload</button>
      </form>
      </div>
    </div>
  </section>
  

 <script src="{{asset('js/main.js')}}"></script>
</body>
</html>