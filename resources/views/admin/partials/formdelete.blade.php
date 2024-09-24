<form class="d-inline" action="{{ $route }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"
        onsubmit="return confirm('Vuoi davvero eliminare {{ $title }}?')"><i
            class="fa-solid fa-trash"></i></button>
</form>
