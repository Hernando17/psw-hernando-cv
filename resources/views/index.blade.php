@extends('Layout/index')
@section('title', 'Hernando | CV')
@section('content')

    <div>
        <div class="d-flex align-items-center mt-5 py-3">
            <div class="d-flex container">
                <div class="d-flex w-100 align-items-center flex-column flex-sm-row">
                    <img src="{{ asset('images/pas_foto.jpg') }}" class="foto rounded-5" />
                    <div>
                        <div>
                            <h1 class="fw-bold">Welcome to my website</h1>
                            <div class="mt-5">
                                <h2>Hernando</h2>
                                <h4>Student</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
