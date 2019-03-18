@extends('layouts.default' , ['title' => 'About'] )

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>

                <p class="text-muted">If you having trouble with this service , please <a href="#" >ask for help</a>.</p>

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="text-muted">Name</label>
                        <input type="text" class="form-control" id="name" name="name"  required aria-describedby="nameHelp" >
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-muted">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp" >
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="text-muted sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" class="form-control" required rows="7"></textarea>
                    </div>


                    <input type="submit" class="btn btn-dark form-control" value="Submit Enquiry »">
                </form>

            </div>
        </div>
    </div>


@stop