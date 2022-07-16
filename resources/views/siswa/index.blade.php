@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel ">
                    <div class="panel-heading my-5">
                        <h3 class="panel-title text-center fw-bold">Project <span
                                class="fw-bold text-primary">Monitoring</span></h3>
                        <div class="right">
                            <a href="/siswa/create" class="btn btn-info btn-sm"><i class="bi bi-plus-square"></i>
                            </a>
                        </div>
                    </div>
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <form class="d-flex" role="search" action="/siswa/search" method="GET">
                                <input class="form-control me-2" type="search" name="search" placeholder="cari Berita...">
                                <a class="btn" type="submit" href="/siswa/search"><i class="bi bi-search"></i></a>
                            </form>
                        </div>
                    </nav>
                    <div class="panel-body shadow p-3 mb-5 bg-body rounded">
                        <table class="table ">
                            <thead>
                                <tr class="bg-light">
                                    <th>Project Name</th>
                                    <th>Client</th>
                                    <th>Project Leader</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Progress</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->client }}</td>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('images/' . $data->foto) }}"
                                                alt="foto" alt="" width="50">
                                            {{ $data->projects }}
                                            <p class="text-center">{{ $data->email }}</p>
                                        </td>
                                        <td>{{ $data->start_date }}</td>
                                        <td>{{ $data->end_date }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: {{ $data->progres }}" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    {{ $data->progres }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="/siswa/{{ $data->id }}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin mau dihapus ?')"><i
                                                    class="bi bi-trash-fill"></i></a>
                                            <a href="/siswa/{{ $data->id }}/edit" class="btn btn-info btn-sm"><i
                                                    class="bi bi-pencil"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @stop
