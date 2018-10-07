@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Image</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div>
        <form action="post" id="formImgInp" action="{{route('image.add')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="file" name="image" id="image"/>
        <input type="submit"/> 
        </div>
        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
