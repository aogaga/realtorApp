@extends('_layout.master')

@section('content')

    <div class="row">
        <div class="col-10 white">
            @if (count($contacts) < 1)
                <h1> Contact not found</h1>

            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">HTHAU</th>
                        <th scope="col">Budget</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($contacts as $contact)
                    <tr>


                        <td>{{$contact->fname}}</td>
                        <td>{{$contact->lname}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->streetAddress . " ". $contact->city . " ". $contact->state . " ". $contact->zip}}</td>
                        <td>{{$contact->hearaboutUs}}</td>
                        <td>{{$contact->budget}}</td>

                    </tr>

                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
