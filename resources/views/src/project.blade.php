<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/project.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
   
</head>
  </head>
  <body>
<div class="back-page">
  <a href="/"><button>
    <img src="{{asset('images/arrow-left.svg')}}" alt="">
  </button></a>
</div>
<br>
<br>
      @foreach($data as $alldata)
    <div id="project-page">
      <h2>project view</h2>
      <br />
      <!--looping data disini-->
      <div class="project-item">
        <div class="item-head">
          <h3>{{$alldata->name}}</h3>
          <h3>{{$alldata->created_at->format('d F,Y')}}</h3>
        </div>
        <div class="project-desc">
          <p>#&nbsp;deskripsi</p>
          
        </div>
        <trix-editor class="trix-content"> &nbsp;
        {!!$alldata->description!!} 
          </trix-editor>
          <p class="description">• https://laravel/post/image.com</p>
        <div class="project-image">
        <img src="{{asset('storage/'. $alldata->image) }}" alt="" />
        </div>
        <!--div roject item-->
      </div>
        <!-- end looping-->
      <br>

      </div>
      @endforeach
    
  </body>
</html>
