@extends('_layout.master')

@section('content')

    <div class="row">
        <div class="col-10 white">
        @if (empty($contact))
            <h1> Contact not found</h1>

            @else
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First</th>
                    <td>{{$contact->fname}}</td>
                </tr>
                <tr>
                    <th scope="col">Last</th>
                    <td>{{$contact->lname}}</td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{$contact->email}}</td>

                </tr>
                <tr>
                    <th scope="col">Phone</th>
                    <td>{{$contact->phone}}</td>
                </tr>
                <tr>
                    <th scope="col">Address</th>
                    <td>{{$contact->streetAddress . " ". $contact->city . " ". $contact->state . " ". $contact->zip}}</td>
                </tr>
                <tr>
                    <th scope="col">HTHAU</th>
                    <td>{{$contact->hearaboutUs}}</td>
                </tr>
                <tr>
                    <th scope="col">Budget</th>
                    <td>{{$contact->budget}}</td>
                </tr>
                </thead>
            </table>
        @endif
        </div>
    </div>
@endsection
