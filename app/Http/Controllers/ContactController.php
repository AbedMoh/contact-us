<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\contactUpd;
use App\Models\contactDel;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;



class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact-list',compact('contacts'));
    }

    public function contact(){
        
        return view('contact');
    }


    public function store(Request $request){

        
        $contact = new Contact;
        $contact->fName = $request->firstName;
        $contact->lName = $request->lastName;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back();
    }


    public function update($id){
        $data = Contact::find($id);
        return view('upd',['data' => $data]);


        // $contactUpd = Contact::find($id);
        // $contactUpd->fName = $request->firstName;
        // $contactUpd->lName = $request->lastName;
        // $contactUpd->email = $request->email;
        // $contactUpd->save();
        // return redirect()->back();
    }

    public function updateData (Request $req){

        $dataUpd = Contact::find($req->id);
        $dataUpd->fName=$req->firstNameUpd;
        $dataUpd->lName=$req->lastNameUpd;
        $dataUpd->email=$req->emailUpd;
        $dataUpd->save();
         return redirect('/');
        
    }



    public function delete($id){
        $contactDel = Contact::find($id);
        $contactDel->delete();
        return redirect()->back();
    }

    
}

