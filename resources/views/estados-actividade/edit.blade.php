@extends('layouts.base')
@section('template_title')
    Update Estados Actividade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Estados Actividade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estados-actividades.update', $estadosActividade->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('estados-actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
