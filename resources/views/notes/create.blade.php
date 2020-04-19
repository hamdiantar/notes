<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">create Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('notes.store')}}" id="noteCreate">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                               id="exampleFormControlInput1" name="title" value="{{old('title')}}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">body</label>
                        <textarea class="form-control @error('body') is-invalid @enderror"
                                  id="exampleFormControlTextarea1" name="body" rows="3">{{old('body')}}</textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="noteCreate" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
