<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 17/10/2017
 * Time: 09:53 AM
 */
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta de Drogas</title>

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md">

            <h4>Respuestas:</h4>

        </div>
    </div>

    <div class="row">

        <form id="frm_data" name="frm_data" action="" class="form-horizontal" onsubmit="return false;">

            <div class="tarjeta">

                <h5>Numero de cuestionario:</h5>

                <input type="number" class="form-control">

            </div>

            <div class="tarjeta">

                <h5>Edad:</h5>

                <input type="number" class="form-control">

            </div>

            <div class="tarjeta row">

                <div class="col-md-6">

                    <h5>Departamento:</h5>

                    <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione un departamento...">
                    <option value='412'>25 de Mayo</option>
                    <option value='413'>9 de Julio</option>
                    <option value='414'>Albardón</option>
                    <option value='415'>Angaco</option>
                    <option value='416'>Calingasta</option>
                    <option value='417'>Capital</option>
                    <option value='418'>Caucete</option>
                    <option value='419'>Chimbas</option>
                    <option value='420'>Iglesia</option>
                    <option value='421'>Jáchal</option>
                    <option value='422'>Pocito</option>
                    <option value='423'>Rawson</option>
                    <option value='424'>Rivadavia</option>
                    <option value='425'>San Martín</option>
                    <option value='426'>Santa Lucía</option>
                    <option value='427'>Sarmiento</option>
                    <option value='428'>Ullúm</option>
                    <option value='429'>Valle Fértil</option>
                    <option value='430'>Zonda</option>
                </select>

                </div>

                <div class="col-md-6">

                    <h5>Localidad:</h5>

                    <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione un localidad...">
                    <option value='2'>25 DE MAYO</option>
                    <option value='3'>CAMARICO</option>
                    <option value='4'>CHILCAS</option>
                    <option value='5'>DIVISORIA</option>
                    <option value='6'>EL CHAÑAR</option>
                    <option value='7'>ENCRUCIJADA</option>
                    <option value='8'>ESTACION ALGARROBO VERDE</option>
                    <option value='9'>CHIMBERA</option>
                    <option value='10'>LAS CASUARINAS</option>
                    <option value='11'>RAWSON</option>
                    <option value='12'>VILLA BORJAS - LA CHIMBERA</option>
                    <option value='3186'>EL ENCON</option>
                    <option value='3187'>TUPELI</option>
                    <option value='3188'>VILLA EL TANGO</option>
                    <option value='3189'>VILLA SANTA ROSA</option>
                    <option value='3190'>PASCUAL CHENA</option>
                    <option value='3191'>LA TRANCA</option>
                    <option value='3192'>ESTACION PUNTA DEL AGUA</option>
                    <option value='4538'>LA CHIMBERA</option>
                    <option value='4539'>VILLA BORJAS</option>
                    <option value='13206'>CUATRO ESQUINAS</option>
                    <option value='13207'>POZO DEL SALADO</option>
                    <option value='13'>ANGACO SUD</option>
                    <option value='14'>LA DIVISORIA</option>
                    <option value='15'>LA MAJADITA</option>
                    <option value='537'>RINCON CERCADO</option>
                    <option value='538'>VILLA CABECERA</option>
                    <option value='3131'>ALTO DE SIERRA</option>
                    <option value='3132'>COLONIA FIORITO</option>
                    <option value='3133'>LAS CHACRITAS</option>
                    <option value='3134'>9 DE JULIO</option>
                    <option value='16'>ALBARDON CENTRO</option>
                    <option value='17'>LAS LAJAS</option>
                    <option value='18'>LAS LOMITAS</option>
                    <option value='19'>LAS PIEDRITAS</option>
                    <option value='20'>VILLA ALCIRA</option>
                    <option value='21'>VILLA CHILE</option>
                    <option value='22'>VILLA GENERAL SAN MARTÍN - CAMPO AFUERA</option>
                    <option value='23'>VILLA SAN MIGUEL</option>
                    <option value='3098'>EL RINCON</option>
                    <option value='4513'>CAMPO AFUERA</option>
                    <option value='4514'>LA CAÑADA</option>
                    <option value='4515'>VILLA AMPACAMA</option>
                    <option value='4516'>VILLA GENERAL SAN MARTIN</option>
                    <option value='6340'>LAS TAPIAS</option>
                    <option value='6341'>OBISPO ZAPATA</option>
                    <option value='6342'>TIERRA ADENTRO</option>
                    <option value='10534'>EL SALADO</option>
                    <option value='10535'>EL TOPON</option>
                    <option value='10536'>FINCA EL SALADO</option>
                    <option value='24'>AGUILERA</option>
                    <option value='25'>ANGACO CENTRO</option>
                    <option value='26'>BELGRANO</option>
                    <option value='27'>CAMPO DE BATALLA</option>
                    <option value='28'>DIVISORIA</option>
                    <option value='29'>EL ALAMITO</option>
                    <option value='30'>OLIVERA</option>
                    <option value='31'>PLUMERILLO</option>
                    <option value='32'>PUNTA DEL MONTE</option>
                    <option value='33'>VILLA EL SALVADOR - VILLA SEFAIR</option>
                    <option value='3099'>LAS TAPIAS</option>
                    <option value='3100'>LA CAÑADA</option>
                    <option value='3101'>EL BOSQUE</option>
                    <option value='4517'>VILLA EL SALVADOR</option>
                    <option value='4518'>VILLA SEFAIR (TALACASTO)</option>
                    <option value='34'>BARREAL - VILLA PITUIL</option>
                    <option value='35'>BARREALITO</option>
                    <option value='36'>HILARIO</option>
                    <option value='37'>LA ISLA</option>
                    <option value='38'>LA PUNTILLA</option>
                    <option value='39'>PACHACO</option>
                    <option value='40'>PUCHUZUN</option>
                    <option value='41'>SOROCAYENSE</option>
                    <option value='42'>VILLA CORRAL</option>
                    <option value='43'>VILLA NUEVA</option>
                    <option value='3102'>CALINGASTA</option>
                    <option value='3103'>TAMBERIAS</option>
                    <option value='3104'>BARREAL</option>
                    <option value='4519'>VILLA PITUIL</option>
                    <option value='6419'>ALCAPARROSA</option>
                    <option value='6420'>BELLA VISTA</option>
                    <option value='6421'>COLON</option>
                    <option value='6422'>EL LEONCITO</option>
                    <option value='6423'>LA ALUMBRERA</option>
                    <option value='6424'>TIRA LARGA</option>
                    <option value='44'>B. DEL CARMEN</option>
                    <option value='45'>BARRIO CABOT</option>
                    <option value='46'>CONCEPCION</option>
                    <option value='47'>DESAMPARADOS</option>
                    <option value='48'>MEDANO DE ORO</option>
                    <option value='49'>TRINIDAD</option>
                    <option value='50'>VILLA AMERICA</option>
                    <option value='51'>VILLA BARDIANI</option>
                    <option value='52'>VILLA DEL CARRIL</option>
                    <option value='728'>VILLA MALLEA</option>
                    <option value='3105'>SAN JUAN</option>
                    <option value='729'>DIFUNTA CORREA</option>
                    <option value='3106'>BERMEJO</option>
                    <option value='3107'>CAUCETE</option>
                    <option value='3108'>EL RINCON</option>
                    <option value='3109'>MARAYES</option>
                    <option value='3110'>PIE DE PALO</option>
                    <option value='3111'>VALLECITO</option>
                    <option value='3112'>VILLA INDEPENDENCIA</option>
                    <option value='3113'>LAS CHACRAS</option>
                    <option value='4520'>LAS TALAS</option>
                    <option value='4521'>LOS MEDANOS</option>
                    <option value='6425'>DIVISORIA</option>
                    <option value='6426'>LAGUNA SECA</option>
                    <option value='8881'>LAS CHACRAS MARAYES</option>
                    <option value='8882'>LAS LIEBRES</option>
                    <option value='8883'>BARRIO JUSTO P. CASTRO IV</option>
                    <option value='12270'>LA CHILCA</option>
                    <option value='12271'>LA PUNTILLA</option>
                    <option value='12272'>LAS TALAS - LOS MÉDANOS</option>
                    <option value='12273'>LOTES DE ALVAREZ</option>
                    <option value='12274'>NIQUIZANGA</option>
                    <option value='12275'>PAPAGAYO</option>
                    <option value='12276'>POZO DE LOS ALGARROBOS</option>
                    <option value='12952'>AGUADA DE AMPACAMA</option>
                    <option value='730'>CARCEL PUBLICA</option>
                    <option value='731'>VILLA SAN ISIDRO</option>
                    <option value='4522'>CHIMBAS (CHIMBAS)</option>
                    <option value='4523'>EL MOGOTE</option>
                    <option value='4524'>VILLA PAULA ALBARRACIN</option>
                    <option value='7614'>CHIMBAS</option>
                    <option value='7615'>CHIMBAS DEL SUR</option>
                    <option value='7616'>VILLA MORRONES</option>
                    <option value='7617'>VILLA OBRERA</option>
                    <option value='8884'>BARRIO PARQUE IDUSTRIAL</option>
                    <option value='8885'>BARRIO PARQUE INDEPENDENCIA</option>
                    <option value='8886'>VILLA OBSERVATORIO</option>
                    <option value='8887'>VILLA SARMIENTO</option>
                    <option value='8888'>VILLA UNION</option>
                    <option value='732'>CAMPANARIO</option>
                    <option value='733'>GUAÑIZUIL</option>
                    <option value='734'>TAMBILLOS</option>
                    <option value='735'>TOCOTA</option>
                    <option value='736'>VILLA IGLESIA</option>
                    <option value='738'>ZONDA 2</option>
                    <option value='1744'>EL RETIRO</option>
                    <option value='3114'>ANGUALASTO</option>
                    <option value='3115'>BELLA VISTA</option>
                    <option value='3116'>IGLESIA</option>
                    <option value='3117'>LAS FLORES</option>
                    <option value='3118'>PISMANTA</option>
                    <option value='3119'>RODEO</option>
                    <option value='3120'>TUDCUM</option>
                    <option value='5586'>COLANGUIL</option>
                    <option value='5587'>COLOLA</option>
                    <option value='6263'>ARREQUINTIN</option>
                    <option value='6899'>MALIMAN DE ABAJO</option>
                    <option value='8889'>ACHANGO</option>
                    <option value='8890'>BAUCHACETA</option>
                    <option value='8891'>FIERRO NUEVO</option>
                    <option value='8892'>FIERRO VIEJO</option>
                    <option value='8893'>GUARDIA VIEJA</option>
                    <option value='8894'>MALIMAN DE ARRIBA</option>
                    <option value='12879'>MONDACA</option>
                    <option value='12880'>ZONDA</option>
                    <option value='306'>BELLA VISTA</option>
                    <option value='307'>BOCA DE LA QUEBRADA</option>
                    <option value='308'>DIQUE PACHIMOCO</option>
                    <option value='309'>EL VOLCAN</option>
                    <option value='310'>GUALCAMAYO</option>
                    <option value='311'>INDIO MUERTO</option>
                    <option value='312'>LA FRONTERA</option>
                    <option value='313'>LA TOMA</option>
                    <option value='314'>LAS AGUADITAS</option>
                    <option value='315'>LOS PUESTOS</option>
                    <option value='316'>NIQUIVIL VIEJO</option>
                    <option value='317'>OTRA BANDA</option>
                    <option value='318'>PANACAN</option>
                    <option value='654'>EL FISCAL</option>
                    <option value='737'>ADAN QUIROGA</option>
                    <option value='739'>AGUA HEDIONDA</option>
                    <option value='740'>AGUADA</option>
                    <option value='741'>CRUZ DE PIEDRA</option>
                    <option value='742'>EL BALDE</option>
                    <option value='743'>EL PANTANILLO</option>
                    <option value='744'>ENTRE RIOS</option>
                    <option value='745'>HUALLARA</option>
                    <option value='746'>HUERTA DE HUACHI</option>
                    <option value='747'>JACHAL CENTRO</option>
                    <option value='748'>JARILLAS</option>
                    <option value='749'>LA CIENAGA</option>
                    <option value='750'>LA CIENEGUITA</option>
                    <option value='751'>LA REPRESA</option>
                    <option value='752'>PACHIMOCO</option>
                    <option value='753'>PAMPA DEL CHAÑAR</option>
                    <option value='754'>PAMPA VIEJA</option>
                    <option value='755'>PUNTA DEL AGUA</option>
                    <option value='756'>RINCON</option>
                    <option value='757'>SAN ROQUE</option>
                    <option value='3121'>EL MEDANO</option>
                    <option value='3122'>GRAN CHINA</option>
                    <option value='3123'>HUACO</option>
                    <option value='3124'>MOGNA</option>
                    <option value='3125'>NIQUIVIL</option>
                    <option value='3126'>SAN ISIDRO</option>
                    <option value='3127'>SAN JOSE DE JACHAL</option>
                    <option value='3128'>TAMBERIAS</option>
                    <option value='3129'>VILLA MALVINAS ARGENTINAS</option>
                    <option value='3130'>VILLA MERCEDES</option>
                    <option value='4525'>EL FICAL</option>
                    <option value='4526'>LA FALDA</option>
                    <option value='4527'>PAMPA VIEJA (PAMPA VIEJA)</option>
                    <option value='539'>ESTACION SANCHEZ DE LORIA</option>
                    <option value='540'>LA CALLECITA</option>
                    <option value='541'>SEGUNDO CUARTEL</option>
                    <option value='542'>VILLA AEROPUERTO</option>
                    <option value='543'>BARRIO MUNICIPAL</option>
                    <option value='544'>LAS PIEDRITAS</option>
                    <option value='758'>CAMPO DE BATALLA</option>
                    <option value='759'>CERRILLO</option>
                    <option value='760'>COLONIA ROCA</option>
                    <option value='761'>KILOMETRO 12</option>
                    <option value='1437'>MEDANO DE ORO</option>
                    <option value='1438'>POCITO</option>
                    <option value='1439'>SANCHEZ DE LORIA</option>
                    <option value='1440'>VILLA ABERASTAIN - LA RINCONADA</option>
                    <option value='1441'>VILLA BARBOZA - VILLA NACUSI</option>
                    <option value='1442'>VILLA CREMADES</option>
                    <option value='1443'>VILLA LIBERTAD</option>
                    <option value='1444'>VILLA LIZA</option>
                    <option value='3135'>BARRIO RUTA 40</option>
                    <option value='3136'>CARPINTERIA</option>
                    <option value='3137'>QUINTO CUARTEL</option>
                    <option value='3138'>VILLA CENTENARIO</option>
                    <option value='3139'>COLONIA RODAS</option>
                    <option value='3140'>EL ABANICO</option>
                    <option value='4528'>LA RINCONADA</option>
                    <option value='4529'>VILLA ABERASTAIN</option>
                    <option value='4530'>VILLA BARBOZA</option>
                    <option value='4531'>VILLA NACUSI</option>
                    <option value='6904'>COLONIA CANTONI</option>
                    <option value='1445'>B. ATLETICO</option>
                    <option value='1446'>B. BELGRANO</option>
                    <option value='1447'>B. GUEMES</option>
                    <option value='1448'>B. NEUQUEN</option>
                    <option value='1449'>B. SARMIENTO</option>
                    <option value='1450'>B.S.M.DEL CARRIL</option>
                    <option value='1451'>BARRIO C.BUSTOS</option>
                    <option value='1452'>BARRIO CAPITAN LAZO</option>
                    <option value='1453'>BARRIO FERROVIARIO</option>
                    <option value='1454'>BARRIO SAN LUIS</option>
                    <option value='1455'>CAPITAN LAZO</option>
                    <option value='1456'>COLONIA MEDANO DE ORO</option>
                    <option value='1457'>COLONIA ROSALES</option>
                    <option value='1458'>RAWSON</option>
                    <option value='1459'>VILLA BURON ALONZO</option>
                    <option value='1460'>VILLA ELISA</option>
                    <option value='1461'>VILLA ESTORNELL</option>
                    <option value='1462'>VILLA GUSMAN</option>
                    <option value='1463'>VILLA HIPODROMO</option>
                    <option value='1464'>VILLA ITALIA</option>
                    <option value='1465'>VILLA LAPLAGNE</option>
                    <option value='1466'>VILLA LAS ROSAS</option>
                    <option value='1467'>VILLA LERGA</option>
                    <option value='1468'>VILLA LLIVER</option>
                    <option value='1469'>VILLA OBRERA</option>
                    <option value='1470'>VILLA SAN DAMIAN</option>
                    <option value='1471'>VILLA SAN RICARDO</option>
                    <option value='3141'>VILLA BOLAÑOS</option>
                    <option value='4532'>EL MEDANITO</option>
                    <option value='4533'>RAWSON (RAWSON)</option>
                    <option value='4534'>VILLA KRAUSE</option>
                    <option value='8825'>COLONIA PAN DE AZUCAR</option>
                    <option value='8826'>COLONIA RODAS</option>
                    <option value='8827'>LOS CORREDORES</option>
                    <option value='1472'>B. FOEVA</option>
                    <option value='1473'>B.SUB-OFICIALES</option>
                    <option value='1474'>BARRIO RIVADAVIA</option>
                    <option value='1475'>BARRIO VILLA DEL CAR</option>
                    <option value='1476'>LA BEBIDA</option>
                    <option value='1477'>MARQUESADO</option>
                    <option value='1478'>PUNTILLA BLANCA</option>
                    <option value='1479'>VILLA FLORA</option>
                    <option value='1480'>VILLA HUAZIHUL</option>
                    <option value='1481'>VILLA LOURDES</option>
                    <option value='1482'>VILLA OBRERA</option>
                    <option value='1483'>VILLA R.PINTO</option>
                    <option value='1484'>VILLA SAN FRANCISCO</option>
                    <option value='1485'>VILLA SAN ROQUE</option>
                    <option value='2161'>VILLA SANTA ANITA</option>
                    <option value='2162'>VILLA SANTA INES</option>
                    <option value='2163'>ZONDA</option>
                    <option value='3142'>RIVADAVIA</option>
                    <option value='12945'>BARRIO CAMUS</option>
                    <option value='12946'>BARRIO FORTABAT</option>
                    <option value='12947'>JARDIN DE LOS POETAS</option>
                    <option value='12948'>VILLA NUEVA ARGENTINA</option>
                    <option value='2164'>DOS ACEQUIAS</option>
                    <option value='2165'>LA PUNTILLA</option>
                    <option value='2166'>LA PUNTILLA BLANCA</option>
                    <option value='2167'>LA PUNTILLA NEGRA</option>
                    <option value='2168'>LOS ANGACOS</option>
                    <option value='2169'>SAN MARTIN</option>
                    <option value='2170'>VILLA LUGANO</option>
                    <option value='2171'>VILLA LUJAN</option>
                    <option value='3143'>BARRIO SADOP</option>
                    <option value='3144'>DOS ACEQUIAS (EST. LOS ANGACOS)</option>
                    <option value='3145'>SAN ISIDRO</option>
                    <option value='3146'>VILLA EL SALVADOR</option>
                    <option value='3147'>VILLA DOMINGUITO</option>
                    <option value='3148'>VILLA DON BOSCO</option>
                    <option value='3149'>VILLA SAN MARTIN</option>
                    <option value='12949'>BOCA DEL TIGRE</option>
                    <option value='12950'>LOS COMPARTOS</option>
                    <option value='1746'>LAS PIEDRITAS</option>
                    <option value='2172'>COLONIA RICHET ZAPATA</option>
                    <option value='2173'>COLONIA ZAPATA</option>
                    <option value='2174'>LA LEGUA</option>
                    <option value='2175'>SANTA LUCÍA</option>
                    <option value='2176'>TIERRA ADENTRO</option>
                    <option value='2177'>VILLA CAMPODONICO</option>
                    <option value='2178'>VILLA DON ARTURO</option>
                    <option value='2179'>VILLA MARINI</option>
                    <option value='2180'>VILLA SAN EDUARDO</option>
                    <option value='3150'>COLONIA GUTIERREZ</option>
                    <option value='4535'>ALTO DE SIERRA</option>
                    <option value='4536'>SANTA LUCÍA (COLONIA GUTIÉRREZ)</option>
                    <option value='4537'>SANTA LUCIA</option>
                    <option value='12951'>BARRIO BERMEJITO</option>
                    <option value='2181'>BARRIO PATIÑO</option>
                    <option value='2182'>CIENAGA</option>
                    <option value='2183'>COLONIA SAN ANTONIO</option>
                    <option value='2184'>DURAZNO</option>
                    <option value='2185'>ESTACION COCHAGUAL</option>
                    <option value='2186'>RETAMITO</option>
                    <option value='2187'>SAN CARLOS</option>
                    <option value='2188'>TRES ESQUINAS</option>
                    <option value='2189'>VILLA SARMIENTO</option>
                    <option value='3151'>CAÑADA HONDA</option>
                    <option value='3152'>CIENAGUITA</option>
                    <option value='3153'>COLONIA FISCAL</option>
                    <option value='3154'>DIVISADERO</option>
                    <option value='3155'>GUANACACHE</option>
                    <option value='3156'>LAS LAGUNAS</option>
                    <option value='3157'>LOS BERROS</option>
                    <option value='3158'>PEDERNAL</option>
                    <option value='3159'>PUNTA DEL MEDANO</option>
                    <option value='3160'>VILLA MEDIA AGUA</option>
                    <option value='3161'>COCHAGUAL NORTE</option>
                    <option value='3162'>COCHAGUAL CENTRO</option>
                    <option value='3163'>LA CILVICA</option>
                    <option value='2190'>DIQUE ULLUM</option>
                    <option value='2191'>EL CHILOTE</option>
                    <option value='2192'>PACHACO</option>
                    <option value='3164'>VILLA IBAÑEZ</option>
                    <option value='1751'>SANTO DOMINGO</option>
                    <option value='2193'>AGUA CERCADA</option>
                    <option value='2194'>BALDE DE ASTICA</option>
                    <option value='2195'>LA CIENAGUITA</option>
                    <option value='2196'>BALDES DE LA CHILCA</option>
                    <option value='2197'>LAS JUNTAS</option>
                    <option value='2198'>BALDES DEL SUD</option>
                    <option value='2199'>CHUCHILLACO</option>
                    <option value='2875'>LOS MOLLES</option>
                    <option value='2876'>MAJADITA</option>
                    <option value='2877'>PASTO BLANCO</option>
                    <option value='2878'>SANTA ROSA</option>
                    <option value='2879'>SIERRA DE CHAVES</option>
                    <option value='2880'>VALLE FERTIL</option>
                    <option value='2881'>YOCA</option>
                    <option value='3165'>ASTICA</option>
                    <option value='3166'>BALDE DEL ROSARIO</option>
                    <option value='3167'>CHUCUMA</option>
                    <option value='3168'>LOS BALDECITOS</option>
                    <option value='3169'>USNO</option>
                    <option value='3170'>VILLA SAN AGUSTIN</option>
                    <option value='3171'>LAS TUMANAS</option>
                    <option value='3172'>SAN ANTONIO</option>
                    <option value='3173'>SIERRA DE RIVERO</option>
                    <option value='3174'>LOMAS BLANCAS</option>
                    <option value='3175'>SIERRA DE ELIZONDO</option>
                    <option value='3176'>LOS RINCONES</option>
                    <option value='3177'>BUENA ESPERANZA</option>
                    <option value='3178'>LAS FLORES</option>
                    <option value='3179'>QUEBRADA DE USNO</option>
                    <option value='3180'>SIERRA DE CHÁVEZ</option>
                    <option value='3181'>LA MAJADITA</option>
                    <option value='3182'>BALDES DE LAS CHILCAS</option>
                    <option value='3183'>BALDES DEL SUR</option>
                    <option value='3184'>BALDES DE ASTICA</option>
                    <option value='3185'>LA MESADA</option>
                    <option value='13201'>BALDES DEL NORTE</option>
                    <option value='13202'>COLONIA LOS VALECIANOS</option>
                    <option value='13203'>LA HUERTA</option>
                    <option value='13204'>LOS BRETES</option>
                    <option value='13205'>RINCON CHICO</option>
                    <option value='448'>LOS PARAMILLOS</option>
                    <option value='449'>PACHACO</option>
                    <option value='2882'>CERRO BLANCO</option>
                    <option value='2883'>VILLA BASILIO NIEVAS</option>
                    <option value='2884'>ZONDA ARRIBA</option>
                    <option value='2885'>ZONDA CENTRO</option>
                    <option value='4540'>VILLA BASILIO NIEVAS  (VILLA BASILIO NIEVAS)</option>
                    <option value='4541'>VILLA TACU</option>
                </select>

                </div>

            </div>

            <div class="tarjeta row">

                <h5>Sexo:</h5>

                <div class="form-check">
                    <label class="form-check-label">
                        <span class="badge">Femenino</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                        <span class="badge">Masculino</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                    </label>
                </div>

            </div>

            <div class="tarjeta row">

                <h5>¿Alguna vez consumió bebidas alcoholicas?</h5>

                <div class="form-check">
                    <label class="form-check-label">
                        <span class="badge">SI</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                        <span class="badge">NO</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                    </label>
                </div>

            </div>

            <div class="tarjeta row">

                <h5>¿Alguna vez consumió drogas?</h5>

                <div class="consumio col-md-6">

                    <div class="form-check">
                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                            <br>
                         </label>
                    </div>

                </div>

                <div class="noConsumio col-md-6">

                    <h5>¿Cuáles?</h5>

                    <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione...">
                        <option>Faso</option>
                        <option>Merca</option>
                        <option>Palitos de la selva</option>
                    </select>
                </div>

            </div>




            <div class="tarjeta row">

                <h5>¿Alguna vez pensó que tenía que reducir su consumo de bebidas algohólicas y/o drogas?</h5>

                <div class="alcohol col-md-6">

                    <h5>Alcohol:</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

                <div class="drogas col-md-6">
                    <h5>Drogas</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

            </div>

            <div class="tarjeta row">

                <h5>¿Le han molestado las observaciones de su familia acerca de sus hábitos de consumo de bebidas o drogas?</h5>

                <div class="alcohol col-md-6">

                    <h5>Alcohol:</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

                <div class="drogas col-md-6">
                    <h5>Drogas</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

            </div>

            <div class="tarjeta row">

                <h5>¿Alguna vez se sintió culpable por su manera de consumir alcohol o drogas?</h5>

                <div class="alcohol col-md-6">

                    <h5>Alcohol:</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

                <div class="drogas col-md-6">
                    <h5>Drogas</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

            </div>

            <div class="tarjeta row">

                <h5>¿Alguna vez tuvo que consumir algún tipo de bebida o droga para empezar el día?</h5>

                <div class="alcohol col-md-6">

                    <h5>Alcohol:</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

                <div class="drogas col-md-6">
                    <h5>Drogas</h5>

                    <div class="form-check">

                        <label class="form-check-label">
                            <span class="badge">SI</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                            <span class="badge">NO</span>
                            <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >
                        </label>

                    </div>
                </div>

            </div>

            <br>
            <br>

            <div class="text-center">
                <button type="submit" onclick="javascript:enviarDatos();" class="btn btn-default">Enviar solicitud</button>
            </div>

            <br>
            <br>


        </form>
    </div>


</div>



</body>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!--user script-->
<script src="script.js"></script>
</html>
