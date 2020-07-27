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
		FACTURAS GENERADAS
</div>
<div style="margin-top:10px; background: #eaeaea;">
	<table style="" width="100%">
		<tr>
			<th width="25%">Fecha</th>
      <th width="25%">Factura</th>
			<th width="25%">Cliente</th> 
			<th width="25%">Total</th>
		</tr>
		@foreach ($resultObject->factura as $serv)
			<tr>
				<td>{{ $serv->invoice_date }}</td>
        <td>{{ $serv->principal_code }}</td>
				<td>{{ $serv->client->social_reason }}</td>
				<td>{{ $serv->total_invoice }}</td>
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




  
