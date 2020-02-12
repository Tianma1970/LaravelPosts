@if (session('status'))

    <div class="alert alert-success col-6">
        {{ session('status') }}
    </div>

@endif
