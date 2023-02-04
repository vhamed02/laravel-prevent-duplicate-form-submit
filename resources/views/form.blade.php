<form action="{{ route('store') }}" method="post">
    @csrf
    <input type="hidden" name="submissionToken" value="{{ session()->get('submissionToken')  }}">
    <input type="submit">
</form>
