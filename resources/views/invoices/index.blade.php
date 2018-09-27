@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="clearfix">
                <span class="card-title">Invoices</span>
                <a href="{{ route('invoices.create') }}" class="btn btn-success float-right">Create</a>
            </div>        
        </div>
        <div class="card-body">
            @if($invoices->count())
                <table class="table table-striped">
                    <thead>
                        <th>Invoice No.</th>
                        <th>Grand Total</th>
                        <th>Client</th>
                        <th>Invoice Date</th>
                        <th colspan="2">Created At</th>
                    </thead>
                    <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                            <td>{{ $invoice->invoice_no }}</td>
                            <td>{{ $invoice->grand_total }}</td>
                            <td>{{ $invoice->client }}</td>
                            <td>{{ $invoice->due_date }}</td>
                            <td>{{ $invoice->created_at->diffForHumans() }}</td>
                            <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="invoice-empty">
                    <div class="invoice-empty-title">
                        No Invoices were created.
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection