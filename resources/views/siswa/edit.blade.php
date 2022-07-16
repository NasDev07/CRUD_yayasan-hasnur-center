@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Inputs</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/siswa/{{ $siswa->id }}/update" method="POST">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Project Nama</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $siswa->nama }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">CLIENT</label>
                                        <input name="client" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $siswa->client }}">
                                    </div>

                                    <div class="mb-3 mt-2">
                                        <label for="disabledSelect" class="form-label">Project Leader</label>
                                        <input name="projects" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $siswa->projects }}">
                                    </div>
                                    <div class="mb-3 mt-2">
                                        <label for="disabledSelect" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $siswa->email }}">
                                    </div>                                   

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Start Date</label>
                                        <input name="start_date" type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $siswa->start_date }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">end Date</label>
                                        <input name="end_date" type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $siswa->end_date }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Progress</label>
                                        <input name="progres" type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $siswa->progres }}">
                                    </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

