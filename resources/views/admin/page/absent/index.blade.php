@extends('admin.layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row g-2">
            <div class="col-sm-3">
                <h3 class="mx-1">Absensi Siswa</h3>
            </div>
            <div class="col-sm-auto ms-auto d-flex">
                <div class="list-grid-nav hstack gap-2">
                    <button class="btn btn-primary">
                        Rekap Excel
                    </button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                        Tambah Absensi
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-3">
            <div class="search-box col-sm-2">
                <input type="text" class="form-control" id="searchMemberList" placeholder="Cari Siswa">
                <i class="ri-search-line search-icon"></i>
            </div>
            <div class="search-box col-sm-2">
                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Pilih tanggal">
                <i class="ri-calendar-line search-icon"></i>
            </div>
            <div class="search-box col-lg-1 col-md-2 col-sm-2">
                <select class="form-select" aria-label=".form-select-sm example">
                    <option value="">WFO</option>
                    <option value="">WFH</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-body border-top">
        <div class="table-responsive table-card p-3">
            <table class="table align-middle table-nowrap table-striped-columns mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 1rem">No.</th>
                        <th scope="col">Siswa</th>
                        <th scope="col">Sekolah</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Keterangan</th>
                        <th scope="col" class="text-center">Masuk</th>
                        <th scope="col" class="text-center">Istirahat</th>
                        <th scope="col" class="text-center">Kembali</th>
                        <th scope="col" class="text-center">Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($onlineAttendances as $attendance)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->school }}</td>
                        <td>P</td>
                        <td class="text-center"><span class="badge bg-success-subtle text-success py-2 px-3">{{ $attendance->attendances[0]->status }}</span></td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'present')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'break')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'return_break')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'return')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table align-middle table-nowrap table-striped-columns mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 1rem">No.</th>
                        <th scope="col">Siswa</th>
                        <th scope="col">Sekolah</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Keterangan</th>
                        <th scope="col" class="text-center">Masuk</th>
                        <th scope="col" class="text-center">Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($oflineAttendances as $attendance)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->school }}</td>
                        <td>P</td>
                        <td class="text-center"><span class="badge bg-success-subtle text-success py-2 px-3">{{ $attendance->attendances[0]->status }}</span></td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'present')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                        <td class="text-center">
                        @if (isset($student->attendances[0]))
                            @foreach ($student->attendances[0]->attendanceDetails as $detailAttendance)
                                @if ($detailAttendance->status == 'return')
                                    @if (date('H:i:s', strtotime($detailAttendance->created_at)) <=
                                            \Carbon\Carbon::createFromFormat('H:i:s', '08:00:00')->addMinutes(1)->format('H:i:s'))
                                        <span class="badge bg-success-subtle text-success py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger py-2 px-3">{{ date('H:i', strtotime($detailAttendance->created_at)) }}</span>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- modal add absent start --}}
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">Tambah Absensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="student_id">Pilih Siswa</label>
                        <select class="tambah js-example-basic-single form-control @error('name') is-invalid @enderror" aria-label=".form-select example" name="student_id">
                            <option value="">NIAM</option>
                            <option value="">RENDI</option>
                            <option value="">FARAH</option>
                            <option value="">NESA</option>
                            <option value="">KADER</option>
                            <option value="">ADI</option>
                        </select>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="status">Status</label>
                        <select class="tambah js-example-basic-single form-control @error('status') is-invalid @enderror" aria-label=".form-select example" name="status">
                            <option value="">Masuk</option>
                            <option value="">Izin</option>
                            <option value="">Sakit</option>
                        </select>
                        @error('status')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary px-5">Buat</button>
                    <button type="button" class="btn btn-light px-5" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal add absent end --}}

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    </script>
@endsection
