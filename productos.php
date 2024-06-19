<?php
require("config/codes/config.php");

$tit = "Productos";
$menu = 2;
$val = $_GET['id'];

head($tit, $menu);

$contable = "
<div align='center' class='tit_prod'>CONTABILIDAD</div>    
Este m�dulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades operativas y gerenciales concernientes al manejo Contable
                    <br/><br>
                    <b>Principales ventajas:</b>
                    <ul>
                    <li style='color: #fff;'>Aumento en la seguridad de la informaci�n.</li>
                    <li style='color: #fff;'>Control efectivo de la informaci�n Contable y financiera.</li>
                    <li style='color: #fff;'>Evita re-procesos</li>
                    <li style='color: #fff;'>Administraci�n efectiva de los movimientos contables.</li>
                    </ul>
                    <br/>
                    CESS Contable, es un software altamente especializado en el control de los procesos contables, financieros y tributarios de cualquier tipo de entidad del sector privado, publico, o cooperativo. Se destaca por su despliegue amigable e intuitivo, did�ctico, de f�cil manejo, pr�ctico, y sencillo en proceso de captura de datos.
                    <br/><br/>
                    Es un instrumento que permite al contador reducir al m�nimo su preocupaci�n por las actividades de recolecci�n, clasificaci�n y registro, lo que le posibilita mayor facilidad y consagraci�n a las labores mayores, como lo son el an�lisis, interpretaci�n y uso de la informaci�n resultante.
                    <br/><br/>
                    El modulo se ajusta totalmente a la normatividad colombiana vigente en la materia. La rendici�n de cuentas a entes de control se puede realizar con toda tranquilidad.
                    <br/><br/>
                    La estructura del c�digo de CESS Contable, est� dise�ada para trabajar con siete niveles de disgregaci�n y catorce d�gitos. Evita re-procesos, la informaci�n ser� diligenciada una sola vez, y los movimientos actualizan todos los documentos que deben afectarse; el saldo de las cuentas es acumulado autom�ticamente al guardar los comprobantes.
                    <br/><br/>
                    La aplicaci�n permite el reconocimiento de centros de costo en unas o todas las cuentas. Generando los ajustes por inflaci�n a las cuentas que as� se definan. La aplicaci�n permite el manejo de varios periodos fiscales, en forma simult�nea y los consecutivos de los documentos son controlados teniendo encuentra el a�o fiscal. El manejo, indicaci�n y aplicaci�n de los porcentajes que permiten el c�lculo de las bases IVA, Ica, rete fuente, etc., es muy sencillo.
                    <br/><br/>
                    Permite la integraci�n y alimentaci�n sin re-procesos desde las dem�s aplicaciones administrativas de CESS: Cuentas por cobrar, Cuentas por pagar, Inventarios, Nomina, Salud (estos m�dulos se licencian independientemente). Cuenta con todos los informes de la ley requeridos, en la actividad. Una gran cualidad del modulo de CESS Contable, es que genera la informaci�n de Medios Magn�ticos en forma autom�tica. Evita el traum�tico y dispendioso alistamiento y registro manual de informaci�n que se requiere en la construcci�n de este importante informe. Todos los informes pueden ser visualizados antes de ser enviados a impresi�n y se clasifican y relacionan a continuaci�n:
                    <br/><br/>
                    <b>ESTADOS FINANCIEROS</b><br/>
                        - Balance general<br/>
                        - Estado de Resultados<br/>
                        - Informe del Contador<br/>
                        - Informe de Operaci�n Reciprocas<br/>
                        - Informe de Planeaci�n y Presupuesto<br/>
                        - Estados en el Cambio de Patrimonio<br/>
                        - Estado de Cambios en la situaci�n financiera<br/>
                        - Estado de Flujo de Efectivo<br/><br/>
                    <b>LIBROS DE CONTABILIDAD</b><br/>
                        - Libro Diario Columnario<br/>
                        - Libro Mayor y Balance<br/>
                        - Libro de Inventario y Balance<br/>
                        - Libros Auxiliares<br/>
                        - Libros Auxiliares Sencillos<br/>
                        - Impresi�n de hojas para Registrar<br/><br/>
                    <b>ANALISIS FINANCIEROS Y ADMINISTRATIVOS</b><br/>
                        - Movimiento mensual por cuenta<br/>
                        - Balance General comparativo<br/>
                        - Estado de Resultados Comparativo<br/>
                        - Planeaci�n y Presupuesto Comparativos<br/>
                        - Estados en el Cambio de Patrimonio Comparativo<br/>
                        - Estado de Cambios en la situaci�n financiera Comparativo<br/>
                        - Estado de Flujo de Efectivo Comparativo<br/><br/>
                    <b>PROCESOS TRIBUTARIOS</b><br/>
                        - Anexos de terceros<br/>
                        - Informe de Retenci�n e IVA<br/>
                        - Otros Informes de Retenci�n<br/>
                        - Certificados de Retenci�n (Retenciones)<br/>
                        - Certificados de Retenci�n ( Otros certificados)<br/>
                        - Consulta de Terceros<br/>
                        - An�lisis de Saldos de Terceros<br/>
                        - Extracto de Terceros<br/><br/>
                    <b>INFORME DE GRADNES CONTRIBUYENTES</b><br/>
                        - Archivos Planos de Movimientos<br/>
                        - Archivos planos para el SIIF<br/>
                        - Otros Archivos planos que desee elaborar   <br/>
                     <br/><br/>
                     <div align='center' style='width: 300px;margin-left: 260px;'>
                     <div style='float: left;'>
                     <a href='config/doc/contable.pdf' target='_blank'/>
                     <img src='config/images/pdf.png' width='50' height='50'/>
                     <br/>
                     Ver brochure
                     </a>   
                     </div>
                     <div style='float: left;'>
                     <a href='productos.php'/>
                     <img src='config/images/atras.png' width='50' height='50'/>                     
                     <br/>
                     Volver
                     </a>   
                     </div>
                     </div>
";

$cxp = "<div align='center' class='tit_prod'>CUENTAS POR PAGAR</div>    
                    El modulo de Cuentas por pagar es un instrumento practico preciso para esta actividad, ya que permite planear y realizar el pago de los compromisos adquiridos conforme a los plazos pactados, montos y formas de pago, a su vez Facilita la obtencion de informacion al instante sobre la liquidez y las obligaciones contraidas a corto plazo.
                    <br/><br/>
                    Es sencillo de manejar, brinda mayor productividad gracias a la confiabilidad y oportunidad de la informacion, posibilita la reduccion de errores y es una herramienta infalible para la realizacion oportuna de pagos y para el control de saldos a proveedores.
                    <br/><br>
                    <b>Principales ventajas:</b>
                    <ul>
                    <li style='color: #fff;'>Aumento en la seguridad de la informaci�n.</li>
                    <li style='color: #fff;'>Administracion Gerencial y operativa de todos los procesos relacionados a la cartera.</li>
                    <li style='color: #fff;'>Administracion efectiva de sus cuentas por pagar.</li>
                    </ul>
                     <br/>
                    El modulo permite crear y configurar los tipos de cuentas por pagar en cualquier tipo de entidad: pagos de nomina, parafiscales, servicios, contratos, compras, entre otros. Maneja consecutivo �nico de la cuenta y esta a su vez permite identificar el tipo de documento contable al cual afecta. Afecta los impuestos designados: IVA, retenci�n en la fuente, entre otros.
                    <br/><br/>
                    Permite la integraci�n y alimentaci�n sin re-procesos desde el modulo Contable y Cuentas por cobrar. Esto reduce los ciclos de registros y gastos operacionales derivados, pero ante todo reduce los errores de alimentaci�n del sistema al evitar el ingreso repetitivo de registros.
                    <br/><br/>
                    Este Modulo cuenta con todos los informes operativos y de ley requeridos en la actividad:
                    <br/><br/>
                    <b>Listado de documentos:</b> Genera un informe de movimientos realizados en el sistema de determinado rango de fechas: cuentas por pagar, comprobantes de egreso, notas d�bito o cr�dito a CxP o bancarias, consignaci�n.
                    <br/><br/>
                    <b>Documentos por bloque:</b> Esta opci�n permite la impresi�n de los documentos por lote, es decir la impresi�n continua de varios consecutivos del mismo tipo de documento.
                    <br/><br/>
                    <b>Cuentas por pagar por edades:</b> Genera una informe de clasificaci�n de obligaciones, por tipo de persona o d�a de vencimiento de pago. En este informe podemos consultar lo que adeudamos al proveedor, el tipo de documento, el concepto de movimiento, n�mero o consecutivo de documento, fecha de emisi�n y de vencimiento, valor que est� vencido entre 00 y 30 d�as, 31 y 60, 61 y 90, 91 y 120, 120 en adelante. Totaliza cada uno de estos valores por cliente o por concepto de acuerdo como se haya establecido.
                    <br/><br/>
                    <b>Extracto de proveedores:</b> Genera un extracto que muestra el c�digo de los proveedores, el nombre, el documento que se le debe, el n�mero de consecutivo, la fecha de elaboraci�n, los cargos o valores adeudados, los abonos realizados y el saldo.
                    <br/><br/>
                    <b>Extracto de proveedores detallado:</b> Genera un extracto por proveedor, donde se puede ver: cliente, concepto de movimiento, n�mero o consecutivo, fecha de elaboraci�n. Los cargos o valores adeudados, los abonos realizados y el saldo.
                    <br/><br/>
                    <b>Estado de los bancos:</b> En este informe podemos consultar el estado de los bancos, de acuerdo con los movimientos realizados. El informe muestra el saldo inicial del banco, el valor por cheques girados y cheques pendientes de pago, las consignaciones realizadas, notas d�bito, y cr�dito, y con todo esto el saldo real de cada banco.
                    <br/><br/>
                    <b>Estado de cuenta proveedor:</b> Genera un informe a determinada fecha de corte en la cual se puede consultar el estado de la cuenta de uno o variaos proveedores. En el estado cuenta de los proveedores. En el estado de cuenta de los proveedores podemos ver las cuentas que est�n por vencer o vencidas. En este informe viene relacionado el documento que se debe, el concepto de movimiento, el n�mero del consecutivo, la fecha de expedici�n y vencimiento, el valor por vencer y vencidos.
                    <br/><br/>
                    <b>Informe CxP por impuestos:</b> Generar un informe en un rango de fechas determinado en el cual se puede consultar los impuestos causados en una cuenta por pagar, y/o comprobante de egreso. Este informe relaciona la fecha, el concepto de movimiento, tipo y n�mero de documento, tercero, porcentaje aplicado, valor del impuesto y el valor base para aplicar el impuesto.
                    <br/><br/>
                    <b>Informe de CxP por descuentos:</b> Genera un informe en un rango de fechas determinado en el cual podemos consultar los descuentos causados en una cuenta por pagar y/o comprobante de egreso. En este informe viene relacionado la fecha, el concepto, tipo y n�mero de documento, tercero, porcentaje, aplicado, valor del descuento, y el valor base para aplicar el descuento.
                    <br/><br/>
                    <b>Movimiento bancario:</b> Esta opci�n permite generar un informe con los movimientos realizados al banco. Este informe muestra: banco, fecha de realizaci�n del movimiento, documento mediante el cual se hizo el movimiento, n�mero o consecutivo de este, entradas, salidas, y saldo de este banco. Da un total por cuenta, por banco y un gran total de movimiento bancarios.
                    <br/><br/>
                    <b>Bolet�n de caja y banco:</b> Esta opci�n permite ver en pantalla o impresora el bolet�n de caja y bancos. En este informe se puede consultar lo siguiente: - De la caja: Saldo anterior, ingresos, total disponible, egresos y saldo siguiente.
                    <br/><br/>
                    - De los bancos: banco y n�mero de la cuenta, saldo inicial, consignaciones, notas cr�dito, entrada, traslados, total disponible, valor de cheques girados, notas d�bito, salidas traslado y saldo siguiente.
                    <br/>
                    - Cheques procesados: Esta opci�n permite generar un informe de los cheques girados, entregados, pendientes, anulados o todos los anteriores.
                    <br/><br/>
                     <div align='center' style='width: 300px;margin-left: 260px;'>
                     <div style='float: left;'>
                     <a href='config/doc/cxp.pdf' target='_blank'/>
                     <img src='config/images/pdf.png' width='50' height='50'/>
                     <br/>
                     Ver brochure
                     </a>   
                     </div>
                     <div style='float: left;'>
                     <a href='productos.php'/>
                     <img src='config/images/atras.png' width='50' height='50'/>                     
                     <br/>
                     Volver
                     </a>   
                     </div>
                     </div>
