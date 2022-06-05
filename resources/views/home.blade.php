@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-center"><strong>{{ __('Customer Queries') }}</strong></h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><b>Id</b></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact No.</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Query</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($queries as $q)
                                <tr>
                                    <th scope="row"><b> {{$q->id}} </b></th>
                                    <td> {{$q->name}} </td>
                                    <td> {{$q->contact_no}} </td>
                                    <td> {{$q->email}} </td>
                                    <td> {{$q->query}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection