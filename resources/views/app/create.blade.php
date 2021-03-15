@extends('_layout.master')

@section('content')
    <div class="row">
        <div class="col-6 offset-md-3">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">

        <div class="col-6 offset-md-3">
            {{ Form::open(array('url' => '')) }}
            @honeypot
{{--            @captcha--}}
                <div class="row g-3">
                    <div class="col">
                        {{Form::label('fname', 'First name', ['class' => 'form-label'])}}
                        {{Form::text('fname', '', ['class'=>'form-control', 'placeholder'=>'First name'])}}
                    </div>
                    <div class="col">
                        {{Form::label('lname', 'Last name', ['class' => 'form-label'])}}
                        {{Form::text('lname', '', ['class'=>'form-control', 'placeholder'=>'Last name'])}}
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        {{Form::label('email', 'Email address', ['class' => 'form-label'])}}
                        {{Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'name@example.com'])}}
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        {{Form::label('phone', 'Phone Number', ['class' => 'form-label'])}}
                        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'(123)-456-7890'])}}
                    </div>
                </div>


                <div class="row bm">
                    <div class="mb-3">
                        {{Form::label('streetAddress', 'Home Street Address', ['class' => 'form-label'])}}
                        {{Form::text('streetAddress', '', ['class'=>'form-control', 'placeholder'=>'Home Street Addresss'])}}
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 ">
                        <div class="mb-3">
                            {{Form::label('zip', 'Zip Code', ['class' => 'form-label'])}}
                            {{Form::text('zip', '', ['class'=>'form-control', 'placeholder'=>'Zip Code'])}}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            {{Form::label('city', 'City', ['class' => 'form-label'])}}
                            {{Form::text('city', '', ['class'=>'form-control', 'placeholder'=>'City'])}}
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-3">
                            {{Form::label('state', 'State', ['class' => 'form-label'])}}
                            {{Form::select('state',[ 'TX' =>'TX', 'NY' => 'NY', 'GA' => 'GA'], null, ['class'=>'form-select  form-select-lg mb-3'])}}
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="hearaboutUs" class="form-label">How did you hear about us</label>
                        {{Form::textarea('hearaboutUs', '', ['class'=>'form-control', 'placeholder'=>'How did you hear about us', 'row'=>'2'])}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            {{Form::label('budget', 'Budget', ['class' => 'form-label'])}}
                            {{Form::select('budget',[ 'Less thank $50k' => 'Less thank $50k', '$50k - $100k' => '$50k - $100k', 'Above $100K' => 'Above $100K'], null, ['class'=>'form-select  form-select-lg mb-3'])}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
                    </div>
                </div>
            {{ Form::close() }}
        </div>

    </div>
@endsection

