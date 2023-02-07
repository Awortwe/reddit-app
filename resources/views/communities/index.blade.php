@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Communities') }}</div>


                <div class="card-body">
                    @if (Session('message'))
                        <div class="alert alert-info">
                            {{ Session('message') }}
                        </div>
                    @endif
                    <br>
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
                            @foreach ($communities as $community)
                                <tr>
                                    <td>
                                        <a href="{{ route('communities.show', $community) }}" style="text-decoration: none">
                                            {{ $community->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('communities.edit', $community) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('communities.destroy', $community) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                        </form>
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
