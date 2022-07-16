@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel my-5">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tambah Data</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ url('/siswa/store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Project Name</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Client</label>
                                        <input name="client" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Project Leader</label>
                                        <input name="projects" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Image Leader</label>
                                        <input name="foto" type="file" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Start Date</label>
                                        <input name="start_date" type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">End Date</label>
                                        <input name="end_date" type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Progress</label>
                                        <input name="progres" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Sutmit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