";

$cxc = "<div align='center' class='tit_prod'>CUENTAS POR COBRAR</div>    
                    Este m�dulo permite crear y configurar los tipos de cuentas por cobrar en cualquier tipo de entidad. Maneja consecutivo �nico de la cuenta y esta a su vez permite identificar el tipo de documento contable al cual afecta.
                    <br/><br>
                    Influye los impuestos designados: IVA, retenci�n en la fuente, etc. Los niveles de seguridad y perfiles de usuario pueden ser parametrizados, a la vez que pueden realizarse auditorias de seguimiento a los movimientos que los usuarios realicen en la aplicaci�n.
                    <br/><br>
                    <b>Principales ventajas:</b>
                    <ul>
                    <li style='color: #fff;'>Aumento en la seguridad de la informaci�n.</li>
                    <li style='color: #fff;'>Adecuado control de los movimientos a trav�s de los diferentes informes.</li>
                    <li style='color: #fff;'>Evita re-procesos</li>
                    <li style='color: #fff;'>Administraci�n efectiva de las cuentas por cobrar.</li>
                    </ul>
                    <br/>
                    En este modulo es posible configurar cada una de las variables o conceptos sobre impuestos, retenciones, deducciones, descuentos, cuentas contables, etc. Los terceros son completamente describibles: Raz�n social, NIT, actividad econ�mica, tipo de empresa, direcci�n, tel�fono, ciudad, tipo de persona, etc.
                    <br/><br/>
                    Permite la integraci�n y alimentaci�n sin re-procesos desde el m�dulo CESS contable (estos m�dulos se licencian independientemente). Cuenta con todos los informes operativos y de ley requeridos en la actividad:
                    <br/><br/>
                    <b>Listado de documentos.</b> Genera un informe de movimientos realizados en el sistema en determinado rango de fechas: cuentas por cobrar, recibidos de caja, notas d�bito o cr�dito a cxc o bancarias, consignaciones.
                    <br/><br/>
                    <b>Documentos por bloque.</b> Imprime, por rango consecutivo, las cuentas por cobrar, recibos de caja cxc, recibos de caja otros conceptos, notas d�bito o cr�dito a cxc o bancarias y consignaci�n.
                    <br/><br/>
                    <b>Radicada:</b> recibidas y con el debido proceso de radicaciones.
                    <br/><br/>
                    <b>Glosadas:</b> Aquellas facturas radicadas que tienen objeciones o glosas.
                    <br/><br/>
                    <b>Cuentas por cobrar por edades.</b> Genera un informe de clasificaci�n de cartera por tipo de persona o d�a de vencimiento de pago. Puede generarse a una fecha de corte, los d�as de cartera pueden ser parametrizables. Puede realizar un informe detallado de cada factura del tercero, resumen por convenio o empresa, puede escoger tambi�n facturas seg�n el estado: Pendiente de radicar: generadas pero sin registro de radicaci�n en el sistema.
                    <br/><br/>
                    <b>Cuentas por cobrar con facturas canceladas:</b> Presenta las cuentas por cobrar que han sido canceladas mediante recibo de caja o nota cr�dito en la cual se muestran los consecutivos de documentos relacionados al pago.
                    <br/><br/>
                    <b>Extracto de cliente:</b> Muestra el historial crediticio de todos los clientes: raz�n social, c�digo, documento que debe, consecutivo, fecha de elaboraci�n, el n�mero de radiaci�n (si lo tiene), los cargos o valores que debe, los abonos y el saldo.
                    <br/><br/>
                    <b>Estado de cuenta del cliente:</b> Informe similar al anterior pero individualizado.
                    <br/><br/>
                    <b>Recibo de caja por concepto:</b> Recibo de caja realizados para cada concepto de movimiento.
                    <br/><br/>
                    <b>Consulta estado de factura por cliente:</b> consultar una factura de un cliente, muestra movimientos hechos sobre esta. Si esta cancelada muestra los documentos relacionados.
                    <br/><br/>
                    <b>Listado CxC:</b> Informe de cartera en un rango de fechas espec�fico y por estado.
                    <br/><br/>
                    <b>Estado de los bancos:</b> Saldo inicial del banco, valor por cheques girados y cheques pendientes de pago, consignaciones realizadas, notas d�bito y cr�dito y con esto el saldo real del banco.
                    <br/><br/>
                    <b>Movimiento bancario:</b> Fecha de realizaci�n del movimiento, documento mediante el cual se hizo el movimiento, n�mero o consecutivo, entradas, salidas, y saldo de este banco. Da un total por cuenta, por banco y un gran total de movimiento bancarios.
                    <br/><br/>
                    <b>Bolet�n de caja y bancos:</b> De caja: saldo anterior, ingresos, total disponible, egresos y saldo siguiente. De los bancos: banco y n�mero de la cuenta, saldo anterior, consignaciones, notas cr�dito, total disponible, valor de cheques girados, notas d�bito y saldo siguiente.
                    <br/><br/>
                    <b>Movimiento de caja:</b> Movimientos en un rango de fechas. Documentos que han movido la caja, la forma de pago del recaudo y el saldo de caja.
                     <br/><br/>
                     <div align='center' style='width: 300px;margin-left: 260px;'>
                     <div style='float: left;'>
                     <a href='config/doc/cxc.pdf' target='_blank'/>
                     <img src='config/images/pdf.png' width='50' height='50'/>
                     <br/>
                     Ver brochure
                     </a>   
                     </div>
                     <div style='float: left;'>
                     <a href='productos.php'/>
                     <img src='config/images/atras.png' width='50' height='50'/>                     
                     <br/>
                     Volver
                     </a>   
                     </div>
                     </div>  
";

$inventario = "<div align='center' class='tit_prod'>INVENTARIOS</div>    
                    Este m�dulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades de manejo de inventarios.
                    <br/><br>
                    <b>Principales ventajas:</b>
                    <ul>
                    <li style='color: #fff;'> Aumento en la seguridad de la informaci�n.</li>
                    <li style='color: #fff;'>Adecuado control de las existencias.</li>
                    <li style='color: #fff;'>Administraci�n efectiva del inventario real.</li>
                    <li style='color: #fff;'>Oportuno Funcionamiento no solo operativo, de igual manera Gerencial.</li>
                    </ul>
                     <br/>
                     Permite la personalizaci�n y adaptaci�n de funcionalidades, tanto a las necesidades como a los procesos de las empresas.
                     <br/><br/>
                     La creaci�n de m�ltiples niveles de bodegas por dependencias o centros de costo, el registro de las entradas de art�culos por tercero o proveedor, permite ejercer control de las requisiciones por cada dependencia y sus despachos derivados, accede a las consultas de existencia por almacenar o dependencia, a su vez Puede identificar las existencias o requisiciones pendientes por despachar, las salidas de dependencias Facilita tambi�n el uso de una base de datos de proveedores con informaci�n general y contable. Tambi�n facilita ejercer control sobre consecutivos en los siguientes documentos del sistema:
                     <br/><br/>
                     - cotizaci�n
                     <br/>
                     - orden compra
                     <br/>
                     - entrada de mercanc�a
                     <br/>
                     - aprovechamiento/donaciones
                     <br/>
                     - requisici�n
                     <br/>
                     - despacho                     
                     <br/>
                     - salidas
                     <br/>
                     - bajas
                     <br/>
                     - Traslados
                     <br/>
                     - devoluci�n y factura de venta.
                     <br/><br/>
                     A la hora de realizar controles de existencias, el m�dulo permite la captura del inventario f�sico, reporta las diferencias encontradas y hace el respectivo ajuste, al tiempo que actualiza en l�nea la base de datos de Contabilidad.
                     <br/><br/>
                     La aplicaci�n genera diversos reportes tanto para usuario final como para el �rea administrativa. Apoya la toma de decisiones, aplicando informes pertinentes a esta actividad.
                     <br/><br/>
                     Las herramientas y funcionalidades que posee este m�dulo reducen y agilizan los procesos relacionados con contabilidad, pues permite la reducci�n de errores mediante la Aparici�n de avisos inteligentes, mensaje, y notificaciones de rechazo, que evitan incurrir o generar eventos adversos o posible incorrecci�n en la digitaci�n de datos. El sistema cuenta con mensajes informativos que sugieren informaci�n al usuario de la aplicaci�n, esto ayuda a prevenir que se incurra en errores.
                     <br/><br/>
                     Tambi�n controla y administra eficientemente los inventarios de insumos y suministros. Facilita el alcance de niveles �ptimos de stock para evitar tener faltas o excesos de existencias, aumenta el flujo de efectivo, por la rotaci�n perfeccionada de suministros, mejora la productividad del usuario y minimiza los errores administrativos, as� pues, las funcionalidades facilitan la decisi�n de compra y asiste en el an�lisis del uso de suministros permitiendo la generaci�n autom�tica de �rdenes de compra cuando los niveles m�nimos de stock se han alcanzado.
                     <br/><br/>
                     <div align='center' style='width: 300px;margin-left: 260px;'>
                     <div style='float: left;'>
                     <a href='config/doc/inventario.pdf' target='_blank'/>
                     <img src='config/images/pdf.png' width='50' height='50'/>
                     <br/>
                     Ver brochure
                     </a>   
                     </div>
                     <div style='float: left;'>
                     <a href='productos.php'/>
                     <img src='config/images/atras.png' width='50' height='50'/>                     
                     <br/>
                     Volver
                     </a>   
                     </div>
                     </div>   
