@extends('admin.master')
@section('content')


<div class="card" style="text-align:center;">
        <h2>Barcodes</h2>
        <hr>
    <div style="display: flex; justify-content:center; margin-bottom:10px;">
        <div>
            <form action="{{ route('barcodes.store')}}" method="POST">
                @csrf
                    <div>
                        <button class="btn btn-success" style="margin:5px;">Generate</button>
                    </div>
            </form>
        </div>

        <div>
            <form action="{{ route('clear')}}" method="POST">
                @csrf
                    <div>
                        <button class="btn btn-danger" style="margin:5px;">Fresh</button>
                    </div>
            </form>
        </div>
    </div>
        
          
</div>

<div class="container" style="width:100%">
    @foreach($barcodes as $key=>$code)  
    {{-- @dd($code->barcode) --}}
    
        <div class="col-lg-5" style="padding-top:3px; width:165px; border: 1px dashed; border-color: #006f27;">
            <ul class="list-unstyled">
                <li>{!! DNS1D::getBarcodeHTML("$code->barcode", 'I25'); !!}</li>
                <li><b><h4>{{$code->barcode}}</h4></b></li>
            </ul>
        </div>
                
    @endforeach

</div>
        
            


            {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML($code, 'QRCODE') !!}</div><br>     --}}
       





@endsection
