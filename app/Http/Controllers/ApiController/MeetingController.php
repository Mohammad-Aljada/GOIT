<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Meetings;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mckenziearts\Notify\Facades\LaravelNotify;

class MeetingController extends Controller
{
    // Get all meetings
    public function index()
    {
        try {
            $meetings = Meetings::all();
            return view('admin.Meetings', compact('meetings'));
        } catch (\Exception $e) {
            return view('admin.Meetings', ['error' => 'Failed to fetch meetings']);
        }
    }

    // Create a new meeting
    public function store(Request $request)
    {

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'date' => 'required|date',
                'time' => 'required|date_format:H:i',
                'location' => 'required|nullable|string|max:255',
            ]);

            Meetings::create($request->all());

            LaravelNotify::success('Meeting added successfully!', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to add meeting ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }

    // Get a specific meeting
    public function show($id)
    {
        try {
            $meeting = Meetings::findOrFail($id);
            return view('index', ['meeting' => $meeting]);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Meeting not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Failed to fetch meeting', 'message' => $e->getMessage()
            ], 500);
        }
    }

    // Update a meeting
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'time' => 'sometimes|required|date_format:H:i:s',
            'date' => 'sometimes|required|date_format:Y-m-d',
            'location' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode(', ', $errors);
            LaravelNotify::error('Failed to update meeting ' . $errorMessage . '!', 'Error');
            return redirect()->back();
        }

        try {
            $meeting = Meetings::findOrFail($id);
            $meeting->update($validator->validated());
            LaravelNotify::success('Meeting updated successfully!', 'Success');
            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            LaravelNotify::error('Failed to update meeting ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to update meeting ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }

    // Delete a meeting
    public function destroy($id)
    {
        try {
            $meeting = Meetings::findOrFail($id);
            $meeting->delete();
            LaravelNotify::success('successfully deleted meeting!', 'success');
            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            LaravelNotify::error('Failed to delete meeting ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        } catch (\Exception $e) {
            LaravelNotify::error('Failed to delete meeting ' . $e->getMessage() . '!', 'Error');
            return redirect()->back();
        }
    }
}
