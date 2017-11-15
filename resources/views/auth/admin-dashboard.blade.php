@extends('layouts.admin-app')
@section('stylesheet')
      <script src="https://static.anychart.com/js/latest/anychart-bundle.min.js"></script>
    <script src="https://cdn.anychart.com/geodata/1.1.0/countries/iran/iran.js"></script>
    <link rel="stylesheet" href="https://cdn.anychart.com/css/1.1.0/anychart-ui.min.css" />
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin-Dashboard</div>
                         
                    <div class="panel-body">
                        Welcome To Admin Panel!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($geo as $region)
 
    {{ Form::hidden('invisible', $region->traffic , array('id' => $region->id )) }}
      
    @endforeach

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div id="container" class="map"></div>
      </div>
         
           
    </div>
     
            
       <script>
        let mn = document.getElementById('16').value;
        let kb = document.getElementById('11').value;
        let bs = document.getElementById('9').value;
        let es = document.getElementById('13').value;
        let fa = document.getElementById('8').value;
        let go = document.getElementById('15').value;
        let sm = document.getElementById('14').value;
        let th = document.getElementById('17').value;
        let ya = document.getElementById('7').value;
        let cm = document.getElementById('12').value;
        let kz = document.getElementById('10').value;
        let lo = document.getElementById('21').value;
        let il = document.getElementById('22').value;
        let hg = document.getElementById('6').value;
        let ar = document.getElementById('31').value;
        let mk = document.getElementById('20').value;
        let qm = document.getElementById('19').value;
        let hd = document.getElementById('24').value;
        let za = document.getElementById('26').value;
        let qz = document.getElementById('25').value;
        let wa = document.getElementById('29').value;
        let ea = document.getElementById('30').value;
        let bk = document.getElementById('23').value;
        let gi = document.getElementById('27').value;
        let kd = document.getElementById('28').value;
        let kj = document.getElementById('3').value;
        let kv = document.getElementById('2').value;
        let ks = document.getElementById('1').value;
        let sb = document.getElementById('4').value;
        let ke = document.getElementById('5').value;
        let al = document.getElementById('18').value;



        anychart.onDocumentReady(function() {
            // create map
            map = anychart.map();

            // create data set
            var dataSet = anychart.data.set([
                {'id': 'IR.KB', 'value': kb},
                {'id': 'IR.BS', 'value': bs},
                {'id': 'IR.ES', 'value': es},
                {'id': 'IR.FA', 'value': fa},
                {'id': 'IR.GO', 'value': go},
                {'id': 'IR.MN', 'value': mn},
                {'id': 'IR.SM', 'value': sm},
                {'id': 'IR.TH', 'value': th},
                {'id': 'IR.YA', 'value': ya},
                {'id': 'IR.CM', 'value': cm},
                {'id': 'IR.KZ', 'value': kz},
                {'id': 'IR.LO', 'value': lo},
                {'id': 'IR.IL', 'value': il},
                {'id': 'IR.HG', 'value': hg},
                {'id': 'IR.AR', 'value': ar},
                {'id': 'IR.MK', 'value': mk},
                {'id': 'IR.QM', 'value': qm},
                {'id': 'IR.HD', 'value': hd},
                {'id': 'IR.ZA', 'value': za},
                {'id': 'IR.QZ', 'value': qz},
                {'id': 'IR.WA', 'value': wa},
                {'id': 'IR.EA', 'value': ea},
                {'id': 'IR.BK', 'value': bk},
                {'id': 'IR.GI', 'value': gi},
                {'id': 'IR.KD', 'value': kd},
                {'id': 'IR.KJ', 'value': kj},
                {'id': 'IR.KV', 'value': kv},
                {'id': 'IR.KS', 'value': ks},
                {'id': 'IR.SB', 'value': sb},
                {'id': 'IR.KE', 'value': ke},
                {'id': 'IR.AL', 'value': al}
            ]);

            // create choropleth series
            series = map.choropleth(dataSet);

            // set geoIdField to 'id', this field contains in geo data meta properties
            series.geoIdField('id');

            // set map color settings
            series.colorScale(anychart.scales.linearColor('#deebf7', '#3182bd'));
            series.hoverFill('#addd8e');

            // disable series labels
            series.labels(false);

            // set geo data, you can find this map in our geo maps collection
            // https://cdn.anychart.com/#maps-collection
            map.geoData(anychart.maps['iran']);

            //set map container id (div)
            map.container('container');

            //initiate map drawing
            map.draw();
        });

            </script>   
@endsection

