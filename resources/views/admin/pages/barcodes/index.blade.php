@extends('admin.master')
@section('content')


<div class="card" style="text-align:center;">
        <h2>Barcodes</h2>
        <hr>
</div>

        
            <div class="row">
                    <div class="col-sm-3" style="margin-right: 3%;">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>
                                <h6>{!! $bar !!}</h6>
                        </li>
                        
                        <li>
                                <h3>{{$code}}</h3>
                            </li> 
                        </ul>
                    </div>
            </div>

            <br>


            {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML($code, 'QRCODE') !!}</div><br>     --}}
       





@endsection
