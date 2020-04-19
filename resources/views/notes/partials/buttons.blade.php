@if (auth()->user()->is_admin == 1)
    <a class="btn btn-primary" data-toggle="modal" data-target="#editNote{{$note->id}}">edit</a>
    @include('notes.edit')
    <a class="btn btn-danger"onclick="if (confirm('Are you sure? you want to delete this')){
        event.preventDefault();
        document.getElementById('delete_form-{{$note->id}}').submit();
        }else {event.preventDefault();}" href="#">delete</a>
    <form id="delete_form-{{$note->id}}" action="{{ route('notes.destroy', ['id' => $note->id]) }}" method="POST" style="display: none;">
        @csrf
        @method('delete')
    </form>
@endif
