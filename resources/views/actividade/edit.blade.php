@extends('layouts.base')
@section('template_title')
    Update Actividade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Actividade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividades.update', $actividade->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
