<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Post;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
class RuteController extends Controller
{
  public function index(Request $request)
  {
    // user log
    // desktop,phone,browser,ip,version,plarform, versi platform, times
    $desktop = Agent::isDesktop();
    $tablet = Agent::isTablet();
    $phone = Agent::isPhone();
    $browser = Agent::browser();
    $vbrowser = Agent::version(Agent::browser());
    $platform = Agent::platform();
    $vplatform = Agent::version(Agent::platform());
    $robot = Agent::isRobot();
    $clientIP = \Request::ip();

    $desktopText = $desktop == true ? "ya" : "tidak";
    $tabletText = $tablet == true ? "ya" : "tidak";
    $phoneText = $phone == true ? "ya" : "tidak";
    $robotText = $robot == true ? "ya" : "tidak";
    if ($robot == true) {
      echo "<script>
        alert('dora bilek : robot jangan mencuri !');
      </script>";
    }
    Visitor::create([
      "desktop" => $desktopText,
      "tablet" => $tabletText,
      "phone" => $phoneText,
      "browser" => $browser,
      "vbrowser" => $vbrowser,
      "platform" => $platform,
      "vplatform" => $vplatform,
      "robot" => $robotText,
      "clientip" => $clientIP,
    ]);

    return view("index");
  }
  public function project()
  {
    $data = Post::orderBy("id", "desc")->get();
    return view("src.project", ["data" => $data]);
  }
  public function sertifikat()
  {
    return view("src.sertifikat");
  }
}
