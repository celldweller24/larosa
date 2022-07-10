@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new Masseuse</div>
                    <div class="card-body">
                        <form action="{{ route('employeeCreate') }}" class="dropzone" id="employee-create" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="employeeName" name="employeeName" aria-describedby="nameHelp">
                                <div id="nameHelp" class="form-text">Masseuse name</div>
                            </div>

                            <div class="mb-3 activity-checkbox">
                                <p>Visibility</p>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                        name="activityCheckbox"
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">Active</label>
                                </div>
                            </div>

                            <div class="mb-3 category-checkbox">
                                <p>Category</p>
                                @foreach ($categories as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categoryCheckbox[]">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{ $category->title }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Gender select" name="gender">
                                    <option selected value="1">Female</option>
                                    <option value="2">Male</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Select photos</label>
                                <input class="form-control" type="file" name="photos[]" id="formFileMultiple" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
