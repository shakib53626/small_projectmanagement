<?php

namespace App\Http\Controllers;

use App\Models\Our_Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OurProjectsController extends Controller
{
   public function OurProjects(){
    return view('admin.our_projects');
   }// End Method

   public function AddProject(Request $request){
      Our_Projects::insert([
         'domain_name' => $request->domain_name,
         'type' => $request->type,
         'end_date' => $request->end_date,
         'whatsapp_group_name' => $request->whatsapp_group_name,
         'phone_number' => $request->phone_number,
         'develop_by' => $request->develop_by,
         'project_information' => $request->project_information,
         'created_at' => Carbon::now(),
      ]);

      return redirect()->back();
   }//End Method

   public function DeleteProject($id){
      
      Our_Projects::findOrFail($id)->delete();

      return redirect()->back();
   }//End Method

   public function EditProject($id){
      $project_id = Our_Projects::find($id);
      return  response()->json([
         'project' => $project_id,
      ]);
   }// End Method

   public function UpdateProject(Request $request){
      $update_id = $request->id;

      Our_Projects::findOrFail($update_id)->update([
         'domain_name' => $request->domain_name,
         'type' => $request->type,
         'end_date' => $request->end_date,
         'whatsapp_group_name' => $request->whatsapp_group_name,
         'phone_number' => $request->phone_number,
         'develop_by' => $request->develop_by,
         'project_information' => $request->project_information,
      ]);

      return redirect()->back();
   }// End Method
}
