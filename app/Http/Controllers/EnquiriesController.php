<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EnquiriesController extends Controller
{


    public function postEnq(Request $request)
    {
        // Log the incoming request data
        Log::info('Received enquiry request', $request->all());

        // Validate the request data
        $validated = $request->validate([
            'fullName' => 'string|required',
            'email' => 'email|required', // Ensures the email is properly validated
            'phoneNumber' => 'nullable|string',
            'body' => 'string|required',
        ]);

        // Log validated data
        Log::info('Validated enquiry data', $validated);

        // Create enquiry
        $response = Enquiry::create([
            'fullName' => $validated['fullName'],
            'email' => $validated['email'],
            'phoneNumber' => $validated['phoneNumber'] ?? null,
            'body' => $validated['body'],
        ]);

        // Log database response
        if ($response) {
            Log::info('Enquiry created successfully', ['enquiry_id' => $response->id]);
        } else {
            Log::error('Failed to create enquiry in database');
        }

        // Prepare email data
        $emailData = [
            'fullName' => $validated['fullName'],
            'email' => $validated['email'],
            'phoneNumber' => $validated['phoneNumber'] ?? null,
            'body' => $validated['body'],
        ];

        // Send email
        try {
            Mail::to($emailData['email'])->send(new EnquiryMail($emailData));
            Log::info('Enquiry email sent', ['to' => $emailData['email']]);
            return response()->json(['success' => 'We received your message and will reach out to you soon.']);
        } catch (\Exception $e) {
            // Log email sending error
            Log::error('Failed to send enquiry email', [
                'to' => $emailData['email'],
                'error' => $e->getMessage()
            ]);
            return response()->json(['error' => 'Something went wrong.']);
        }
    }


    public function readMail($id)
    {
        $mail = Enquiry::find($id);

        if ($mail) {
            return view('Admin.ReadMail', ['data' => $mail]);
        } else {
            // Redirect to the previous page or a specific route with an error message
            return redirect()->back()->with('error', 'Mail not found.');
        }
    }

    public function deleteMail($id)
{
    // Find the mail or return 404 if not found
    $mail = Enquiry::find($id);

    if (!$mail) {
        return response()->json([
            'success' => false,
            'message' => 'Mail not found.'
        ], 404);
    }

    // Attempt to delete the mail
    if ($mail->delete()) {
        return response()->json([
            'success' => true,
            'message' => 'Mail deleted successfully along with related applications.'
        ], 200);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Failed to delete mail. Please try again.'
        ], 500);
    }
}

}
