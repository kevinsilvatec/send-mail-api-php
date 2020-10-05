<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helpers\MailHelper;

class MailController extends Controller
{
    public function sendLead(Request $request) {
        try {            
            $reqData = [];
            $reqData['leadName'] = $request->leadName;
            $reqData['leadTelephone'] = $request->leadTelephone;
            $reqData['leadEmail'] = $request->leadEmail;
            $reqData['leadMessage'] = $request->leadMessage;
            $reqData['idProperty'] = $request->idProperty;
            $reqData['advertiserName'] = $request->advertiserName;
            $reqData['advertiserEmail'] = $request->advertiserEmail;
            $reqData['sellfMail'] = $request->sellfMail;
            $reqData['sellfMailPass'] = $request->sellfMailPass;
            
            $mailHtml = new MailHelper();
            
            $mailHtml = $mailHtml->sendMail($reqData);

            $data = [
                'message'=> $mailHtml['message'],
                'statusCode' => $mailHtml['statusCode']
            ]; 
                                    
            return response()->json($data, $mailHtml['statusCode']);
                        
        } catch (\Exception $e) {
            $data = [
                'message'=> $e->getMessage(),
                'statusCode' => 500
            ]; 
            return response()->json($data, $data['statusCode']);
        }
    }
}
