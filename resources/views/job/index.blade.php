@extends('home')

@section('content')


<div class="container-fluid">
    <div class="pagetitle">
        <h1>Job</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Job</li>
               
            </ol>
        </nav>
    </div>
</div>


<div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-plus"></i> Add New Job Title
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{url('student')}}" method="POST" id="create">
                        @include('job.parts.form')
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="container"></div>

    <div class="container-fluid">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{$job->job_id}}</td>
                        <td>{{$job->job_title}}</td>
                        <td>
                        <a href=""> <i class="fas fa-eye"></i> </a>
                        <a href=""> <i class="fas fa-edit"></i> </a>
                        <a href=""> <i class="fas fa-trash-alt"></i> </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection