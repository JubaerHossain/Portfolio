<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\model\front\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Null_;
use Validator;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{



    public function show(Request $request)
    {
        try{

            $different_service_detail = Work::orderBy('id','desc')->get();
            return view('admin.work.index', ['different_service_detail' => $different_service_detail]);
        }catch (\Exception $e) {
            return back()->with('success','Work demo Show');
        }
    }

    public function add()
    {
        return view('admin.work.add_service');
    }

    public function store(Request $request)
    {
        try{


            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required',
                'description' => 'required'
            ]);

            $service = new Work();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/work');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $service->image = $name;
            }

            $service->title = $request->get('title');
            $service->description = $request->get('description');

            $service->save();
            return redirect()
                ->route('work')
                ->with('success', 'Work demo has been added successfully');

        }catch (\Exception $e) {
            return back()->with('success','Work demo Show');
        }
    }

    public function edit($id)
    {

        try{
            $data = Work::where('id',$id)->first();
            return view('admin.work.Edit_service',['data'=>$data]);
        }catch (\Exception $e) {
            return back()->with('success','Work demo Cant store');
        }

    }

    public function update(Request $request)
    {
        try{
            $d=Work::all();
            $data = Work::find($request->image_id);

            if($request->image == Null) {
                $data->image = $request->imagee;
                $data->update();
            } else


                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'title' => 'required',
                    'description' => 'required'
                ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/work');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $data->image = $name;
            }
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();

            return redirect()
                ->route('work')
                ->with('success','Work demo update successfully.');
        }catch (\Exception $e) {
            return back()
                ->with('success','Work demo Cant update');
        }

    }

    public function delete($id)
    {
        try{


            Work::where('id', $id)
                ->delete();
            return redirect()
                ->route('Smooth-service')
                ->with('success', 'Work demo has been deleted successfully');
        }catch (\Exception $e) {
            return back()->with('success','Service Cant delete');
        }
    }

}
