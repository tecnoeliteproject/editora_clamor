<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequestRequest;
use App\Http\Requests\UpdateServiceRequestRequest;
use App\Models\ServiceRequest;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Auth;
use Illuminate\Support\Facades\Facade;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequestRequest $request, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceRequest $serviceRequest)
    {
        //
    }

    public function generateContract($id)
    {
       // $request = ServiceRequest::with(['user', 'servico'])->find($id);
       $request = ServiceRequest::with(['user', 'servico'])->find($id);
        $user = User::find(Auth::user()->id);


        // Dados que serão enviados para a view
        $data = [
            'title' => 'Contrato de Exemplo',
            'cliente' => $request->user,
            'servicos' => $request->servico->nome,
            'date' => date('d/m/Y'),
            'usuario_responsavel' => $request->user_responsavel,
            'content' => 'Este é o conteúdo do Contrato gerado pelo DomPDF.'
        ];

        // Renderizar a view e gerar o PDF
        $pdf = FacadePdf::loadView('contracts.contract', $data);

        // Baixar o PDF
        return $pdf->download('contrato-' . $request->id . '.pdf');
    }

    public function generateInvoice($id)
    {
       // $request = ServiceRequest::with(['user', 'servico'])->find($id);
       $request = ServiceRequest::with(['user', 'servico'])->find($id);
        $user = User::find(Auth::user()->id);


        // Dados que serão enviados para a view
        $data = [
            'title' => 'Contrato de Exemplo',
            'cliente' => $request->user,
            'servicos' => $request->servico->nome,
            'date' => date('d/m/Y'),
            'usuario_responsavel' => $request->user_responsavel,
            'content' => 'Este é o conteúdo do Contrato gerado pelo DomPDF.'
        ];

        // Renderizar a view e gerar o PDF
        $pdf = FacadePdf::loadView('invoices.invoice', $data);

        // Baixar o PDF
        return $pdf->download('factura-' . $request->id . '.pdf');
    }
}
