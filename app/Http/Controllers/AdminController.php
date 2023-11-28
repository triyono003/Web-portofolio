<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Post;

class AdminController extends Controller
{
  public function create()
  {
    return view("admin.dashboard", [
      "dataVisitor" => Visitor::orderBy("id", "desc")->get(),
    ]);
  }

  //insert postingan
  public function store(Request $request)
  {
    $request->validate([
      "name" => "required",
      "string",
      "min:5",
      "description" => "required",
      "image" => "required",
      "mimes:jpg,jpeg,png",
      "max:2048",
    ]);
    try {
      Post::create([
        "name" => $request->name,
        "description" => $request->description,
        "image" => $request->file("image")->store("post-images"),
      ]);
      return redirect()->back()->with("success", "Upload  Success");
    } catch (\Exception $e) {
      return redirect()->back()->withError("error", "Upload Vailed");
    }
  }
}
