@auth()
<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('ideas.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            @error('content')
                <span class="d-block fs-6 text-danger mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
@endauth

@guest()
    <h4>Login to share your ideas</h4>
@endguest

