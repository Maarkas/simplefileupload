<form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
    @csrf
    <input type="text" class="form-control" id="text" name="title" placeholder="Enter the file's title">
    <input type="file" class="form-control" id="file" name="file">
    <button type="submit">Upload</button>
</form>
