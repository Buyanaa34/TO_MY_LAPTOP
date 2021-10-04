@extends('layouts.app')
<style>
    .form-inline span{
        margin-right: 15px;
        font-weight: 500;
        letter-spacing: 1.5px;
    }
    .form-inline{
        margin-bottom: 0px !important;
    }
</style>
@section('content')
<div class="TestHolder">
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <span>ХҮСНЭГТЭЭС ХАЙЛТ ХИЙХ:</span>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SEARCH</button>
        </form>
      </nav>
      {!! Form::open(['action'=>['carcontroller@update',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('car_name','Car name')}}
                {{Form::text('car_name',$post->car_name,['class'=>'form-control','placeholder'=>'Car name'])}} 
            </div>
            <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::text('price',$post->price,['class'=>'form-control','placeholder'=>'Price'])}} 
            </div>
            <div class="form-group">
                {{Form::label('more_info','More information')}}
                {{Form::textarea('more_info',$post->more_info,['id'=>'editor1','class'=>'form-control','placeholder'=>'Body Text'])}} 
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    <Table class="TestTable">
        <thead class="lol">
            <tr >
                {{-- GARCHIG---G JS-EER OLGOH --}}
                <script>
                    //let search = '<nav class="navbar navbar-light bg-light"><form class="form-inline"><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></form></nav>'
                    let array_1 = ["Acq","Time","Pan","Termclass","Type","Trace","Approval","RRN","Amount","NETC fee","Iss fee","Settlement amount"]
                    array_1.forEach(element => {
                        document.write("<th>"+element+"</th>")
                    });
                </script>
            </tr>
        </thead>
        <tbody>
            @foreach ($Acquirers as $Acquirer)
            <tr >
                <td>{{$Acquirer->acq}}</td>
                {{-- @php
                    $result = (float)$Acquirer->iss_fee+ (float)$Acquirer->netc_fee;
                    echo "<div>$result</div>";
                @endphp --}}
                <td>{{$Acquirer->time}}</td>
                <td>{{$Acquirer->pan}}</td>
                <td>{{$Acquirer->termclass}}</td>
                <td>{{$Acquirer->type}}</td>
                <td>{{$Acquirer->trace}}</td>
                <td>{{$Acquirer->approval}}</td>
                <td>{{$Acquirer->rrn}}</td>
                <td>{{$Acquirer->amount}}</td>
                <td>{{$Acquirer->netc_fee}}</td>
                <td>{{$Acquirer->iss_fee}}</td>
                <td>{{$Acquirer->settlement_amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </Table>
    {{-- {{ $Acquirers->links( "pagination::bootstrap-4") }} --}}
</div>
@endsection
