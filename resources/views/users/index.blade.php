@extends ('layouts.app')

@section ('title')
   Users
@endsection

@section ('content')
    <div class="section catalog random">
        <div class="container-wide actions-container">

            <h1>User Administration</h1>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <i class="fa fa-list"></i>
                            User Administration
                        </a>
                        <a href="{{ route('users.create') }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-plus"></i>
                            Create a new user
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Created</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <div class="btn-group-justified">
                                            <form class="d-inline-flex" method="GET" action="{{ route('users.edit', $user) }}">
                                                <button class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                            <form class="d-inline-flex" method="POST" action="{{ route('users.delete', $user) }}">
                                                {{ csrf_field() }}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection