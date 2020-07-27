	 <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    
    <style type="text/css">
      div.border{
        border: 1px solid black;
      }
    </style>
    
    <meta charset="utf-8"> 

  </head>

    <table style="width: 100%">
      <tr>
        <td style="width: 47%;">
          <table>
            <tbody>        
              
              <tr>        
                <td>
                    <div name="logo" style="width: 300px; height: 100px">                    
                        <img src="data:image/png;base64,{{$resultObject->company->logo}}" style="margin-top: -15px"> 
                    </div>
                </td>
              </tr>

              <tr>
                <td height="20px"></td>
              </tr>
            
            </tbody>  
          </table>
        </td>

        <td style="width: 6%">          
        </td>
        
       
      </tr>
    </table>

    <br>                 

    <table width="100%" style="border:1px solid black">
      <tbody>
        <tr>
          <td style="font-size: 11px; text-align: center; font-weight: bold; padding: 10px 0;">LISTADO DE INGRESOS DEL  {{$resultObject->range->startDate}}-{{$resultObject->range->endDate}}</td>
        </tr>
      </tbody>
    </table>      
    
    <div style="font-weight: bold; font-size: 14px">
		FARMACIA
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->factura as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totalf->monto}}</td>
		</tr>
		
	</table>
</div>
<br>

<div style="font-weight: bold; font-size: 14px">
		RECETAS
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->receta as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totalr->monto}}</td>
		</tr>
		
	</table>
</div>

<br>

<div style="font-weight: bold; font-size: 14px">
		LABORATORIOS
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->lab as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totall->monto}}</td>
		</tr>
		
	</table>
</div>
<br>

<div style="font-weight: bold; font-size: 14px">
		ECOGRAFIAS
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->eco as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totale->monto}}</td>
		</tr>
		
	</table>
</div>
<br>

<div style="font-weight: bold; font-size: 14px">
		CERTIFICADOS
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->cert as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totalc->monto}}</td>
		</tr>
		
	</table>
</div>
<br>

<div style="font-weight: bold; font-size: 14px">
		PAPANICOLAOU
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th>Fecha Creaciòn</th>
			<th>Cliente</th>
			<th>Origen</th>
			<th>Total</th>
		    <th>Usuario</th>
		</tr>
		@foreach ($resultObject->papa as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->origin }}</td>
				<td>{{ $serv->total_invoice }}</td>
				<td>{{ $serv->user->username }}</td>
			</tr>
		@endforeach
		<tr>
			<td><strong>Total</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td width="80">{{$resultObject->totalp->monto}}</td>
		</tr>
		
	</table>
</div>



  
