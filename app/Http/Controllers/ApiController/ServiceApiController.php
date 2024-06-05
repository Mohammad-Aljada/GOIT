<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Validator;

class ServiceApiController extends Controller
{
    public function index()
    {
        try {
            $services = Service::with('companies')->get();
            return response()->json([
                'status' => true,
                'message' => 'Services fetched successfully',
                'services' => $services
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch services',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'services_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_id' => 'sometimes|required|array',
            'company_id.*' => 'exists:companies,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            $data = $validator->validated();

            if ($request->hasFile('image_url')) {
                $uploadedFileUrl = Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();
                $data['image_url'] = $uploadedFileUrl;
            }

            $service = Service::create($data);
            $service->companies()->attach($data['company_id']);

            return response()->json([
                'status' => true,
                'message' => 'Service created successfully',
                'service' => $service
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create service',
                'error' => $e->getMessage()
            ], 500);
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
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 400);
            }

            $data = $validator->validated();

            if ($request->hasFile('image_url')) {
                $uploadedFile = Cloudinary::upload($request->file('image_url')->getRealPath());
                $data['image_url'] = $uploadedFile->getSecurePath();
            }

            if (isset($data['company_id'])) {
                $service->companies()->sync($data['company_id']);
            }

            $service->update($data);

            return response()->json([
                'status' => true,
                'message' => 'Service updated successfully',
                'service' => $service
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update service',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);

            $service->delete();

            return response()->json([
                'status' => true,
                'message' => 'Service deleted successfully',
                'service' => $service
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete service',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
