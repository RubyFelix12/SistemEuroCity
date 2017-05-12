@extends('welcome')

@section('Login')
	
<div class="jumbotron">


<form action="{{url('/guardarCliente')}}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <h2 ALIGN=center>Bienvenido a <b>EuroCity</b> <font size="4"> Por el Zapata.</font></h2>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<div class="container">
   
    <div class="omb_login">
    	<h5 class="omb_authTitle">Ingresar su Correo para poder Navegar.</h5>
		
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="omb_loginForm" action="{{url('/guardarCliente')}}" autocomplete="off" method="POST">
					


          <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required>
					</div>
					<span class="help-block"></span>
										
					


          <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="texto" class="form-control" name="password" value="EXPERIENCIADE10"placeholder="Password">
					</div>

          
					<button class="btn btn-lg btn-primary btn-block" type="submit">Navegar Ahora</button>
				</form>
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-7">
				<label class="checkbox">
				
        <input name="remember" type="checkbox" value="Política" required=""> Debes aceptar las <a data-toggle="modal" data-target="#alertModal" tabindex="3" >¡Políticas de Privacidad! </a> y uso para poder Conectarte a la Red.</input>

        <!--<button type="button" class="btn btn-link" data-toggle="modal" d ata-target="#alertModal" tabindex="3">¡Politicas de Privacidad!-->


  
				 <ul class="list-unstyled">
				 </div>
				</label>
			</div>
		</div>	    	
	</div>

		 <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
       <!-- <div class="modal-dialog modal-sm">-->
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center"><B>Nuestras Políticas de Privacidad</B></h2>
                <p class="text-justify">

                Euro City, S.A. de C.V., en adelante “El Concesionario” con domicilio en
                Blvd. Emiliano Zapata 455 Pte  Colonia Guadalupe , Delegación / Municipio, C.P. 80220,
                Estado Sinaloa y/o México, Distrito Federal, es el responsable del tratamiento de sus datos personales.</p>


                <h3><B>1.  Datos Personales que serán sometidos a tratamiento:</B></h3>
                <p>•  Datos de Identificación, tales como: nombre; estado civil; firma autógrafa y electrónica; Registro Federal de Causantes (RFC); Clave Única de Registro de Población (CURP); número de cartilla militar; lugar y fecha de nacimiento; nacionalidad; fotografía; edad, entre otros.</p>
                <p>•   Datos de Contacto (Teléfono fijo o móvil, Correo Electrónico, Domicilio con Código Postal).</p>
                <p> •   Datos Laborales (Puesto; Domicilio de trabajo; Documentos que comprueben el lugar donde labora, Afiliación al IMSS-ISSSTE, -recibos de nómina o cualquier otro que acredite que obtiene ingresos; Referencia Laborales, entre otros).</p>
                <p> •   Datos Patrimoniales (Ej. Datos sobre bienes mueble e inmuebles de su propiedad o del fiador / aval; cuentas bancarias; seguros, afores; fianzas).</p>
                <p>•   Datos Financieros (Ej. Tarjetas de Crédito bancarias y/o comerciales, Estados de Cuenta, Ingresos directos e indirectos; historial crediticio; información fiscal).</p>
                <p>•   Datos de Facturación (Ej. Registro Federal del Causante o RFC / CURP / REPUVE, Comprobante de Domicilio, entre otros).</p>
                <p>•   Datos Académicos como son: trayectoria educativa; títulos; cédula profesional; certificados; reconocimientos, entre otros.</p>
                <p>•   Datos biométricos relativos a imagen del iris, huella dactilar, palma de la mano u otros análogos.</p>
                <p>•   Para Clientes o Visitantes que ingresan a las instalaciones, piso de ventas o servicio de “El Concesionario”, contará con Imágenes grabadas de circuito cerrado o de video vigilancia, para garantizar la seguridad e integridad de las instalaciones y de las personas que se encuentran en ella.</p>

                <p>Se le informa que “El Concesionario” no trata datos personales sensibles, como creencia religiosa o filosófica, preferencia sexual, afiliación política, origen racial o étnico, estado de salud presente o futuro, información genética.</p>

                <h3><B>2.  Finalidades Primarias o necesarias por las cuales se recaban los datos:</B></h3>
                <p>I.   Realizar los trámites y gestiones para la adquisición de bienes, productos y servicios para nuestros clientes y clientes potenciales;</p>
                <p>II.  Comercialización de vehículos automotores nuevos y seminuevos, así como toda clase de partes o refacciones y accesorios de los mismos en sus diversas modalidades: contado, crédito y autofinanciamiento;</p>
                <p>III. Otorgar  toda clase  de  bienes, productos  y servicios  para  el mantenimiento de su  automóvil  (refacciones , hojalatería y pintura, servicios varios relacionados con vehículos automotores);</p>
                <p>IV.  Realizar los diversos trámites para gestionar ante las autoridades competentes, el alta de los vehículos automotores en los padrones vehiculares correspondientes, así como llevar a cabo la verificación ambiental en su caso;</p>
                <p>V.  Consultar el historial crediticio ante las sociedades de información crediticia (Buró de Crédito);</p>
                <p>VI. Cumplimiento de las obligaciones en materia de garantías en vehículos automotores nuevos, seminuevos y en servicio de reparación y/o mantenimiento;</p>
                <p>VII.    Informar sobre campañas de seguridad de los vehículos automotores que promueva la planta armadora (llamada/recall), así como de actualizaciones técnicas;</p>
                <p>VIII.   Tramitar y formalizar un crédito para la adquisición de un vehículo nuevo y/o seminuevo, así como la adquisición de seguros automotrices conforme a los contratos previamente establecidos por las partes;</p>
                <p>IX. Cumplir con todas las actividades complementarias y/o auxiliares necesarias para la comercialización de vehículos automotores nuevos, seminuevos y la prestación de servicios y productos para el mantenimiento de los vehículos;</p>
                <p>X.  Procesar solicitudes, realizar actividades de cobranza, facturación y aclaraciones;</p>
                <p>XI. Cumplir con las leyes, reglamentos y demás disposiciones legales aplicables;</p>
                <p>XII.    Mantener actualizados los registros administrados por nosotros o por Volkswagen de México, S.A. de C.V.;</p>
                <p> XIII.   Para efecto de que se le contacte y se le envíe información a fin de conocer el nivel de satisfacción, así como para invitarlo a participar en la evaluación de nuestros procesos de calidad; así como para validar la calidad de los datos.</p>
                <p>XIV. Poder contactar y enviar información respecto a la adquisición de bienes o servicios que se le presten.
                <p>XV. Para dar seguimiento a solicitudes, reclamaciones y/o quejas.</p>

                <h3><B>3.  Adicionalmente  le  informamos  que  sus  datos  pueden  ser  tratados  para  las  siguientes  finalidades secundarias:</B></h3>

                <p>a.  Para enviarle información respecto a promociones, información de nuestros socios de negocios,  ofrecerle nuestros productos o servicios, pudiendo realizar acciones comerciales, de mercadotecnia, estadística, encuestas de satisfacción y evaluación de nuestros proceso de calidad, y de prospección tendiente a dichas finalidades.</p>
                <p>b.  Enviar publicidad de productos y servicios de la marca Volkswagen.</p>
                <p>c.  Para realizar estudios sobre hábitos de consumo, mercadotecnia, publicidad o prospección comercial, analizando su información y realizar estudios de mercado.</p>
                
                <p>Es importante mencionar que las finalidades (i), (ii), (iii), (iv), (v), (vi), (vii), (viii), (ix), (x), (xi), (xii), (xiii), (xiv) y (xv), son necesarias y dan origen a una relación entre las partes.</p>
               <p>Las finalidades (a), (b) y (c), no son necesarias pero son importantes para ofrecerle a través de campañas de mercadotecnia, publicidad y prospección comercial, bienes, productos y servicios exclusivos, por lo que usted tiene derecho a oponerse, o bien, a revocar su consentimiento para que “El Concesionario” deje de tratar sus datos personales para dichas finalidades, de acuerdo al procedimiento señalado en el apartado 5 o 6 del presente Aviso de Privacidad.</p>
               <p>El titular tiene un plazo de cinco (5) días hábiles posteriores a la fecha en que se obtuvieron sus datos personales, para que, de ser el caso, manifieste por escrito y en el domicilio del “Concesionario”, su negativa a la transferencia de datos personales con respecto a las finalidades que no son necesarias, ni dieron origen a la relación jurídica con el responsable.</p>


               <h3><B>4.   TRANSFERENCIA DE DATOS PERSONALES</B></h3>

               <h4>4.1 Transferencias sin necesidad de consentimiento:</h4>

                <p>Se le informa que a fin de dar cumplimiento a las finalidades establecidas, apartado 2 del presente Aviso de Privacidad, sus datos personales pueden ser transferidos y tratados dentro y fuera de los Estados Unidos Mexicanos por personas distintas al ”Concesionario”. En este sentido y con fundamento en La Ley y su Reglamento, podrán ser transferidos sin necesidad de su consentimiento a: (i) Terceros proveedores de servicios,  única y  exclusivamente para el cumplimiento de las finalidades establecidas en el apartado 2 del presente Aviso de Privacidad; (ii) A terceros para realizar gestiones de cobranza extrajudicial y judicial en caso de incumplimiento, (iii) Terceros proveedores de servicios para la investigación y aprobación, en su caso, del crédito correspondiente para el cumplimiento de las finalidades establecidas en el apartado 2 del presente Aviso de Privacidad; (iv) A Volkswagen de México, S.A. de C.V., para el establecimiento de las condiciones de garantía, campañas de seguridad (llamada/recall) y actualizaciones técnicas; (v) A Volkswagen Bank, S.A. Institución de Banca Múltiple y Volkswagen Leasing, S.A. C.V., para el cumplimiento de las finalidades para el otorgamiento de créditos y financiamientos por el servicio contratado (vi) Asociación Nacional de Concesionarios del Grupo Volkswagen, A.C. (ANCGVW), Servicios Especiales de Ventas Automotrices, S.A. de C.V. (SEVASA), y Multiservicios Integrales a Distribuidores de Automotores, S.A. de C.V. (MIDA), para el cumplimiento de sus Objetos Sociales en su relación con Asociados y Socios (vii) A las Autoridades competentes en materia de control vehicular; (viii) A empresas de sistema de localización satelital para la instalación de un dispositivo de localización, recuperación y entrega de vehículos robados; (ix) A instituciones financieras, bancarias y crediticias, para la solicitud de otorgamiento de créditos por el servicio contratado por el cliente; (x) A aseguradoras para el otorgamiento de pólizas de seguros por el servicio contratado por el cliente.</p>

               <h4>4.2 Transferencias con consentimiento:</h4>
               <p>“El Concesionario” podrá transferir sus datos personales de identificación y de contacto a Volkswagen de México, S.A. de C.V., Volkswagen Bank, S.A., Institución de Banca Múltiple y Volkswagen Leasing, S.A. C.V., Asociación Nacional de Concesionarios del Grupo Volkswagen, A.C. (ANCGVW), Servicios Especiales de Ventas Automotrices, S.A. de C.V. (SEVASA), y Multiservicios Integrales a Distribuidores de Automotores, S.A. de C.V. (MIDA), así con las que tengamos alguna relación comercial y/o de negocios con la finalidad de otorgarle beneficios; así como empresas de marketing y publicidad para las finalidades descritas en el apartado 3 del presente Aviso de Privacidad y a otras empresas del sector distributivo automotor y de bienes, productos y servicios con las que tengamos alguna relación comercial y/o de negocios con la finalidad de otorgarle beneficios, al adquirirlos. Si usted no desea que sus datos personales sean transferidos a dichos terceros, puede manifestar su negativa conforme al procedimiento establecido en el apartado 6 del presente Aviso de Privacidad.</p>

               <h4>!!ACEPTO!! que mis datos personales sean transferidos para las finalidades establecidas en el apartado 3 del presente Avisos de Privacidad.</h4>

               <h3><B>5.   OPCIONES PARA LIMITAR EL USO O DIVULGACIÓN DE SUS DATOS PERSONALES.</B></h3>

               <p>”El Concesionario” le comunica que si usted desea dejar de recibir mensajes de mercadotecnia, publicidad o de prospección comercial, puede hacerlo valer por medio de los Listados de Exclusión que se encuentran a disposición en la Gerencia General  de “El Concesionario”.</p>

                <h3><B>6.   SOLICITUD DE ACCESO, RECTIFICACIÓN, CANCELACIÓN U OPOSICIÓN DE DATOS PERSONALES (DERECHOS ARCO) Y REVOCACIÓN DE CONSENTIMIENTO.</B> </h3>

                <p>Todos tus datos personales son tratados de acuerdo a la legislación aplicable y vigente en el país, por ello le informamos que usted tiene en todo momento el derecho de Acceder, Rectificar, Cancelar u Oponerse al tratamiento que le damos a sus datos personales, así como Revocar el consentimiento otorgado para el tratamiento de los mismos; derechos que podrá hacer valer a través de la Gerencia General, área que “El Concesionario” ha designado para tal efecto, o bien, enviando un correo electrónico a: </p><h5>protecciondedatos@eurocity.com.mx <h5> <p>,para que le sea proporcionado el Formato de Solicitud de Derechos ARCO, mismo que deberá presentar requisitado en el domicilio del Responsable, debiendo adjuntar una copia de su identificación oficial para acreditar su titularidad. La respuesta a su solicitud de Derechos ARCO se le hará llegar al correo electrónico que haya proporcionado, dentro del término de 20 días hábiles contados a partir de la recepción de dicha solicitud. Así mismo, se le informa que el derecho de acceso se tendrá por cumplido cuando se haga llegar la respuesta correspondiente a través del correo electrónico que usted nos haya indicado para tal efecto.</p>

               <p>El ejercicio de los Derechos ARCO, será gratuito, en su caso, el titular debe de cubrir los gastos de envío, reproducción y/o certificación de documentos, sin embargo, si el titular ejerce el mismo derecho en un periodo no mayor de 12 meses, la respuesta a la solicitud tendrá un costo que no excederá de 3 días de salario mínimo general vigente en el Distrito Federal.</p>
               
               <p>En caso de no estar de acuerdo en el tratamiento de sus datos personales, puede acudir ante el INAI.</p>

               <h3><B>7.   USO DE COOKIES</B></h3>
               <p>“El Concesionario” en sus distintos sitios Web utiliza cookies para grabar la información de la sesión, tales como cotización o información específica sobre qué páginas visitó, pero dicha información es utilizada sobre una base anónima y agregada de tal manera que no podrá ser identificado en ella.</p>
               <p>En los sitios de “El Concesionario” se puede emitir publicidad o la ejecución de funciones de terceros que envían cookies al equipo de cómputo de los usuarios. Mediante el uso de éstas cookies no se identifica personalmente a los usuarios, únicamente a su equipo de cómputo.</p>
               <p>Como usuario, Usted podrá cambiar sus opciones a través de su equipo de cómputo o navegador de internet para dejar de aceptar cookies, o bien, confirmar si las permite o rechaza. Sin embargo, en caso de que desactive las cookies podría no tener acceso a algunas de las funciones personalizadas de nuestro Sitio Web.</p>

               <h3><B>8. MODIFICACIONES AL AVISO DE PRIVACIDAD</B></h3>

               <h5>Este Aviso de Privacidad podrá ser modificado de tiempo en tiempo por “El Concesionario”, dichas modificaciones podrán consultarse a través de los siguientes medios:<h5>

               <p>1.   Nuestra página de internet www.vw-eurocity.com.mx,www.volkswagen.com (sección Aviso de Privacidad).</p>
               <p>2.  Avisos visibles en nuestras instalaciones de “El Concesionario”; ó</p>
               <p>3.  Cualquier otro medio de comunicación oral, impreso o electrónico que “El Concesionario” determine para tal efecto.</p>


                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">De Acuerdo Con las Políticas<i class="ion-android-close"></i></button>
            </div>
        </div>

        </div>
</div>
@stop