<form action="{{ route('store') }}" method="post">
    @csrf
    <input type="hidden" name="submissionToken" value="{{ $submissionToken }}">
    <input type="submit">
</form>
