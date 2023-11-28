<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/project.css')}}" />
  </head>
  <body>
    <section>
      <nav>
        <ul>
          <li></li>
          <li>
            <a href="/"><button>home</button></a>
          </li>
          <li>
            <a href="/src/project"><button>projects</button></a>
          </li>
          <li>
            <a href="/src/sertifikat"><button>sertifikat</button></a>
          </li>
          <li></li>
        </ul>
      </nav>
      <div class="content">
        <nav>
          <ul>
            <li>hello</li>
            <li><h2>i'm triyono</h2></li>
            <br />
            <li style="font-style: italic">
              "I am a web developer who is starting to venture into the
              freelance world."
            </li>
            <li>
              <button type="submit" name="/downloadPdf">
                <h2>Download Cv</h2>
              </button>
            </li>
          </ul>
        </nav>
        <div class="picture">
          <img src="{{asset('images/profile.png')}}" alt="" />
        </div>
      </div>

      <div class="last">
        <ul>
          <li>
            <a href="#">
              <button>
 <img src="{{asset('images/linkedin.svg')}}" alt="" />
              </button>
            </a>
          </li>
          <li>
            <a href="#">
              <button>
         <img src="{{asset('images/github.svg')}}" alt="" />
              </button>
            </a>
          </li>
          <li>
            <a href="/ig.html">
              <button>
 <img src="{{asset('images/instagram.png')}}" alt="" />
              </button>
            </a>
          </li>
        </ul>
      </div>
      <br /><br />
    </section>
      <br /><br />
      <a href="/admin/dashboard">back to dashboard</a>

  </body>
</html>
