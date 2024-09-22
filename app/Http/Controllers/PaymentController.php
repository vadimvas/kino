<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Categorie;
use App\Service\PaymentService;
use Illuminate\Http\Request;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class PaymentController extends Controller
{
    public function index()
    {
        $categories=Categorie::all();
        return view('payments.index',['categories'=>$categories]);
    }

    public function create(Request $request,PaymentService $service)
    {
        $userId=$request->input('user_id');
        $amount=$request->input('amount');
        $description="Пополнение баланса";

        $transaction=Transaction::create([
            'user_id'=>$userId,
            'amount'=>$amount,
            'description'=>$description
        ]);
        if($transaction){
           $link= $service->createPayment($amount,$description,[
                'transaction_id'=>$transaction->id
            ]);
            return redirect()->away($link);
        }
    }
    public function callback(Request $request,PaymentService $service)
    {
        $source = file_get_contents('php://input');
        $requestBody = json_decode($source, true);
        $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED) ? new NotificationSucceeded($requestBody): new NotificationWaitingForCapture($requestBody);
        $payment = $notification->getObject();
        if(isset($payment->status) && $payment->status === 'succeeded'){
            if($payment->paid === true){
                $metadata=$payment->metadata;
                if($metadata->transaction_id){
                    $transaction_id=$metadata->transaction_id;
                    $transaction=Transaction::find($transaction_id);
                    $transaction->status='CONFIRME';
                    $transaction->save();

                    $balans=$payment->amount->value;
                }
            }
        }

    }
}
