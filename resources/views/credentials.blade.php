@extends('layouts.main')

@section('content')

    {{-- {{ $value->pluck('id') }} --}}
    {{-- {{ $value[0]->id }} --}}
    {{-- {{ $value }} --}}

    <h3>Sales application credentials</h3>

    <form action="{{ route('credentials.update', ['credential' => $value[0]->id]) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-md-4">

                <input class="form-control my-2" type="text" name="uber_user" value="{{ $value[0]->uber_user }}"
                    placeholder="User Uber Eats">
                <input class="form-control my-2" type="text" name="uber_pass" value="{{ $value[0]->uber_pass }}"
                    placeholder="Password Uber Eats">

                <input class="form-control my-2" type="text" name="grub_user" value="{{ $value[0]->grub_user }}"
                    placeholder="User GrubHub">
                <input class="form-control my-2" type="text" name="grub_pass" value="{{ $value[0]->grub_pass }}"
                    placeholder="Password GrubHub">

                <input class="form-control my-2" type="text" name="door_user" value="{{ $value[0]->door_user }}"
                    placeholder="User Doordash">
                <input class="form-control my-2" type="text" name="door_pass" value="{{ $value[0]->door_pass }}"
                    placeholder="Password Doordash">

                <input class="form-control my-2" type="text" name="clover_user" value="{{ $value[0]->clover_user }}"
                    placeholder="User Clover">
                <input class="form-control my-2" type="text" name="clover_pass" value="{{ $value[0]->clover_pass }}"
                    placeholder="Password Clover">

                <input class="form-control my-2" type="text" name="post_user" value="{{ $value[0]->post_user }}"
                    placeholder="User Postmates">
                <input class="form-control my-2" type="text" name="post_pass" value="{{ $value[0]->post_pass }}"
                    placeholder="Password Postmates">

                <input class="form-control my-2" type="text" name="rivas_id" value="{{ $value[0]->rivas_id }}"
                    placeholder="ID Rivas App">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>

    </form>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('update') == 'ok')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Updated successfully'
            })

        </script>
    @endif


@endsection
