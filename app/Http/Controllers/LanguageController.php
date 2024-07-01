<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    public function getLang()
    {
        $data = Language::all();

        return view('admin.includes.Languages.language', compact('data'));
    }
    public function index()
    {
        $data = Language::select()->get();
        return response()->json(['items' => $data]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'          => ['required', 'string', 'max:255'],
            'abbr'          => ['required'],
            'active'        => ['nullable', 'max:255'],
            'direction'     => ['nullable', 'max:255'],
            'local'         => ['required', 'string'],
            'img'           => ['nullable', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()->toArray(),
            ]);
        }
        $Detail = new Language();
        $Detail->name       = $request->input('name');
        $Detail->abbr       = $request->input('abbr');
        $Detail->local      = $request->input('local');
        $Detail->direction  = $request->input('direction');
        $Detail->active     = $request->input('active');
        $Detail->img        = $request->input('img');
        if ($request->hasFile('img')) {
            $image1 = time() . 'image1.' . $request->img->extension();
            $request->img->move(public_path('upload/languages'), $image1);
            $Detail->img = $image1;
        }
        $Detail->save();

        return response()->json([
            'status' => 200,
            'message' => ('added successfully'),
        ]);
    }

    public function show($id)
    {
        $data = Language::find($id);
        return [
            'item' => $data,
        ];
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'           => ['nullable', 'string', 'max:255'],
            'abbr'           => ['nullable', 'max:255'],
            'active'         => ['nullable', 'max:255'],
            'direction'      => ['nullable', 'max:255'],
            'local'          => ['nullable', 'max:255'],
            'id'             => 'required|exists:Language,id',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->errors()->toArray(),
            ]);
        }

        $Detail = Language::find($request->id);
        $Detail->name       = $request->input('name');
        $Detail->abbr       = $request->input('abbr');
        $Detail->active     = $request->input('active');
        $Detail->direction  = $request->input('direction');
        $Detail->local  = $request->input('local');

        if ($request->hasFile('img')) {
            $Detail->img = $this->upload_image($request->file('img'), 'upload/webDetail', $Detail->img);
            // $des = 'upload/webDetail/' . $Detail->img;
            // File::delete($des);
            // $image = time() . 'image1.' . $request->img->extension();
            // $request->img->move(public_path('upload/webDetail'), $image);
            // $Detail->img = $image;
        }
        if ($request->hasFile('img2')) {
            $Detail->img2 = $this->upload_image($request->file('img2'), 'upload/webDetail', $Detail->img2);
            // $des = 'upload/webDetail/' . $Detail->img2;
            // File::delete($des);
            // $image = time() . 'image2.' . $request->img2->extension();
            // $request->img2->move(public_path('upload/webDetail'), $image);
            // $Detail->img2 = $image;
        }
        $Detail->update();
        return response()->json([
            'status' => 200,
            'message' => 'updated successfully',
        ]);
    }



    public function destroy($item_id)
    {
        $Detail = Language::find($item_id);
        if ($Detail) {
            $des = 'upload/webDetail/' . $Detail->img;
            File::delete($des);
            $des2 = 'upload/webDetail/' . $Detail->img2;
            File::delete($des2);
            $Detail->delete();
            return response()->json([
                'status' => 200,
                'item' => $Detail
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Detail not found',
            ]);
        }
    }
    public function show_id($item_id)
    {
        $Detail = Language::find($item_id);
        return ($Detail);
    }
}
