@extends('runa.root')

@section('content')

    <section class="invoice">

        <div align="center">
            <h3>Runa Aceros</h3>
            <p>Panamericana 1262, Chichima Guadalupe, <br>
                Centro, CP. 30000, <br>
                Comitán de Domínguez, Chiapas<br>
                Tel.: 01-(963)-63-2-0405
            </p>
        </div>

        <b>Cliente:</b> {{ strtoupper($rQuotation->client->name) }}
        <span class="pull-right">
            <em><b>{{ fdate(date('Y-m-d H:i:s'), 'd M Y h:i a') }}</b></em>
        </span>
        <br>
        <b>Folio:</b> {{ $rQuotation->folio }}
        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Cantidad</th>
                    <th style="text-align: center;">Descripción</th>
                    <th style="text-align: center;">Importe</th>
                </tr>
            </thead>

            <tbody>
                @if ($rQuotation->pay  == 'anticipo')
                    <tr>
                        <td></td>
                        <td>Anticipo</td>
                        <td>{{ $rQuotation->retainer }}</td>
                    </tr>
                @else
                    @foreach (unserialize($rQuotation->products) as $product)
                        <tr>
                            <td style="text-align: center;">{{ $product['q'] }}</td>
                            <td>{{-- {{ App\Product::find($product['i'])->name }} --}}</td>
                            <td>
                                <span class="pull-right">$ {{ number_format($product['a'], 2) }}</span>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>

            <tfooter>
                <tr>
                    <th></th>
                    <th style="text-align: center;">Total:</th>
                    <th>
                        <span class="pull-right">
                            $ {{ number_format($rQuotation->amount, 2) }}
                        </span>
                    </th>
                </tr>
            </tfooter>
        </table>

        <div class="row no-print">
            <button onclick="printTicket()" class="btn btn-warning pull-right">
                <i class="fa fa-print"></i> Imprimir
            </button>
        </div>

    </section>

    <script>
    function printTicket() {
        window.print();
    }
    </script>
@endsection