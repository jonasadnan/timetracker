@extends ('layouts.app')

@section ('title')
    Users
@endsection

@section ('content')
    <div class="section catalog random">
        <div class="container-wide actions-container">

            <h1>Create a new user</h1>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-list"></i>
                            User Administration
                        </a>
                        <a href="#" class="list-group-item list-group-item-action active">
                            <i class="fa fa-plus"></i>
                            Create a new user
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form here -->
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Your email address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation">Confirm password</label>
                                        <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-purple btn-block">
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection