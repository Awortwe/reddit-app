@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Communities') }}</div>


                <div class="card-body">
                    <a href="{{ route('communities.create') }}" class="btn btn-primary">Create Community</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>


                        </thead>
                        <tbody>
                            @foreach ($communities as $item)
                                <tr>
                                    <td>
                                        <a href="{{ route('communities.show', $item) }}" style="text-decoration: none">
                                            {{ $item->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('communities.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