";

$nomina = "<div align='center' class='tit_prod'>NOMINA</div>    
                    El modulo permite la implantaci�n de adecuados procesos de gesti�n y control de los costos de personal. Este modulo permite la liquidaci�n peri�dica de la nomina de personal, seg�n la normatividad laboral vigente. Mediante la parametrizaci�n de conceptos de devengos, deducciones y tiempos, la instituci�n podr� componer los distintos factores que se liquidan peri�dicamente a los empleados y las apropiaciones a cargos de la empresa, a su vez Permite la generaci�n de archivos para entidades bancarias, lo cual facilita el pago de nomina por transferencia electr�nica.
                    <br/><br>
                    <b>Principales ventajas:</b>
                    <ul>
                    <li style='color: #fff;'>Aumento en la seguridad de la informaci�n.</li>
                    <li style='color: #fff;'>Adecuado control de los empleados, novedades de nomina, y liquidaciones peri�dicas.</li>
                    <li style='color: #fff;'>Administraci�n efectiva de la Nomina.</li>
                    </ul>
                    <br/>
                    <b><i>Permite la integraci�n y alimentaci�n sin re-procesos, desde el modulo Contable y Cuentas por pagar (estos m�dulos se licencian independientemente).</i></b>
                    <br/><br/>
                    <b>La parametrizaci�n de modulo considera los siguientes elementos:</b><br/>
                    - Seguridad de la aplicaci�n en la asignaci�n de perfiles.<br/>
                    - Par�metros de la aplicaci�n<br/>
                    - C�digo de control<br/>
                    - Zona y �rea<br/>
                    - Banco.<br/>
                    - Cargo y denominaci�n del cargo.<br/>
                    - Nivel Salarial, grados salariales.<br/>
                    - asignaciones b�sicas.<br/>
                    - Administradores de salud, administradores. de riesgos profesionales.<br/><br/>
                    <b>Previo a la liquidaci�n el modulo examina:</b><br/>
                    - Apropiaciones y aportes.<br/>
                    - Composici�n de factores.<br/>
                    - Factores conjuntos.<br/>
                    - Devengos autom�ticos.<br/>
                    - Reportes de novedades peri�dicas.<br/>
                    - Obligaciones de los empleados.<br/>
                    - Fondo de pensiones y fondo de cesant�as.<br/>
                    - Cajas de compensaci�n.<br/>
                    - Profesi�n, hojas de vida de los empleados.<br/>
                    - Contrato.<br/>
                    - Distribuci�n por �reas.<br/>
                    - Devengos y deducciones a liquidar.<br/>
                    - Tiempo y calendario laboral.<br/>
                    - Tabla de retenci�n.<br/>
                    - L�neas y conceptos de pr�stamos.<br/>
                    - Tipo de empleado.<br/>
                    - Tipo de obligaci�n.<br/>
                    - Tabla UVT.<br/>
                    - Tipo de liquidaci�n.<br/><br/>
                    <b>El modulo permite realizar los siguientes tipos de liquidaci�n:</b><br/>
                    - Peri�dica.<br/>
                    - Prima de servicios.<br/>
                    - Prima de navidad.<br/>
                    - Cesant�as.<br/>
                    - Liquidaci�n retroactiva.<br/>
                     <br/><br/>
                     <b>INFORMES</b>
                     <br/><br/>
                    <b>- Consolidado:</b> Totaliza los valores de todos los conceptos de devengos y deducciones pagos en un periodo de liquidaci�n determinado, por zona y por periodo.
                    <br/><br/>
                    <b>- Soporte:</b> Genera un informe con los desprendible de pago de periodos ya liquidados, primas de servicios, navidad o retiro del empleado; de uno o todos los empleados o en un rango de acuerdo al tipo de documento de identificaci�n.
                    <br/><br/>
                    <b>- Aportes:</b> Genera informes consolidados de los aportes que hacen los empleadores a entidades como el ICBF, el SENA o las cajas de compensaci�n de acuerdo con los conceptos por liquidaci�n.
                    <br/><br/>
                    <b>- Apropiaciones:</b> Informes de las distintas apropiaciones del empleado y del empleador de acuerdo con los conceptos por tipo de liquidaci�n
                    <br/><br/>
                    <b>- Conceptos:</b> Permite listar, por todos los empleados, aquellos devengos o deducciones en un periodo deseado de consulta.
                    <br/><br/>
                    <b>- Empleados:</b> Genera informes de los empleados con datos como tel�fono, direcci�n, asignaci�n b�sica mensual, etc.
                    <br/><br/>
                    <b>- Planilla unificada de pago de aportes:</b> Generar un informe en formato Excel, de apoyo en el diligenciamiento de la autoliquidaci�n y de generaci�n del archivo plano para el nuevo sistema de pago unificado de aportes de seguridad social, seg�n lo establecido en la Res. 0634 de 2006.
                    <br/><br/>
                    <b>- Certificado de ingresos y retenci�n:</b> Esta opci�n permite generar el certificado de ingresos y retenciones de los empleados creados en el sistema, en el periodo fiscal vigente y con la informaci�n del a�o anterior. Se genera con base en el formato 220 expedido por la DIAN. Se visualiza e imprime tal como es el formato.
                    <br/><br/>
                     <div align='center' style='width: 300px;margin-left: 260px;'>
                     <div style='float: left;'>
                     <a href='config/doc/nomina.pdf' target='_blank'/>
                     <img src='config/images/pdf.png' width='50' height='50'/>
                     <br/>
                     Ver brochure
                     </a>   
                     </div>
                     <div style='float: left;'>
                     <a href='productos.php'/>
                     <img src='config/images/atras.png' width='50' height='50'/>                     
                     <br/>
                     Volver
                     </a>   
                     </div>
                     </div>
    
