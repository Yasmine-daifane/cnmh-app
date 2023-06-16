@extends('layouts.app')

@section('content')
    <section class="content-header">


        <div class="container-fluid">

        </div>
    </section>


    <section class="content">
        <div class="container-fluid ">
            @include('flash::message')

            <div class="clearfix"></div>


            <div class="row">

                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        @include('dossier_patients.stepper')
                        <div class="card-header">


                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <div class="card">
                                    {!! Form::open(['route' => 'dossier-patients.store', 'method' => 'POST']) !!}
                                    <!-- Specify the route and method for the form -->

                                    <div class="card-body">
                                        <div class="row">
                                            @include('dossier_patients.fields')
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <a href="{{ url()->previous() }}{{ strpos(url()->previous(), '?') ? '&' : '?' }}patient_id={{ request('patientRadio') }}"
                                            class="btn btn-primary">@lang('crud.previous')</a>
                                           {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
                                        {{-- <a href="{{ route('dossier-patients.index') }}" class="btn btn-default">
                                            @lang('crud.cancel') </a> --}}
                                    </div>

                                    {!! Form::close() !!}
                                </div>


                            </div>

                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!-- /.card -->




    </section>
@endsection
