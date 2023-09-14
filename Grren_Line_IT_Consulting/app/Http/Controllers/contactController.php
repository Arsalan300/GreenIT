<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function send(Request $request)
    {
        $db = new Contact();

        $db->fullname = $request->fullname;
        $db->email = $request->email;
        $db->company = $request->company;
        $db->services = $request->service;
        $db->phone = $request->phone;
        $db->state = $request->state;
        $db->country = $request->country;
        $db->city = $request->city;
        $db->projectDetail = $request->detail;

        $db->save();

        return redirect()->route('thank');
    }
}
