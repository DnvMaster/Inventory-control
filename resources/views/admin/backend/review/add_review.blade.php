@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">{{ __('Новый пользователь') }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('Детали') }}&nbsp;</a></li>
                    <li class="breadcumb-item active">&nbsp;{{ __('профиля') }}</li>
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
                                                <h4 class="card-title text-center mb-0">{{ __('Информация о пользователе') }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('store.review') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Имя') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="name" placeholder="{{ __('Введите имя') }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Должность') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="position" placeholder="{{ __('Введите должность') }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Сообщение') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <textarea class="form-control" name="message"  placeholder="{{ __('Введите текс сообщения') }}"></textarea>    
                                                </div>
                                            </div>
                                             <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Фото пользователя') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="file" name="image" id="image">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label"></label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <img class="rounded-circle avatar-xxl img-thumbnail float-start" id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Image Progile">
                                                </div>
                                            </div>
                                             <button type="submit" class="btn btn-primary">
                                                <span class="mdi mdi-content-save-edit-outline"></span>&nbsp;{{ __('Сохранить') }}
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