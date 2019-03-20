@extends('layouts.default' , ['title' => 'Contact'] )

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>

                <p class="text-muted">If you having trouble with this service , please <a href="mailto:{{ config('laracarte.admin_support_email') }}" >ask for help</a>.</p>

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf

                    <div class="form-group {{ $errors->has('name')? 'was-validated' :  '' }}">
                        <label for="name" class=" {{ $errors->has('name')? 'text-danger' :  '' }}">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"  required aria-describedby="nameHelp" >
                        {!!  $errors->first('name' , '<span class="help-block text-danger">:message</span>')  !!}
                    </div>

                    <div class="form-group {{ $errors->has('email')? 'was-validated' :  '' }}">
                        <label for="email" class=" {{ $errors->has('email')? 'text-danger' :  '' }}">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required aria-describedby="emailHelp" >
                        {!!  $errors->first('email' , '<span class="help-block text-danger">:message</span>')  !!}
                    </div>
                    
                    <div class="form-group {{ $errors->has('msg')? 'was-validated' :  '' }}">
                        <label for="message" class=" sr-only {{ $errors->has('msg')? 'text-danger' :  '' }}">Message</label>
                        <textarea name="msg" id="message" cols="30" class="form-control"  required rows="7">{{ old('msg') }}</textarea>
                        {!!  $errors->first('msg' , '<span class="help-block text-danger">:message</span>')  !!}
                    </div>


                    <input type="submit" class="btn btn-dark form-control" value="Submit Enquiry »">
                </form>

            </div>
        </div>
    </div>


@stop