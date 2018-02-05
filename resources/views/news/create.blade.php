@extends('news.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New News</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
            </div>
        </div>
    </div>



    {!! Form::open(array('route' => 'news.store','method'=>'POST')) !!}
         @include('news.form')
    {!! Form::close() !!}


@endsection