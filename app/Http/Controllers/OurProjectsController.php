<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurProjectsController extends Controller
{
   public function OurProjects(){
    return view('admin.our_projects');
   }
}
