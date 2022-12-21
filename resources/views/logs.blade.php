@extends('layous.admin')

@section('title', 'Logs')



@section('content')
    <div class="container mt-5">
        <div class="d-grid gap-2 d-md-flex mt-2">
            <h1 style="font-size: 25px; font-weight: 500; color: #12858d;">Activity Log</h1>
        </div>
        <table class="table shadow-lg text-center">
            <thead style="background-color:#12858d; color:white;">
                <th>Timestamp</th>
                <th>Log Entry</th>
            </thead>
            <tbody class="text-black">
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at->format('l, d F Y g:i A') }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">

        </div>
    </div>
@endsection

