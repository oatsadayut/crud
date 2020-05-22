@extends('welcome')
@section('content')
<div class="row justify-content-center text-center">
    <div class="col-md-8">
        <a href="/">
            <h3>BACK TO HOME</h3>
        </a>

        <div class="card">
            <div class="card-body">
                   <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-12 mt-2 text-center">
                            @if ($qe->img_path == "" || $qe->img_path == null)
                                <img id="img_p" src="/img/no-image.jpg" class="img">
                            @else
                                <img id="img_p" src="/{{$qe->img_path}}" class="img">
                            @endif
                            <input type="file" class="form-control" id="file_img" name="file_img" value="{{$qe->img_path}}">
                            <input type="button" class="btn  btn-p" id="btn_upload" value="...">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <label for="fname">ชื่อ</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="{{$qe->fname}}">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="lname">สกุล</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="{{$qe->lname}}">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="position">ตำแหน่ง</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{$qe->position}}">
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="hidden" name="id_member_update" value="{{$qe->id}}">
                            <button type="submit" class="btn btn-warning btn-block">Update</button>
                        </div>
                    </div>
                    </form>
                    <form method="post" action="{{route('delete')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <input type="hidden" name="id_member_delete" value="{{$qe->id}}">
                                <button type="submit" class="btn btn-danger btn-block">Delete</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
