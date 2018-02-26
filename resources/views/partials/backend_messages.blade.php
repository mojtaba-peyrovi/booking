@if (Session::has('success'))
    <div class="alert alert-success text-center" role="alert" id="success-alert">
        <strong>Success:</strong> {{ Session::get('success') }}
    </div>
@endif
@if (count($errors) !==0)
    <div class="alert alert-danger" role="alert">
        <strong>Error:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