";

?>
    <div id="cont">
        <div align="left">
            <div style="float: left;">
                <?php
                    if(empty($id)){
                        echo '<div class="forma" id="cont_div_pro_2">
                            
                        <div align="center" class="tit_prod">PRODUCTOS</div>    
                        <br/>  
                        
                        <div class="forma" style="clear: both;border: 1px solid #fff;height: 70px;padding: 5px;background-color: #013355;margin-top: 10px;">
                            <div style="float: left;width: 150px;"><a href="productos.php?id=5"><img src="config/images/contable.jpg" class="forma" width="125" height="68" style="border: 1px solid #0040FF;"/></a></div>
                            <div style="float: left;width: 350px;padding-top: 5px;">
                                <a href="productos.php?id=5" style="color: #fff;text-decoration: underline;"><b>CONTABILIDAD:</b> 
                                Este m�dulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades operativas y gerenciales concernientes al manejo Contable.</a>
                            </div>                          
                            <div style="float: left;width: 90px;margin-left: 25px;margin-top: 22px;">
                                <a href="productos.php?id=5" style="color: #fff;text-decoration: underline;">Ver m�s...</a>
                            </div>
                        </div>
                        
                        <div class="forma" style="clear: both;border: 1px solid #fff;height: 70px;padding: 5px;background-color: #013355;margin-top: 10px;">
                            <div style="float: left;width: 150px;"><a href="productos.php?id=4"><img src="config/images/inventarios.jpg" class="forma" width="125" height="68" style="border: 1px solid #0040FF;"/></a></div>
                            <div style="float: left;width: 350px;padding-top: 5px;">
                                <a href="productos.php?id=4" style="color: #fff;text-decoration: underline;"><b>INVENTARIOS:</b> 
                                Este m�dulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades de manejo de inventarios.</a>
                            </div>                          
                            <div style="float: left;width: 90px;margin-left: 25px;margin-top: 22px;">
                                <a href="productos.php?id=4" style="color: #fff;text-decoration: underline;">Ver m�s...</a>
                            </div>
                        </div>
                                                
                        <div class="forma" style="clear: both;border: 1px solid #fff;height: 70px;padding: 5px;background-color: #013355;margin-top: 10px;">
                            <div style="float: left;width: 150px;"><a href="productos.php?id=3"><img src="config/images/cuentas_cobrar.jpg" class="forma" width="125" height="68" style="border: 1px solid #0040FF;"/></a></div>
                            <div style="float: left;width: 350px;padding-top: 5px;">
                                <a href="productos.php?id=3" style="color: #fff;text-decoration: underline;"><b>CUENTAS POR COBRAR:</b> 
                                Este m�dulo permite crear y configurar los tipos de cuentas por cobrar en cualquier tipo de entidad. Maneja consecutivo �nico de la cuenta y esta a su vez permite identificar el tipo de documento contable al cual afecta.</a>
                            </div>                          
                            <div style="float: left;width: 90px;margin-left: 25px;margin-top: 22px;">
                                <a href="productos.php?id=3" style="color: #fff;text-decoration: underline;">Ver m�s...</a>
                            </div>
                        </div>
                        
                        <div class="forma" style="clear: both;border: 1px solid #fff;height: 70px;padding: 5px;background-color: #013355;margin-top: 10px;">
                            <div style="float: left;width: 150px;"><a href="productos.php?id=2"><img src="config/images/cuentas_pagar.jpg" class="forma" width="125" height="68" style="border: 1px solid #0040FF;"/></a></div>
                            <div style="float: left;width: 350px;padding-top: 5px;">
                                <a href="productos.php?id=2" style="color: #fff;text-decoration: underline;"><b>CUENTAS POR PAGAR:</b> 
                                El modulo de Cuentas por pagar es un instrumento practico preciso para esta actividad, ya que permite planear y realizar el pago de los compromisos adquiridos conforme a los plazos pactados, montos y formas de pago.</a>
                            </div>                          
                            <div style="float: left;width: 90px;margin-left: 25px;margin-top: 22px;">
                                <a href="productos.php?id=2" style="color: #fff;text-decoration: underline;">Ver m�s...</a>
                            </div>
                        </div>
                        
                        <div class="forma" style="clear: both;border: 1px solid #fff;height: 70px;padding: 5px;background-color: #013355;margin-top: 10px;">
                            <div style="float: left;width: 150px;"><a href="productos.php?id=1"><img src="config/images/nomina.jpg" class="forma" width="125" height="68" style="border: 1px solid #0040FF;"/></a></div>
                            <div style="float: left;width: 350px;padding-top: 5px;">
                                <a href="productos.php?id=1" style="color: #fff;text-decoration: underline;"><b>NOMINA:</b> 
                               El modulo permite la implantaci�n de adecuados procesos de gesti�n y control de los costos de personal. Este modulo permite la liquidaci�n peri�dica de la nomina de personal, seg�n la normatividad laboral vigente.</a>
                            </div>                          
                            <div style="float: left;width: 90px;margin-left: 25px;margin-top: 22px;">
                                <a href="productos.php?id=1" style="color: #fff;text-decoration: underline;">Ver m�s...</a>
                            </div>
                        </div>                    
                        
                    ';
                    }
                    else
                        echo '<div class="forma" id="cont_div_pro">';
                        switch ($val){
                            case 1: echo $nomina;
                                    break;
                            case 2: echo $cxp;
                                    break;
                            case 3: echo $cxc;
                                    break;
                            case 4: echo $inventario;
                                    break;
                            case 5: echo $contable;
                                    break;
                        }
                        echo '</div>';
                ?>
                
                        
              </div>
        </div>
            
        <div style="float:right;">
            <div class="forma" id="livez">
                <div id="tit">Servicios en linea</div>
                <div style="float: right;margin-right: 24px;"><img src="/config/images/chat_img.jpg"/></div>

                <div style="clear: both;float: left;padding:15px;font-size: 13px;text-align: left;">
                    Informaci�n personalizada al instante, comuniquese con un asesor en linea.
                    <br/><br/>
                    Estado:
                    <div style="margin-top: 25px;margin-left: 65px;">
                    <!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><div style="text-align:center;width:120px;"><a href="javascript:void(window.open('http://www.cessoluciones.com/livezilla/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="http://www.cessoluciones.com/livezilla/image.php?id=01&amp;type=inlay" width="120" height="30" border="0" alt="LiveZilla Live Help"></a><div style="margin-top:2px;"><a href="http://www.livezilla.net" target="_blank" title="LiveZilla Live Help" style="font-size:10px;color:#bfbfbf;text-decoration:none;font-family:verdana,arial,tahoma;">LiveZilla Live Help</a></div></div><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
                    var script = document.createElement("script");script.type="text/javascript";var src = "http://www.cessoluciones.com/livezilla/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><img src="http://www.cessoluciones.com/livezilla/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript><!-- http://www.LiveZilla.net Tracking Code -->
                    </div>
                </div>
            </div>            
            <div class="forma" style="clear:both;float: left; width: 280px;margin-top: 20px;height: 250px;margin-left: 15px;margin-bottom: 35px;">
                <ul class="tabs">
                    <li><a href="#">RECOMENDADO</a></li>
                    <li><a href="#">PARTICIPE</a></li>                    
                </ul>
                
                <!-- tab "panes" -->
                <div class="panes">
                    <div>
                        <img src="/config/images/1.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;"/> Importancia de las redes.
                        <br/>
                        <img src="/config/images/2.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Conoces tu empresa.
                        <br/>
                        <img src="/config/images/3.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Manejo adecuado de lo...
                        <br/>
                        <img src="/config/images/4.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Creando una cuenta de cobro.
                        <br/>
                        <img src="/config/images/5.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Inventario.
                    </div>
                    <div>No disponible.</div>   	
                </div>
                
                <script>
                    // perform JavaScript after the document is scriptable.
                    $(function() {
                    // setup ul.tabs to work as tabs for each div directly under div.panes
                    $("ul.tabs").tabs("div.panes > div");
                    });
                </script>
            </div>
        </div>
        
    </div>

<?php
fin();
?>     