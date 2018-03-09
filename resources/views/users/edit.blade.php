@extends ('layouts.app')

@section ('title')
    Users
@endsection

@section ('content')
    <div class="section catalog random">
        <div class="col-container actions-container">

            <h1>Edit user</h1>
            <p class="actions-copy">{{ $user->name }}</p>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', $user) }}">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email address" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation">Confirm password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-purple btn-block">
                                    <i class="fa fa-save"></i>
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection