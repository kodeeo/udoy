@extends('admin.master')
@section('content')


<div class="card" style="text-align:center;">
        <h2>Barcodes</h2>
        <hr>
        <form action="{{ route('barcodes.store')}}" method="POST">
                @csrf
                    <div>
                        <button class="btn btn-primary" style="margin-bottom:2%;">Generate</button>
                    </div>
        </form>

<table class="table table-bordered";>
        

    @foreach($barcodes as $key=>$code)  
        <tbody>
            <tr>
                <td>
                        {{-- <h6>{!! $bar !!}</h6> --}}
                        <h4>{{$code->barcode}}</h4>
                </td>
            </tr>
        </tbody>
    @endforeach
    
</table>


        
            

          


            {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML($code, 'QRCODE') !!}</div><br>     --}}
       





@endsection
