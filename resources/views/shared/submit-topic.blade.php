@auth
    <h4> Share yours ideas </h4>
    <div class="row">
        <form action="{{ route('topics.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="topic" class="form-control" id="idea" rows="3"></textarea>
                @error('topic')
                    <span class="fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-dark"> Share </button>
            </div>
        </form>
    </div>
@endauth

@guest
    <h4><strong>Login to share your Ideas</strong></h4>
@endguest
