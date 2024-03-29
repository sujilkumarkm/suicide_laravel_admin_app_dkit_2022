
<x-form-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
@section('styles')
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('title','Edit Post')
@section('actionUrl')
    {{route('post.update',$post)}}
@endsection

<!-- use only for form with file upload -->
@section('encrypt','enctype=multipart/form-data')
<!------  --    ----------------------- -->
@section('actionName','Edit Post')
@section('indexRoute')
    {{route('post.index')}}
@endsection
@section('formBody')
    <!-- this is needed in edit form -->
    <input type="hidden" name="_method" value="PUT">
    <!-- ---------------------------- -->
    <div class="col-6">
        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text" id="title" name="title" required class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" value="{{$post->title}}">
            @if($errors->has('title'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('title')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="cover_photo">Cover Photo <small>(Not less than 1194X505 px)</small></label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input {{$errors->has('cover_photo') ? 'is-invalid' : ''}}" id="cover_photo" name="cover_photo" value="{{old('cover_photo')}}">
                    <label class="custom-file-label" for="cover_photo">Choose file</label>
                </div>
            </div>
            @if($errors->has('cover_photo'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('cover_photo')}}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="description" class="control-label">Description <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="description" name="description"
                      class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{$post->description}}
            </textarea>
            @if($errors->has('description'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="keywords" class="control-label">Keywords <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="keywords" name="keywords"
                      class="form-control  {{$errors->has('keywords') ? 'is-invalid' : ''}}">{{$post->keywords}}
            </textarea>
            @if($errors->has('keywords'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('keywords')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="content" class="control-label">Content <small>(Do not capitalise entire sentence)</small></label>
            <textarea id="content" name="content"
                      class="form-control textarea {{$errors->has('content') ? 'is-invalid' : ''}}" >{{$post->content}}
            </textarea>
            @if($errors->has('content'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('content')}}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label class="control-label" for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="Published" {{$post->status=='Published' ? 'selected' : ''}}>Published</option>
                <option value="Hidden" {{$post->status=='Hidden' ? 'selected' : ''}}>Hidden</option>
            </select>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>

</x-form-layout>