<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Validation\Rule;

class OperationalController extends Controller
{

    public function sendSms(string $number, string $message)
    {
        $username = 'FarmSales'; // use 'sandbox' for development in the test environment
        $apiKey   =  getenv('AT_API_KEY'); // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);


        // Get one of the services
        $sms      = $AT->sms();


        // Use the service
        $result   = $sms->send([
            'to'      => $number,
            'message' => $message,
        ]);


    }

    public function NewContact(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => ['required', 'string', 'max:20', Rule::unique('contacts', 'phone')],
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            $contact->save();

            $user = $contact->phone;
            $sms = "Hello, I wanted to test if it's working. Thank you.";
            $this->sendSms($user, $sms);

            return redirect()->back()->with('success', 'New contact sent successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


}
