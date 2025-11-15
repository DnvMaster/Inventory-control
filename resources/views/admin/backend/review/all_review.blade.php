@extends('admin.admin_master')
@section('admin')
    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">{{ __('Просмотр') }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('Таблица') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Данные из б/д') }}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ __('Весь просмотр') }}</h5>
                    </div>

                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>{{ __('Имя') }}</th>
                                    <th>{{ __('Должность') }}</th>
                                    <th>{{ __('Фото') }}</th>
                                    <th>{{ __('Сообщение') }}</th>
                                    <th>{{ __('Действие') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allReviews as $key => $review)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->position }}</td>
                                        <td><img src="{{ asset($review->image) }}" style="width: 70px; height: 40px;" alt="{{ $review->name }}"></td>
                                        <td>{{ $review->message }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="">{{ __('Редактировать') }}</a>
                                            <a class="btn btn-danger btn-sm" href="">{{ __('Удалить') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>                                            
@endsection