@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">{{ __('Профиль пользователя') }}</h4>
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
                    <div class="card-body">
                        <div class="align-items-center">
                            <div class="d-flex align-items-center">
                            <img src="{{ (!empty($profile->photo)) ? url('upload/user_images/'.$profile->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
                            <div class="overflow-hidden ms-4">
                                <h4 class="m-0 text-dark fs-20">{{ $profile->name }}</h4>
                                <p class="my-1 text-muted fs-16">{{ $profile->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-panel pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card border mb-0">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">{{ __('Персональная информация') }}</h4>                      
                                            </div>                                                       
                                        </div>
                                    </div>


                                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Имя') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="name" value="{{ $profile->name }}">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Мобильный телефон') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                        <input class="form-control" type="text" name="phone" value="{{ $profile->phone }}" aria-describedby="basic-addon1" value="+61 399615">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Электронная почта') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                        <input type="email" name="email" class="form-control" value="{{ $profile->email }}" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Адрес') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <textarea class="form-control" name="address">{{ $profile->address }}</textarea>
                                                </div>
                                            </div>

                                             <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Изображение профиля') }}</label>
                                                <div class="col-lg-12 col-xs-12">
                                                    <input class="form-control" type="file" name="photo" id="image">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label"></label>
                                                <div class="col-lg-12 col-xs-12">
                                                    <img id="showImage" src="{{ (!empty($profile->photo)) ? url('upload/user_images/'.$profile->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">{{ __('Сохранить изменения') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="card border mb-0">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">{{ __('Сменить пароль') }}</h4>                      
                                            </div>                                                       
                                        </div>
                                    </div>
                                    
                                    <form action="{{ route('admin.password.update') }}" method="post">
                                        @csrf
                                        <div class="card-body mb-0">

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Старый пароль') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control @error('old_password') is-invalid @enderror"
                                                    type="password" name="old_password" id="old_password" placeholder="{{ __('Введите свой старый пароль') }}">
                                                    @error('old_password')
                                                        <span class="text-danger"></span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Новый пароль') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control @error('new_password') is-invalid @enderror" 
                                                    type="password" name="new_password" id="new_password" placeholder="{{ __('Введите новый пароль') }}">
                                                    @error('new_password')
                                                        <span class="text-danger"></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Повторите пароль') }}</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control @error('new_password_confirmation') is-invalid @enderror" 
                                                        type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="{{ __('Повторите ввод нового пароля') }}">
                                                        @error('new_password_confirmation')
                                                            <span class="text-danger"></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <button type="submit" class="btn btn-primary">{{ __('Изменить' )}}</button>
                                                </div>
                                            </div>
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