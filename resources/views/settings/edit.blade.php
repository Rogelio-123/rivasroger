@extends('layouts.main')

@section('content')
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Edit Manager</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('settings.update', ['setting' => $setting->id]) }}">
                {{ csrf_field() }}
                @method('PUT')
        
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">Branch Office</label>
                        <input type="text" value="{{ $setting->branch }}" class="form-control" name="branch" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Manager</label>
                        <input type="text" value="{{ $setting->manager }}" class="form-control" name="manager" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Branch Address</label>
                        <input type="text" class="form-control" value="{{ $setting->adress }}" name="adress" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Phone</label>
                        <input type="text" class="form-control" value="{{ $setting->phone }}" name="phone" id="price">
                    </div>
                </div>
        
                <hr>
        
                <h4>Uber Eats</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">User</label>
                        <input type="text" class="form-control" value="{{ $setting->uberUser }}" name="uberUser" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Password</label>
                        <input type="text" class="form-control" value="{{ $setting->uberPass }}" name="uberPass" id="price">
                    </div>
                </div>
        
                <h4>Grubhub</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">User</label>
                        <input type="text" class="form-control" value="{{ $setting->grubUser }}" name="grubUser" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Password</label>
                        <input type="text" class="form-control" value="{{ $setting->grubPass }}" name="grubPass" id="price">
                    </div>
                </div>
        
                <h4>Doordash</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">User</label>
                        <input type="text" class="form-control" value="{{ $setting->doorUser }}" name="doorUser" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Password</label>
                        <input type="text" class="form-control" value="{{ $setting->doorPass }}" name="doorPass" id="price">
                    </div>
                </div>
        
                <h4>Clover</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">User</label>
                        <input type="text" class="form-control" value="{{ $setting->cloverUser }}" name="cloverUser" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Password</label>
                        <input type="text" class="form-control" value="{{ $setting->cloverPass }}" name="cloverPass" id="price">
                    </div>
                </div>
        
                <h4>Postmates</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">User</label>
                        <input type="text" class="form-control" value="{{ $setting->postUser }}" name="postUser" id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Password</label>
                        <input type="text" class="form-control" value="{{ $setting->postPass }}" name="postPass" id="price">
                    </div>
                </div>
        
                <h4>Rivas App</h4>
                <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                        <label for="price">ID</label>
                        <input type="text" class="form-control" value="{{ $setting->rivasId }}" name="rivasId" id="price">
                    </div>
                </div>
        
                <button type="submit" class="btn btn-success shadow rounded mb-3">Send</button>
                <a class="btn btn-primary shadow rounded mb-3" href="{{ route('settings.index') }}">Back</a>
            </form>
        </div>
    </div>

    
@stop

@section('scripts')
    @if (session('set') == 'ok')
        <script>
            Swal.fire(
                'Saved!',
                'Your settings has been save.',
                'success'
            )

        </script>

    @endif
@stop
