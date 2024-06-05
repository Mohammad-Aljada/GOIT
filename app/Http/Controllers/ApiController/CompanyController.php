<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Company;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        try {
            $companies = Company::with('services')->get();
            return response()->json([
                'status' => true,
                'message' => 'Companies fetched successfully',
                'companies' => $companies
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch companies',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $company = Company::with('services')->findOrFail($id);
            return response()->json([
                'status' => true,
                'message' => 'Company fetched successfully',
                'company' => $company
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Company not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'companies_name' => 'required|string|max:255',
                'companies_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'service_id' => 'sometimes|required|array',
                'service_id.*' => 'exists:services,id',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 400);
            }

            $data = $validator->validated();

            if ($request->hasFile('companies_image')) {
                $uploadedFile = Cloudinary::upload($request->file('companies_image')->getRealPath());
                $data['companies_image'] = $uploadedFile->getSecurePath();
            }

            $company = Company::create($data);
            $company->services()->attach($data['service_id']);

            return response()->json([
                'status' => true, 'message' =>
                'Company created successfully',
                'company' => $company
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create company',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $company = Company::findOrFail($id);

            $validator = Validator::make($request->all(), [
                'companies_name' => 'required|string|max:255',
                'companies_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'service_id' => 'sometimes|required|array',
                'service_id.*' => 'exists:services,id',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 400);
            }

            $data = $validator->validated();

            if ($request->hasFile('companies_image')) {
                $uploadedFile = Cloudinary::upload($request->file('companies_image')->getRealPath());
                $data['companies_image'] = $uploadedFile->getSecurePath();
            }

            if (isset($data['service_id'])) {
                $company->services()->sync($data['service_id']);
            }
            $company->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Company updated successfully',
                'company' => $company
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update company',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $company = Company::findOrFail($id);
            $company->delete();
            return response()->json([
                'status' => true,
                'message' => 'Company deleted successfully',
                'company' => null
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete company',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
