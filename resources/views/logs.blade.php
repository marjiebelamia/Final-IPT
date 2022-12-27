@extends('base')

@section('title', 'Logs')

@extends('navbar')

@section('content')
    <div class="col-md-12">
        <div class="mt-3" style="margin-left: 10px;">
            <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 400; font-size: 25px;"></h1>
        </div>
        <div class="mt-3" style="margin-left: 300px;">
            {{ $logs->links() }}
        </div>
        <div class="card col-md-10" style="position: relative; margin-left: 150px;">
        <table class="table table-bordered bg-secondary text-light text-center">
            <thead style="background-color: #262729">

                <th>Activities</th>
                <th>Date/Time</th>
               
            </thead>
            <tbody>
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->log_entry }}</td>
                    <td>{{ $log->created_at->format('l, d F Y g:i A') }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

       
    </div>
@endsection

