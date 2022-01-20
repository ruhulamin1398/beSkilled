@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('perticipators.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Participator</span></a></h5>
            </div>
            <div class="card-body">
                {{  $perticipator->name }}
            </div>
        </div>
    </div>
@endsection
