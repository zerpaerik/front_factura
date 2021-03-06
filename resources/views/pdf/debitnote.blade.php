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
                      @if($debitNoteObject->company->logo)                        
                        <img src="data:image/png;base64,{{$debitNoteObject->company->logo}}">  
                      @endif
                    </div>
                </td>
              </tr>

              <tr>
                <td height="20px"></td>
              </tr>

              <tr>        
                <td style="border:0px solid black">
                  <table>
                    <tr>
                      <td style="font-size: 11px">{{$debitNoteObject->company->social_reason}}</td>                      
                    </tr>

                    <tr>
                      <td style="font-size: 11px">{{$debitNoteObject->company->comercial_name}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td style="font-size: 11px"><div style="font-weight: bold; font-size: 11px">Dir. Matriz: </div>{{$debitNoteObject->company->address}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td style="font-size: 11px"><div style="font-weight: bold; font-size: 11px">Dir. Sucursal: </div>{{$debitNoteObject->branch->address}}</td>
                    </tr>
                    
                    <tr>
                      <td height="5px"></td>
                    </tr>

                    @if($debitNoteObject->company->special_code != NULL)
                      <tr>
                        <td style="font-size: 11px"><div style="font-weight: bold; font-size: 11px">Contribuyente Especial Nro.:</div> {{$debitNoteObject->company->special_code}}</td>
                      </tr>

                      <tr>
                        <td height="5px"></td>
                      </tr>                      
                    @endif

                    @if($debitNoteObject->company->is_artisan == 1)
                      <tr>
                        <td style="font-size: 11px"><div style="font-weight: bold; font-size: 11px">Calificación Artesanal: </div>{{$debitNoteObject->company->register_number}}</td>
                      </tr>

                      <tr>
                        <td height="5px"></td>
                      </tr>
                    @endif

                    @if($debitNoteObject->company->is_accounting == 1)
                      <tr>
                        <td><div style="font-weight: bold; font-size: 11px">OBLIGADO A LLEVAR CONTABILIDAD: SI</div></td>
                      </tr>                    
                    @else
                      <tr>
                        <td><div style="font-weight: bold; font-size: 11px">OBLIGADO A LLEVAR CONTABILIDAD: NO</div></td>
                      </tr>
                    @endif

                  </table>
                  
                </td>
              </tr>
            
            </tbody>  
          </table>
        </td>

        <td style="width: 6%">          
        </td>
        
        <td style="width: 47%; vertical-align:top;">
          <table border="1">
            <tbody>        
              
              <tr>        
                <td>
                  
                  <table border="0">
                    <tr>
                      <td style="font-size: 11px"><div style="font-weight: bold; font-size: 11px">R.U.C.:</div> {{$debitNoteObject->company->ruc}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td><div style="font-weight: bold; font-size: 11px">NOTA DE DÉBITO</div></td>
                    </tr>
                    <tr>
                      <td style="font-size: 11px">No. {{$debitNoteObject->company->emission_code . "-" . $debitNoteObject->branch->emission_point . "-" . $debitNoteObject->invoice->principal_code}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td><div style="font-weight: bold; font-size: 11px">Número de Autorización</div></td>
                    </tr>
                    <tr>
                      <td style="font-size: 11px">{{$debitNoteObject->auth_code}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td><div style="font-weight: bold; font-size: 11px">Fecha y hora de autorización</div></td>
                    </tr>

                    <tr>
                      <td style="font-size: 11px">{{$debitNoteObject->auth_date ? $debitNoteObject->auth_date : ''}}</td>
                    </tr>

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    @if($debitNoteObject->environment_type == 1)                       
                       <tr>
                         <td style="font-size: 11px"><div style="font-weight: bold">Ambiente:</div> PRUEBAS</td>
                       </tr>
                    @else
                       <tr>
                         <td style="font-size: 11px"><div style="font-weight: bold">Ambiente:</div> PRODUCCIÓN</td>
                       </tr>
                    @endif

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    @if($debitNoteObject->emission_type == 1)
                      <tr>
                        <td style="font-size: 11px"><div style="font-weight: bold">Emisión: </div> NORMAL</td>
                      </tr>                      
                    @endif

                    <tr>
                      <td height="5px"></td>
                    </tr>

                    <tr>
                      <td style="font-size: 11px"><div style="font-weight: bold">Clave de acceso</div></td>
                      <img style="width: 50%; margin-left: 5px; margin-right: 5px" src="https://barcode.tec-it.com/barcode.ashx?data={{$debitNoteObject->auth_code}}&code=EANUCC128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0"/> 
                    </tr>
                  </table>
                  
                </td>
              </tr>                          
            </tbody>  
          </table>          
        </td>
      </tr>
    </table>

    <br>                 

    <table width="100%" style="border:1px solid black" border="0">
      <tbody>
        <tr>
          <td style="width: 1%"></td>
          @if($debitNoteObject->client->social_reason != NULL)
            <td style="width: 35%; font-size: 11px; font-weight: bold">Razón social / Nombres y Apellidos:</td>
            <td style="width: 30%; font-size: 11px;">{{$debitNoteObject->client->social_reason}}</td>
          @else
            <td style="width: 35%; font-size: 11px; font-weight: bold">Razón social / Nombres y Apellidos:</td>
            <td style="width: 30%; font-size: 11px;">{{$debitNoteObject->client->comercial_name}}</td>
          @endif
          
          <td style="width: 25%; font-size: 11px">            
              {{$debitNoteObject->client->idClass}}:
              {{$debitNoteObject->client->identification}}                          
          </td>          
        </tr>        
        <tr>
          <td style="width: 1%"></td>
          <td style="font-size: 11px; font-weight: bold">Fecha de Emisión: </td>
          <td style="font-size: 11px">{{$debitNoteObject->emission_date}}</td>
          <td></td>
        </tr>

        <tr>
          <td height="10px"></td>
          <td height="10px"></td>
          <td height="10px"></td>
          <td height="10px"></td>
        </tr>

        <tr>
          <td style="width: 1%"></td>
          <td style="font-size: 12px; font-weight: bold">Comprobante que se modifica:</td>
          <td style="font-size: 12px; width: 20%" align="center">{{"Factura"}}</td>
          <td style="font-size: 12px" align="center">{{substr($debitNoteObject->invoice->referral_code, 0, 3) . "-" . substr($debitNoteObject->invoice->referral_code, 3, 3) . "-" . substr($debitNoteObject->invoice->referral_code, 6)}}</td>
        </tr>

        <tr>
          <td style="width: 1%"></td>
          <td style="font-size: 11px; font-weight: bold">Fecha de emisión (comprobante a modificar): </td>
          <td style="font-size: 11px" align="center">{{$debitNoteObject->modifiedDocumentEmissionDate}}</td>
          <td></td>
        </tr>        
      </tbody>
    </table>      
    
    <br><br>
	
	<table width="100%" style="border:1px solid black">
		<thead>
			<tr>
			  <th style="width: 50%; font-size: 11px"><center>RAZÓN DE LA MODIFICACIÓN</center></th>
			  <th style="width: 50%; font-size: 11px"><center>VALOR DE LA MODIFICACIÓN</center></th>			  
			</tr>
		</thead>
		
		<tbody>
      @foreach($debitNoteObject->document_detail as $detail)        
  			<tr>
  				<td style="font-size: 11px">{{$detail->reason}}</td>
  				<td style="font-size: 11px" align="center">{{$detail->tax_base_amount}}</td>            
  			</tr>  
      @endforeach    
		</tbody>
	  
	</table>
	
    <br><br>  

    <table width="100%">
      <tbody>
        <tr>
          <td style="width: 58%; vertical-align:top">
            <table style="border:1px solid black" width="100%">      
              <tbody>                
                <tr>
                  <td style="font-weight: bold; font-size: 11px" align="center">Información Adicional</td>
                  <td>
                    <tr> 
                      <td style="font-weight: bold; font-size: 11px" align="center">Dirección</td> 
                      <td style="font-size: 11px">{{$debitNoteObject->client->address}}</td>
                    </tr> 
                  </td>                              
                  
                  <td>
                    <tr> 
                      <td style="font-weight: bold; font-size: 11px" align="center">Email</td> 
                      <td style="font-size: 11px">{{$debitNoteObject->client->email}}</td>
                    </tr>
                  </td>                  
                </tr>                
              </tbody>
            </table> 
          </td>

          <td style="width: 4%"></td>
          
          <td style="width: 39%">
            <table width="100%" border="0">      
              <tbody>                
                <tr>                  
                  
                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">SUBTOTAL 12%</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->subtotal_12}}</td>
                    </tr> 
                  </td>

                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">SUBTOTAL 0%</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->subtotal_0}}</td>
                    </tr> 
                  </td>

                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">SUBTOTAL NO OBJETO DE IVA</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->subtotal_no_objeto}}</td>
                    </tr> 
                  </td>

                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">SUBTOTAL EXENTO IVA</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->subtotal_exento}}</td>
                    </tr> 
                  </td>
                  
                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">SUBTOTAL SIN IMPUESTOS</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->subtotal_exento}}</td>
                    </tr> 
                  </td>                                                

                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">IVA 12%</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->total_12}}</td>
                    </tr> 
                  </td>                  

                  <td>
                    <tr> 
                      <td style="font-weight: bold; width: 50%; font-size: 10px" align="right">VALOR TOTAL</td> 
                      <td align="right" style="font-size: 11px">${{$debitNoteObject->total}}</td>
                    </tr> 
                  </td>
                </tr>

              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>   

	<br><br>
	@if(count($debitNoteObject->payments) > 0)
    <table width="65%" border="1">
      <thead>
        <tr>
          <th style="width: 70%; font-size: 11px" align="center">Forma de Pago</th>
          <th style="width: 30%; font-size: 11px" align="center">Valor</th>
        </tr>
      </thead>
      <tbody>
        @foreach($debitNoteObject->payments as $payment)
          <tr>
            <td style="font-size: 11px">{{$payment->paymentName}}</td>
            <td style="font-size: 11px" align="center">{{$payment->paymentMount}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @endif