@extends('layouts.master')

@section('content')
    <div id="invoice">
        <div class="card">
            <div class="card-header">
                <div class="clearfix">
                    <span class="card-title">Create Invoice</span>
                    <a href="{{ route('invoices.index') }}" class="btn btn-primary float-right">Back</a>
                </div>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">
                <a href="{{ route('invoices.index') }}" class="btn btn-danger">CANCEL</a>
                <button class="btn btn-success">CREATE</button>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="js/app.js"></script>
@endpush