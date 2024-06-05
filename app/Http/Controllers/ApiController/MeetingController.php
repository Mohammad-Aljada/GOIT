<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Meetings;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MeetingController extends Controller
{
    // Get all meetings
    public function index()
    {
        try {
            $meetings = Meetings::all();
            return response()->json([
                'status' => 'true',
                'message' => 'all Meetings fetched successfully',
                'meetings' => $meetings,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Failed to fetch meetings', 'message' => $e->getMessage()
            ], 500);
        }
    }

    // Create a new meeting
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i:s',
            'location' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            $meeting = Meetings::create($validator->validated());
            return response()->json([
                'status' => 'true',
                'message' => 'Meeting created successfully',
                'meeting' => $meeting
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Failed to create meeting',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // Get a specific meeting
    public function show($id)
    {
        try {
            $meeting = Meetings::findOrFail($id);
            return response()->json([
                'status' => 'true',
                'message' => 'Meeting fetched successfully',
                'meeting' => $meeting
            ], 200);
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
            return response()->json([
                'status' => 'false', 'errors' => $validator->errors()], 400);
        }

        try {
            $meeting = Meetings::findOrFail($id);
            $meeting->update($validator->validated());
            return response()->json([
                'status' => 'true',
                'message' => 'Meeting updated successfully',
                'meeting' => $meeting
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Meeting not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Failed to update meeting', 'message' => $e->getMessage()
            ], 500);
        }
    }

    // Delete a meeting
    public function destroy($id)
    {
        try {
            $meeting = Meetings::findOrFail($id);
            $meeting->delete();
            return response()->json([
                'status' => 'true',
                'message' => 'Meeting deleted successfully',
                'meeting' => null,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Meeting not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'error' => 'Failed to delete meeting', 'message' => $e->getMessage()
            ], 500);
        }
    }
}
