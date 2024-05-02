<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use TCPDF;

class UserController extends Controller
{
    public function showHome()
    {
        // Retrieve the authenticated user's transactions
        $user = auth('user')->user();
        $transactions = $user->transactions()->paginate(2); // Change 10 to the desired number of items per page

        // Pass the paginated transactions to the view
        return view('user.user_home', compact('transactions','user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'ref' => 'required|string',
            'beneficiary' => 'required|string',
            'account' => 'required|string',
            'iban' => 'required|string',
            'swift' => 'required|string',
            'bank_beneficiary' => 'required|string',
            'digit' => 'required|numeric',
        ]);

        // Create the transaction record
        $transaction = Transaction::create(array_merge($request->all(), ['user_id' => auth('user')->id()]));

        // Initialize TCPDF and set document information
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Transaction');
        $pdf->SetSubject('Transaction Details');

        // Add a page
        $pdf->AddPage();

        // Fetch the view content
        $viewContent = view('transaction.pdf', compact('transaction'))->render();

        // Write the HTML content
        $pdf->writeHTML($viewContent, true, false, true, false, '');

        // Define the PDF filename
        $pdfFileName = 'transaction_' . $transaction->id . '.pdf';

        // Save the PDF to a file in the storage
        $pdfPath = storage_path('app/public/' . $pdfFileName);
        $pdf->Output($pdfPath, 'F');

        // Update the transaction record with the PDF filename
        $transaction->pdf=$pdfFileName;
        $transaction->save();
        auth('user')->user()->balance-=$transaction->amount;
        // Redirect with a success status message
        return redirect()->route('home')->with('status', 'Transaction created successfully!');
    }


}
