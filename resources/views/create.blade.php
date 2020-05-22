@extends('welcome')
@section('content')
<div class="row">
    <div class="col-md-6">
        @foreach ($qd as $r)
            <a href="{{action('HomeController@frmUpdate',$r->id)}}">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-3 text-center">
                                @if ($r->img_path == "" || $r->img_path == null)
                                    <img id="avatar" src="/img/no-image.jpg" class="img-avatar">
                                @else
                                    <img id="avatar" src="/{{$r->img_path}}" class="img-avatar">
                                @endif
                            </div>
                            <div class="col-md-9">
                                <h5>{{$r->fname}}  {{$r->lname}}</h5>
                                <h5>{{$r->position}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{route('create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-12 mt-2 text-center">
                            <img id="img_p" src="/img/no-image.jpg" class="img">
                            <input type="file" class="form-control" id="file_img" name="file_img">
                            <input type="button" class="btn  btn-p" id="btn_upload" value="...">
                        </div>
                    </div>
                    <div class="form-row justify-content-center text-center">
                        <div class="col-md-3 my-3">

                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <label for="fname">ชื่อ</label>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="lname">สกุล</label>
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="position">ตำแหน่ง</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
