@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel PDF</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   	<a href="{{ route('pdf.index') }}"><button class="btn btn-primary">Ver PDF</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection