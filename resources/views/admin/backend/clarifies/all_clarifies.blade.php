@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="content">
        <div class="container-xxl">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Стратегия разработки') }}</h4>
                </div>
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="{{ route('all.clarifies') }}">{{ __('Стратегия') }}&nbsp;/</a></li>
                        <li class="breadcumb-item active">&nbsp;{{ __('просмотр') }}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="tab-panel pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="card mb-0">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title text-center mb-0">{{ __('Редактор / стратегия') }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('update.clarifies') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $clarifies->id }}">
                                            <div class="card-body">
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">{{ __('Заголовок') }}</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="text" name="title" value="{{ $clarifies->title }}">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">{{ __('Текст, описание') }}</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <textarea name="description" class="form-control">{{ $clarifies->description }}"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label"><b>{{ __('Изображение') }}</b></label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="file" name="image" id="image">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label"></label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <img class="avatar-xxl img-thumbnail float-start" id="showImage" src="{{ asset($clarifies->image) }}" alt="{{ $clarifies->title }}">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    <span class="mdi mdi-file-edit-outline"></span>&nbsp;{{ __('Сохранить') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endsection