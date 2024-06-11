<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Validator;
use Mckenziearts\Notify\Facades\LaravelNotify;
use Illuminate\Support\Str;

class ServiceApiController extends Controller
{
    public function index()
    {
        try {
            $services = Service::with('companies')->get();
            return view('admin.Services', compact('services'));
        } catch (\Exception $e) {
            return view('admin.Services', ['error' => 'Failed to fetch services']);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'services_name' => 'required|string|max:255',
            'slug' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'required|nullable|image|mimes:jpeg,png,svg,jpg,gif|max:2048',
            'company_id' => 'sometimes|required|array',
            'company_id.*' => 'exists:companies,id',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode(', ', $errors);
            LaravelNotify::error('Failed to add service ' . $errorMessage . '!', 'Error');
            return redirect()->back();
        }

        try {
            $uploadedFile = $request->file('image_url');
            $uploadedFileUrl = Cloudinary::upload($uploadedFile->getRealPath())->getSecurePath();

            $service = new Service();
            $service->services_name = $request->services_name;
            $service->slug = Str::slug($request->services_name);
            $service->description = $request->description;
            $service->image_url = $uploadedFileUrl;
            $service->save();


            LaravelNotify::success('service added successfully!', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to add service ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $service = Service::with('companies')->findOrFail($id);
            return response()->json([
                'status' => true,
                'message' => 'Service fetched successfully',
                'service' => $service
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = Service::findOrFail($id);

            $validator = Validator::make($request->all(), [
                'services_name' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|nullable|string',
                'image_url' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'company_id' => 'sometimes|required|array',
                'company_id.*' => 'exists:companies,id',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                $errorMessage = implode(', ', $errors);
                LaravelNotify::error('Failed to update service ' . $errorMessage . '!', 'Error');
                return redirect()->back();
            }

            $data = $validator->validated();

            if ($request->hasFile('image_url')) {
                $uploadedFile = Cloudinary::upload($request->file('image_url')->getRealPath());
                $data['image_url'] = $uploadedFile->getSecurePath();
            }
            $service->update($data);
            LaravelNotify::success('service updated successfully!', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to update service ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);

            $service->delete();

            LaravelNotify::success('successfully deleted service!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to delete service ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }
}
