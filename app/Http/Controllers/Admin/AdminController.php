<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use SweetAlert;
use Mail;
use Alert;
use Log;
use Carbon\Carbon;

use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function index(){
        $admin = Admin::first();
        return view('admin.home',[
            'admin' => $admin
        ]);
    }

    public function compose(){
        $admin = Admin::first();
        return view('admin.compose',[
            'admin' => $admin
        ]);
    }


    // public function sendEmail(){
    //     $validator = Validator::make($request->all(), [
    //         'to' => 'required|csv',
    //         'subject' => 'required',
    //         'body' => 'required',
    //         'image' => 'sometimes',
    //     ]);

    //     if($validator->fails()) {
    //         alert()->error('Error', $validator->messages()->all()[0])->persistent('Close');
    //         return redirect()->back();
    //     }


    // }


    // // public function sendEmail(Request $request) {
    // //     // Validate the request
    // //     $validator = Validator::make($request->all(), [
    // //         'to' => 'required', // CSV file validation
    // //         'subject' => 'required|string',
    // //         'body' => 'required|string',
    // //         'image' => 'sometimes|image', // Validate if an image is provided
    // //     ]);
    
    // //     // Handle validation failures
    // //     if($validator->fails()) {
    // //         alert()->error('Error', $validator->messages()->all()[0])->persistent('Close');
    // //         return redirect()->back()->withInput();
    // //     }
    
    // //     // Extract validated data
    // //     $data = $validator->validated();
    
    // //     // Parse the CSV file to extract email addresses
    // //     $emails = [];
    // //     if ($request->hasFile('to')) {
    // //         $csv = Reader::createFromPath($request->file('to')->getRealPath(), 'r');
    // //         $csv->setHeaderOffset(0); // If the CSV has a header row
    // //         foreach ($csv as $record) {
    // //             $emails[] = $record['email']; // Adjust this to the correct column name
    // //         }
    // //     }
    
    // //     // Send emails
    // //     foreach ($emails as $email) {
    // //         try {
    // //             Mail::send([], [], function ($message) use ($data, $email, $request) {
    // //                 $message->to(trim($email))
    // //                         ->subject($data['subject'])
    // //                         ->setBody($data['body'], 'text/html'); // or 'text/plain'
    
    // //                 // Check if there's an image and attach it
    // //                 if ($request->hasFile('image')) {
    // //                     $message->attach($request->file('image')->getRealPath(), [
    // //                         'as' => $request->file('image')->getClientOriginalName(),
    // //                         'mime' => $request->file('image')->getMimeType(),
    // //                     ]);
    // //                 }
    // //             });
    // //         } catch (\Exception $e) {
    // //             // Log the error or handle it as needed
    // //             Log::error('Failed to send email to ' . $email . ': ' . $e->getMessage());
    // //             alert()->error('Error', 'Failed to send email to ' . $email . '. Error: ' . $e->getMessage())->persistent('Close');
    // //             return redirect()->back()->withInput();
    // //         }
    // //     }
    
    // //     // Success message
    // //     alert()->success('Success', 'Emails have been sent successfully.')->persistent('Close');
    // //     return redirect()->back();
    // // }

    // public function sendEmail(Request $request) {
    //     // Validate the request
    //     $validator = Validator::make($request->all(), [
    //         'subject' => 'required|string',
    //         'body' => 'required|string',
    //         'to' => 'required',
    //         'image' => 'sometimes|image',
    //     ]);
    
    //     if ($validator->fails()) {
    //         alert()->error('Error', $validator->messages()->all()[0])->persistent('Close');
    //         return redirect()->back();
    //     }
    
    //     // Extract validated data
    //     $data = $validator->validated();
    
    //     // Parse the CSV file to extract email addresses
    //     $emails = [];
    //     if ($request->hasFile('to')) {
    //         $csv = Reader::createFromPath($request->file('to')->getRealPath(), 'r');
    //         $csv->setHeaderOffset(0); // Assuming the CSV has a header row
    //         foreach ($csv as $record) {
    //             $emails[] = $record['email']; // Adjust this to the correct column name
    //         }
    //     }
    
    //     // Initialize the error flag
    //     $hasError = false;
    
    //     // Send emails
    //     foreach ($emails as $email) {
    //         try {
    //             Mail::send([], [], function ($message) use ($data, $email, $request) {
    //                 $message->to(trim($email))
    //                         ->subject($data['subject'])
    //                         ->setBody($data['body'], 'text/html'); // or 'text/plain'
    
    //                 // Check if there's an image and attach it
    //                 if ($request->hasFile('image')) {
    //                     $message->attach($request->file('image')->getRealPath(), [
    //                         'as' => $request->file('image')->getClientOriginalName(),
    //                         'mime' => $request->file('image')->getMimeType(),
    //                     ]);
    //                 }
    //             });
    //         } catch (\Exception $e) {
    //             // Log the error or handle it as needed
    //             Log::error('Failed to send email to ' . $email . ': ' . $e->getMessage());
    //             alert()->error('Error', 'Failed to send email to ' . $email . '. Error: ' . $e->getMessage())->persistent('Close');
    //             $hasError = true;
    //         }
    //     }
    
    //     if ($hasError) {
    //         alert()->error('Error', 'Some emails failed to send. Check the logs for more details.')->persistent('Close');
    //     } else {
    //         alert()->success('Success', 'Emails have been sent successfully.')->persistent('Close');
    //     }
    
    //     return redirect()->back();

    // }

}
