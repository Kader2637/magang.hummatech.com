{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Siswa</th>
            <th>File</th>
            <th>Link</th>
            <th>status</th>
            <th colspan="3">Aksi</th>
        </tr>
        @foreach ($submitTasks as $answer)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $answer->student->name }}</td>
            <td>{{ $answer->file }}</td>
            <td></td>
            <td>{{ $answer->status }}</td>
            @if ($answer->status == "pending")
            <td>
                <form action="{{ route('submit.task.answer.update-status', $answer->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="agree">
                    <button type="submit">Terima</button>
                </form>
            </td>
            <td>
                <form action="{{ route('submit.task.answer.update-status', $answer->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="reject">
                    <button type="submit">Tolak</button>
                </form>
            </td>
            <td>
                <form action="{{ route('submit.task.answer.download', $answer->id) }}" method="POST">
                    @csrf
                    @method('post')
                    <button type="submit">Download</button>
                </form>
            </td>
            @else
            <td colspan="3"></td>
            @endif

        </tr>
        @endforeach
    </table>
</body>
</html> --}}



@extends('admin.layouts.app')

@section('style')
<style>
    .custom-badge {
        background-color: transparent !important;
        color: black !important;
        /* border: 1px solid #ccc !important; */
        font-size: 12px;
    }

    .custom-icon {
        color: rgba(255, 191, 0, 0.873) !important;
    }

</style>
@endsection

@section('content')

<div class="card my-4">
    <div class="p-3 py-2">
        <div class="d-flex g-2 align-items-center">
            <div class="col-sm-4">
                <div class="p-3 d-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" class="me-2" height="19" viewBox="0 0 23 19"
                        fill="none">
                        <path
                            d="M11.5 18C9.9038 17.0547 8.09313 16.5571 6.25 16.5571C4.40686 16.5571 2.5962 17.0547 1 18V2.44294C2.5962 1.49765 4.40686 1 6.25 1C8.09313 1 9.9038 1.49765 11.5 2.44294M11.5 18C13.0962 17.0547 14.9069 16.5571 16.75 16.5571C18.5931 16.5571 20.4038 17.0547 22 18V2.44294C20.4038 1.49765 18.5931 1 16.75 1C14.9069 1 13.0962 1.49765 11.5 2.44294M11.5 18V2.44294"
                            stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="h4 mb-0">Pengumpulan</span>
                </div>
            </div>
            {{-- <div class="col-sm-auto col-xl-4 ms-auto d-flex gap-4 justify-content-end">
                <div class="list-grid-nav hstack">
                    <button class="btn btn-secondary shadow-none" data-bs-toggle="modal" data-bs-target="#addtask">
                        Tambah Tugas
                    </button>
                </div>
            </div> --}}
        </div>
    </div>
</div>


<div class="tab-content text-muted">
    <div class="tab-pane active show" id="home-1" role="tabpanel">
        <div class="row">
            @forelse ($submitTasks as $answer)
                <div class="col-md-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-4">
                                {{-- <img src="" class="rounded-circle" alt="Profile Picture" width="150" height="150"> --}}
                                @if (file_exists(public_path('storage/' . $answer->student->avatar)))
                                    <img class="rounded-circle" style="object-fit: cover;" width="50" height="50"
                                        src="{{ asset('storage/' . $answer->student->avatar) }}">
                                @else
                                    <img class="rounded-circle" style="object-fit: cover" width="50" height="50"
                                        src="{{ asset('user.webp') }}">
                                @endif
                            </div>
                            <h5 class="card-title">{{ $answer->student->name }}</h5>
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <span class="badge custom-badge p-2">
                                    <i class="ri-file-zip-fill custom-icon fs-5"></i> TugasBaru.zip
                                </span>

                                <form action="{{ route('submit.task.answer.download', $answer->id) }}" method="POST">
                                    @csrf
                                    @method('post')
                                    <span class="badge bg-info-subtle text-info ms-2 p-2">
                                        <button type="submit" style="border: none; background: none; padding: 0;">
                                            <i class="las la-download text-info fs-4"></i>
                                        </button>
                                    </span>
                                </form>
                            </div>

                            {{-- <p class="card-text">{{ $answer->status }}</p> --}}

                            <p class="text-{{ $answer->status->color() }}">
                                    {{ $answer->status->label() }}
                            </p>
                            @if ($answer->status == "pending")
                                <div id="pending-actions" class="d-flex justify-content-center gap-2">
                                    <form action="{{ route('submit.task.answer.update-status', $answer->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="agree">
                                        <button type="submit" class="btn btn-success">Terima</button>
                                    </form>
                                    <form action="{{ route('submit.task.answer.update-status', $answer->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="reject">
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                                </div>
                            @else
                                <div id="no-actions" class="d-flex justify-content-center gap-2">
                                    <span></span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
</div>


@endsection
