@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <button type="button" class="btn btn-success add-masseuse">
                        <a href="{{ route('employeeAdd') }}">Add Masseuse</a>
                    </button>

                    <ul class="employee-list-heading">
                        <li class="d-flex list-group-item heading">
                            <p class="col-2">ID</p>
                            <p class="col-4">Name</p>
                            <p class="col-2">Sorting</p>
                            <p class="col-2"></p>
                            <p class="col-2"></p>
                        </li>
                    </ul>
                    <ul class="list-group employee-list" id="sortable">
                        @foreach ($employees as $employee)
                            <li
                                class="d-flex list-group-item ui-state-highlight"
                                data-id="{{ $employee->id }}"
                                data-originalSort="{{ $employee->sort }}"
                                data-sort="{{ $employee->sort }}"
                            >
                                @if ($employee->gender === 'M')
                                    <span class="gender-male"></span>
                                @else
                                    <span class="gender-female"></span>
                                @endif

                                <p class="col-2">{{ $employee->id }}</p>
                                <p class="col-4">{{ $employee->name }}</p>
                                <p class="col-2">{{ $employee->sort }}</p>
                                <p class="col-2 text-center">
                                    <a class="link-primary" href="{{ route('employeeEdit', ['id' => $employee->id]) }}">Edit</a>
                                </p>
                                <p class="col-2 text-center">
                                    <a class="link-danger" href="{{ route('employeeDelete', ['id' => $employee->id]) }}">Delete</a>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
