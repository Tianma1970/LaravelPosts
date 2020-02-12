@if($errors->any())
    <div class="alert alert-warning col-6">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
