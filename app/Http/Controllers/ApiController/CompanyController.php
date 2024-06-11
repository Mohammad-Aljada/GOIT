<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Company;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mckenziearts\Notify\Facades\LaravelNotify;

class CompanyController extends Controller
{
    public function index()
    {
        try {
            $companies = Company::with('services')->get();
            return view('admin.Companies', compact('companies'));
        } catch (\Exception $e) {
            return view('admin.Companies', ['error' => 'Failed to fetch companies']);
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
                'companies_image' => 'required|nullable|image|mimes:jpeg,png,svg,jpg,gif|max:2048',
                'service_id' => 'sometimes|required|array',
                'service_id.*' => 'exists:services,id',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                $errorMessage = implode(', ', $errors);
                LaravelNotify::error('Failed to add company ' . $errorMessage . '!', 'Error');
                return redirect()->back();
            }

            $data = $validator->validated();

            if ($request->hasFile('companies_image')) {
                $uploadedFile = Cloudinary::upload($request->file('companies_image')->getRealPath());
                $data['companies_image'] = $uploadedFile->getSecurePath();
            }

            $company = Company::create($data);
            $company->services()->attach($data['service_id']);

            LaravelNotify::success('Company added successfully!', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to add company ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
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
                $errors = $validator->errors()->all();
                $errorMessage = implode(', ', $errors);
                LaravelNotify::error('Failed to update company ' . $errorMessage . '!', 'Error');
                return redirect()->back();
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
            LaravelNotify::success('Company updated successfully!', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to update company ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $company = Company::findOrFail($id);
            $company->delete();
            LaravelNotify::success('successfully deleted company!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to delete company ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }
}
