<div class="card">
    <div class="card-body">
        <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-5">
                    <input type="text" class="form-control" id="text" name="title" placeholder="Enter the file's title">
                </div>
                <div class="form-group col-sm-12 col-md-5">
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="form-group col-sm-12 col-md-2">
                    <button class="btn btn-block btn-info" type="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>
