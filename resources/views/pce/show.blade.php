@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">PCE punten</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    TODO: more than just {{ $pcePoint->location_code }} {{ $pcePoint->user->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
