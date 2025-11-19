@extends('admin.admin_master')
@section('admin')
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">{{ __('Добавление функций') }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('add.feature') }}">{{ __('Добавить') }}&nbsp;</a></li>
                    <li class="breadcumb-item active">&nbsp;{{ __('функцию') }}</li>
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
                                                <h4 class="card-title text-center mb-0">{{ __('Добавление функции') }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('store.feature') }}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Заголовок') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="title" placeholder="{{ __('Введите заголовок') }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Иконка') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="icon"  placeholder="{{ __('Введите имя иконки') }}">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('Описание') }}</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <textarea class="form-control" name="description" placeholder="{{ __('Введите краткое описание') }}"></textarea>
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
@endsection