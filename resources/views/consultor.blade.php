<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agence Examen</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <main>
            <header class="fixed w-full z-10">
                <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
                    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                        <a href="{{ url('/') }}" class="flex items-center">
                            <img src="/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Agence Examen</span>
                        </a>
                        <div class="flex items-center lg:order-2">
                            {{-- <a href="{{ url('/consultor') }}" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Consultor</a> --}}
                            {{-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clipRule="evenodd"></path></svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clipRule="evenodd"></path></svg>
                            </button> --}}
                        </div>

                    </div>
                </nav>
            </header>

            <!-- Start block -->
            <section class="bg-white dark:bg-gray-900">
                <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 pt-20">


                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="agence-tab" data-tabs-target="#agence" type="button" role="tab" aria-controls="profile" aria-selected="false">Agence</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="projetos-tab" data-tabs-target="#projetos" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Projetos</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="administrativo-tab" data-tabs-target="#administrativo" type="button" role="tab" aria-controls="settings" aria-selected="false">Administrativo</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="comercial-tab" data-tabs-target="#comercial" type="button" role="tab" aria-controls="contacts" aria-selected="false">Comercial</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="financiero-tab" data-tabs-target="#financiero" type="button" role="tab" aria-controls="contacts" aria-selected="false">Financiero</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="usuario-tab" data-tabs-target="#usuario" type="button" role="tab" aria-controls="contacts" aria-selected="false">Usuario</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-700" id="salir-tab" data-tabs-target="#salir" type="button" role="tab" aria-controls="contacts" aria-selected="false">Salir</button>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="agence" role="tabpanel" aria-labelledby="agence-tab">

                            <form>
                                <div class="min-h-screen">
                                    <header class="hidden md:block lg:block bg-gray-100 text-white py-4">
                                        <div class="container mx-auto flex items-center justify-start">
                                            <label for="month1" class="mr-2 text-gray-900">Periodo:</label>
                                            <select id="month1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-1/2 p-2.5 mr-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                <option value="01">Janeiro</option>
                                                <option value="02">Fevereiro</option>
                                                <option value="03">Março</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Maio</option>
                                                <option value="06">Junho</option>
                                                <option value="07">Julho</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Setembro</option>
                                                <option value="10">Outubro</option>
                                                <option value="11">Novembro</option>
                                                <option value="12">Dezembro</option>
                                            </select>
                                            <select id="year1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-1/2 p-2.5 mr-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                            <span class="mr-2 text-gray-900">A:</span>
                                            <select id="month2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-1/2 p-2.5 ml-2 mr-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                <option value="01">Janeiro</option>
                                                <option value="02">Fevereiro</option>
                                                <option value="03">Março</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Maio</option>
                                                <option value="06">Junho</option>
                                                <option value="07">Julho</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Setembro</option>
                                                <option value="10">Outubro</option>
                                                <option value="11">Novembro</option>
                                                <option value="12">Dezembro</option>
                                            </select>
                                            <select id="year2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </header>

                                    <!-- Small Screen-->
                                    <header class="md:hidden lg:hidden bg-gray-100 text-white py-4">
                                        <div>
                                            <div class="flex m-1 text-gray-900">Periodo:</div>
                                            <div class="flex">
                                                <select id="month1-small" class="bg-gray-50 w-1/2 m-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option value="01">Janeiro</option>
                                                    <option value="02">Fevereiro</option>
                                                    <option value="03">Março</option>
                                                    <option value="04">Abril</option>
                                                    <option value="05">Maio</option>
                                                    <option value="06">Junho</option>
                                                    <option value="07">Julho</option>
                                                    <option value="08">Agosto</option>
                                                    <option value="09">Setembro</option>
                                                    <option value="10">Outubro</option>
                                                    <option value="11">Novembro</option>
                                                    <option value="12">Dezembro</option>
                                                </select>
                                                <select id="year1-small" class="bg-gray-50 w-1/2 m-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex m-1 text-gray-900">A:</div>
                                            <div class="flex">
                                                <select id="month2-small" class="bg-gray-50 border w-1/2 m-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option value="01">Janeiro</option>
                                                    <option value="02">Fevereiro</option>
                                                    <option value="03">Março</option>
                                                    <option value="04">Abril</option>
                                                    <option value="05">Maio</option>
                                                    <option value="06">Junho</option>
                                                    <option value="07">Julho</option>
                                                    <option value="08">Agosto</option>
                                                    <option value="09">Setembro</option>
                                                    <option value="10">Outubro</option>
                                                    <option value="11">Novembro</option>
                                                    <option value="12">Dezembro</option>
                                                </select>
                                                <select id="year2-small" class="bg-gray-50 border w-1/2 m-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                    </header>

                                    <!-----end small screen----->
                                <div class="h-8"></div>

                                <!-- Segunda fila dividida en 3 columnas -->
                                 <!---- Small Screen---->
                                <div class="md:hidden lg:hidden">
                                    <div class="m-1">
                                        <div class="flex my-1">
                                            Consultores
                                        </div>
                                        <div class="flex">
                                            <select id="list1-small" multiple id="countries_multiple" class=" h-42 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                @foreach ($consultores as $item)
                                                    <option value="{{$item->co_usuario}}">{{ $item->no_usuario }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex">
                                            <button type="button" id="removeButton" class="text-white bg-purple-700 m-2 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                                <<
                                            </button>

                                            <button type="button" id="addButton" class="text-white bg-purple-700 m-2 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                                >>
                                            </button>
                                        </div>
                                        <div class="flex">
                                            <select id="list2-small" multiple id="countries_multiple" class="bg-gray-50 h-42 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            </select>
                                        </div>
                                        <div class="bg-gray-100 py-4">
                                            <button type="button" id="relatorioButton" class="text-white my-1 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Relatório</button>
                                            <button type="button" id="graphButton" class="text-white m-1 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Gráfico</button>
                                            <button type="button" id="pizzaButton" class="text-white m-1 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Pizza</button>
                                        </div>
                                    </div>
                                </div>
                                <!------end small screen-------->


                                <div class="hidden md:block lg:block">
                                    <div class="flex">
                                        <div class="w-2/12 bg-gray-100 p-4">
                                            Consultores
                                        </div>
                                        <div class="w-8/12 bg-gray-100 p-4">
                                            <div class="container mx-auto flex items-center justify-start">


                                                <select id="list1" multiple id="countries_multiple" class="bg-gray-50 h-72 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                @foreach ($consultores as $item)
                                                    <option value="{{$item->co_usuario}}">{{ $item->no_usuario }}</option>
                                                @endforeach
                                                </select>


                                                <button type="button" id="removeButton2" class="text-white bg-purple-700 m-2 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                                    <<
                                                </button>

                                                <button type="button" id="addButton2" class="text-white bg-purple-700 m-2 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                                    >>
                                                </button>



                                                <select id="list2" multiple id="countries_multiple" class="bg-gray-50 h-72 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                </select>


                                            </div>
                                        </div>
                                        <div class="w-2/12 bg-gray-100 p-4">
                                            <button type="button" id="relatorioButton2" class="text-white m-2 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Relatório</button>
                                            <button type="button" id="graphButton2" class="text-white m-2 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Gráfico</button>
                                            <button type="button" id="pizzaButton2" class="text-white m-2 w-24 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Pizza</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tercera fila -->
                                <div class="h-16 bg-gray-100"></div>

                                    <div id="tabla" class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    </div>

                                </div>
                            </form>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="projetos" role="tabpanel" aria-labelledby="projetos-tab">

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="administrativo" role="tabpanel" aria-labelledby="administrativo-tab">

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="comercial" role="tabpanel" aria-labelledby="comercial-tab">

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="financiero" role="tabpanel" aria-labelledby="financiero-tab">

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="usuario" role="tabpanel" aria-labelledby="usuario-tab">

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="salir" role="tabpanel" aria-labelledby="salir-tab">

                        </div>
                    </div>

                </div>
            </section>
            <footer class="bg-white dark:bg-gray-800">
                <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">

                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <div class="text-center">
                        <a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                            <img src="/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                            Agence Examen
                        </a>
                        <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2023 Examen de aplicacion
                        </span>
                        <ul class="flex justify-center mt-5 space-x-5">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100008197089457" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" /></svg>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/VictorMoraton87" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.551c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/kalimuscle" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" /></svg>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </footer>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            let month1Value, month2Value, year1Value, year2Value, list1SelectedOptions, list2Options;

            function formattedNumber (numero) {
                var numero_formateado = numero.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
                return numero_formateado;
            }

            function getMonthString(month){
                let sMonth = '';
                switch(month){
                    case 1: sMonth =  'Janeiro'; break;
                    case 2: sMonth =  'Fevereiro'; break;
                    case 3: sMonth =  'Março'; break;
                    case 4: sMonth =  'Abril'; break;
                    case 5: sMonth =  'Maio'; break;
                    case 6: sMonth =  'Junho'; break;
                    case 7: sMonth =  'Julho'; break;
                    case 8: sMonth =  'Agosto'; break;
                    case 9: sMonth =  'Setembro'; break;
                    case 10: sMonth =  'Outubro'; break;
                    case 11: sMonth =  'Novembro'; break;
                    case 12: sMonth =  'Dezembro'; break;
                }

                return sMonth;
            }

            function formatDate (month, year) {
                return `${getMonthString(month)} de ${year}`;
            }

            function useLabels(m1, m2, y1, y2) {
                let labels = []
                for(let i = y1; i <= y2; i++){

                    if(y2 == y1){
                        for(let j = m1; j <= m2; j++){
                            labels.push(getMonthString(j).substring(0, 3));
                        }
                    }
                    else{
                        if(i == y1){
                            for(let j = m1; j <= 12; j++){
                                labels.push(`${getMonthString(j).substring(0, 3)}-${y1}`);
                            }
                        }

                        if(i > y1 && i < y2){
                            for(let j = 1; j <= 12; j++){
                                labels.push(`${getMonthString(j).substring(0, 3)}-${i}`);
                            }
                        }

                        if(i == y2){
                            for(let j = 1; j <= m2; j++){
                                labels.push(`${getMonthString(j).substring(0, 3)}-${y2}`);
                            }
                        }
                    }
                }
                return labels;
            }

            function calculateMonth(m1, y1, m2, y2) {

                var d1 = new Date(y1, m1 - 1);
                var d2 = new Date(y2, m2 - 1);
                var months = (d2.getFullYear() - d1.getFullYear()) * 12;
                months -= d1.getMonth() + 1;
                months += d2.getMonth() + 1;

                return months;
            }

            //preparando los datos para dataset con rango arbitrario de tiempo que exceda los datos
            function useDataset(m1, m2, y1, y2, relatorio) {
                let dataset = [];

                if(relatorio.length == 0){
                    return;
                }

                if(relatorio.length > 0){
                    const relatorioYearStarted= relatorio[0]['year'];
                    const relatorioMonthStarted= relatorio[0]['month'];
                    const relatorioYearEnded = relatorio[relatorio.length - 1]['year'];
                    const relatorioMonthEnded = relatorio[relatorio.length - 1]['month'];

                    let m;

                    let datasetMain = [];
                    let datasetStarted = [];
                    let datasetEnded = [];

                    if(y1 < relatorioYearStarted || (y1 == relatorioYearStarted && m1 < relatorioMonthStarted)){
                        m = calculateMonth(m1, y1, relatorioMonthStarted, relatorioYearStarted);
                        datasetStarted = new Array(m).fill(0);
                    }

                    if(y2 > relatorioYearEnded || (y2 == relatorioYearEnded && m2 > relatorioMonthEnded)){
                        m = calculateMonth(relatorioMonthEnded, relatorioYearEnded, m2, y2);
                        datasetEnded = new Array(m).fill(0);
                    }

                    for(let i = 0; i < relatorio.length; i++){
                        datasetMain.push(relatorio[i]['receita_liquida']);
                    }

                    return datasetStarted.concat(datasetMain).concat(datasetEnded);
                }
            }

            //generando etiquetas del grafico segun rango de fecha: m1- mes de fecha1, m2- mes de fecha2, y1- year fecha1, y2 -year fecha 2
            function createLabels (m1, m2, y1, y2) {
                if(y2 < y1){
                    return false;
                }

                yearDiff = y2 - y1;

                if(y2 == y1){
                    if(m2 < m1){
                        return false;
                    }
                }

                return useLabels(m1, m2, y1, y2);
            }

            window.addEventListener('resize', function() {


            });


            function addButtonClick() {
                let list1, list2;

                if (window.innerWidth < 580) {
                    list1 = document.getElementById('list1-small');
                    list2 = document.getElementById('list2-small');
                } else {
                    list1 = document.getElementById('list1');
                    list2 = document.getElementById('list2');

                }


                const selectedOptions = Array.from(list1.selectedOptions);

                selectedOptions.forEach((option) => {
                    // Verificar si el elemento ya existe en el segundo select
                    const optionExists = Array.from(list2.options).some((opt) => opt.value === option.value);

                    // Si el elemento no existe, agregarlo al segundo select
                    if (!optionExists) {
                        const newOption = document.createElement('option');
                        newOption.value = option.value;
                        newOption.text = option.text;
                        list2.add(newOption);
                    }
                });
            };

            function removeButtonClick() {
                let list1, list2;

                if (window.innerWidth < 580) {
                    list1 = document.getElementById('list1-small');
                    list2 = document.getElementById('list2-small');
                } else {
                    list1 = document.getElementById('list1');
                    list2 = document.getElementById('list2');

                }

                const selectedOptions = Array.from(list2.selectedOptions);

                selectedOptions.forEach((option) => {
                    list2.remove(option.index);
                });
            };

            async function relatorioButtonClick(){

                let promises = [];

                let month1, month2, year1, year2, list2;

                if (window.innerWidth < 580) {
                    month1 = document.getElementById('month1-small').value;
                    year1 = document.getElementById('year1-small').value;
                    month2 = document.getElementById('month2-small').value;
                    year2= document.getElementById('year2-small').value;
                    list2 = document.getElementById('list2-small');

                } else {

                    month1 = document.getElementById('month1').value;
                    year1 = document.getElementById('year1').value;
                    month2 = document.getElementById('month2').value;
                    year2= document.getElementById('year2').value;
                    list2 = document.getElementById('list2');
                }

                const consultores = Array.from(list2.options);

                if(consultores.length  === 0)
                    return;

                let arrayConsultor;
                let k = 0;

                consultores.forEach((option) => {
                    if(k == 0){
                        arrayConsultor = `consultor[]=${option.value}`;
                    }
                    else{
                        arrayConsultor += `&consultor[]=${option.value}`;
                    }
                    k++;
                });

                const URL =  `http://127.0.0.1:8000/relatorio?${arrayConsultor}&m1=${month1}&y1=${year1}&m2=${month2}&y2=${year2}`;

                const res = await axios.get(URL);

                document.getElementById("tabla").replaceChildren();

                for (key in res.data) {
                    var table = document.createElement("table");
                    table.classList.add("table", "w-full", "mt-4", "border-collapse", "border","text-sm", "text-left", "bg-gray-200", "text-gray-500", "dark:text-gray-400");
                     // Crear la fila con una columna
                    var row = document.createElement("tr");
                    var cell = document.createElement("td");
                    cell.textContent = res.data[key].no_usuario;
                    cell.classList.add("border", "px-4", "py-2", "text-xs", "text-gray-700", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-400", "w-1/5");

                    row.appendChild(cell);
                    table.appendChild(row);

                    // Crear las filas restantes con 5 columnas cada una
                    const columsTitle = ['Período', 'Receita Líquida', 'Custo Fixo', 'Comissão', 'Lucro']
                    for (var i = 0; i < 1; i++) {
                        var row = document.createElement("tr");
                        for (var j = 0; j < 5; j++) {
                            var cell = document.createElement("td");
                            cell.textContent = columsTitle[j];
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5");
                            row.appendChild(cell);
                            cell.style.width = '20%';
                        }
                        table.appendChild(row);


                        var cell;
                        for (var j = 0; j < res.data[key].relatorio.length; j++) {
                            row = document.createElement("tr");

                            cell = document.createElement("td");
                            cell.textContent = formatDate(res.data[key].relatorio[j]['month'], res.data[key].relatorio[j]['year']);
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5");
                            row.appendChild(cell);
                            cell.style.width = '20%';

                            cell = document.createElement("td");
                            cell.textContent = res.data[key].relatorio[j]['receita_liquida'] >= 0 ? `R$ ${formattedNumber(res.data[key].relatorio[j]['receita_liquida'])}` : `- R$ ${formattedNumber(-1 * res.data[key].relatorio[j]['receita_liquida'])}`;
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5", res.data[key].relatorio[j]['receita_liquida'] >= 0 ? "text-gray-700" : "text-red-700");
                            row.appendChild(cell);
                            cell.style.width = '20%';

                            cell = document.createElement("td");
                            cell.textContent = res.data[key].costo >= 0 ? `R$ ${formattedNumber(res.data[key].costo)}` : `- R$ ${formattedNumber(-1 * res.data[key].costo)}`;
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5", res.data[key].costo>= 0 ? "text-gray-700" : "text-red-700");
                            row.appendChild(cell);
                            cell.style.width = '20%';

                            cell = document.createElement("td");
                            cell.textContent = res.data[key].relatorio[j]['comision'] >= 0 ? `R$ ${formattedNumber(res.data[key].relatorio[j]['comision'])}` : `- R$ ${formattedNumber(-1 * res.data[key].relatorio[j]['comision'])}`;
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5", res.data[key].relatorio[j]['comision'] >= 0 ? "text-gray-700" : "text-red-700");
                            row.appendChild(cell);
                            cell.style.width = '20%';

                            cell = document.createElement("td");
                            cell.textContent = res.data[key].relatorio[j]['lucro'] >= 0 ? `R$ ${formattedNumber(res.data[key].relatorio[j]['lucro'])}` : `- R$ ${formattedNumber(-1 * res.data[key].relatorio[j]['lucro'])}`;
                            cell.classList.add("border", "px-4", "py-2", "bg-white", "w-1/5", res.data[key].relatorio[j]['lucro'] >= 0 ? "text-gray-700" : "text-red-700");

                            row.appendChild(cell);
                            table.appendChild(row);
                            cell.style.width = '20%';
                        }

                        row = document.createElement("tr");
                        cell = document.createElement("td");
                        cell.textContent = 'Saldo';
                        cell.classList.add("border", "w-full", "px-4", "py-2", "text-xs", "text-gray-700", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-400");
                        row.appendChild(cell);
                        cell.style.width = '20%';

                        cell = document.createElement("td");
                        cell.textContent = res.data[key].saldo_receita_liquida >= 0 ? `R$ ${formattedNumber(res.data[key].saldo_receita_liquida)}` : `- R$ ${formattedNumber(-1 * res.data[key].saldo_receita_liquida)}`;
                        cell.classList.add("border", "w-full", "px-4", "py-2", "text-xs", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-700", res.data[key].saldo_receita_liquida >= 0 ? "text-gray-700" : "text-red-700");
                        row.appendChild(cell);
                        cell.style.width = '20%';

                        cell = document.createElement("td");
                        cell.textContent = res.data[key].saldo_costo >= 0 ? `R$ ${formattedNumber(res.data[key].saldo_costo)}` : `- R$ ${formattedNumber(-1 * res.data[key].saldo_costo)}`;
                        cell.classList.add("border", "w-full", "px-4", "py-2", "text-xs", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-700", res.data[key].saldo_costo >= 0 ? "text-gray-700" : "text-red-700");
                        row.appendChild(cell);
                        cell.style.width = '20%';

                        cell = document.createElement("td");
                        cell.textContent = res.data[key].saldo_comision >= 0 ? `R$ ${formattedNumber(res.data[key].saldo_comision)}` : `- R$ ${formattedNumber(-1 * res.data[key].saldo_comision)}`;
                        cell.classList.add("border", "w-full", "px-4", "py-2", "text-xs", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-700", res.data[key].saldo_comision >= 0 ? "text-gray-700" : "text-red-700");
                        row.appendChild(cell);
                        cell.style.width = '20%';

                        cell = document.createElement("td");
                        cell.textContent = res.data[key].saldo_lucro >= 0 ? `R$ ${formattedNumber(res.data[key].saldo_lucro)}` : `- R$ ${formattedNumber(-1 * res.data[key].saldo_lucro)}`;
                        cell.classList.add("border", "w-full", "px-4", "py-2", "text-xs", "bg-gray-200", "dark:bg-gray-700", "dark:text-gray-700", res.data[key].saldo_lucro>= 0 ? "text-gray-700" : "text-red-700");
                        row.appendChild(cell);
                        cell.style.width = '20%';

                        table.appendChild(row);

                    }

                    // Agregar la tabla al elemento con ID "tabla"
                    document.getElementById("tabla").appendChild(table);
                }

            };

            async function graphButtonClick() {

                let month1, month2, year1, year2, list2;

                if (window.innerWidth < 580) {
                    month1 = document.getElementById('month1-small').value;
                    year1 = document.getElementById('year1-small').value;
                    month2 = document.getElementById('month2-small').value;
                    year2= document.getElementById('year2-small').value;
                    list2 = document.getElementById('list2-small');

                } else {

                    month1 = document.getElementById('month1').value;
                    year1 = document.getElementById('year1').value;
                    month2 = document.getElementById('month2').value;
                    year2= document.getElementById('year2').value;
                    list2 = document.getElementById('list2');
                }

                const consultores = Array.from(list2.options);

                if(consultores.length  === 0)
                    return;

                let arrayConsultor;
                let k = 0;

                consultores.forEach((option) => {
                    if(k == 0){
                        arrayConsultor = `consultor[]=${option.value}`;
                    }
                    else{
                        arrayConsultor += `&consultor[]=${option.value}`;
                    }
                    k++;
                });

                const URL =  `http://127.0.0.1:8000/relatorio?${arrayConsultor}&m1=${month1}&y1=${year1}&m2=${month2}&y2=${year2}`;

                const res = await axios.get(URL);

                document.getElementById("tabla").replaceChildren();
                var canvas= document.createElement("canvas");
                canvas.classList.add("border", "w-full");
                canvas.setAttribute('id', 'canvas');
                document.getElementById("tabla").appendChild(canvas);

                let datasets = [];

                let costoFijo = 0;

                for (key in res.data) {
                    costoFijo += res.data[key].costo;

                    var R = Math.floor(Math.random() * 256);
                    var G = Math.floor(Math.random() * 256);
                    var B = Math.floor(Math.random() * 256);

                    const dataset = {data: []};
                    dataset['label'] = res.data[key].no_usuario;
                    dataset['backgroundColor'] = `rgba(${R}, ${G}, ${B}, 0.5)`;
                    dataset['borderColor'] = `rgba(${R}, ${G}, ${B}, 0.5)`;
                    dataset['borderWidth'] = 1;

                    const array = useDataset(month1, month2, year1, year2, res.data[key].relatorio);
                    dataset['data'] = array != undefined ? array : [];

                    datasets.push(dataset);
                }

                let labels = useLabels(parseInt(month1), parseInt(month2), year1, year2);

                const data = {labels, datasets};

                const size = Object.keys(res.data).length;
                const costoFijoAverage = costoFijo/size;

                var lineR = Math.floor(Math.random() * 256);
                var lineG = Math.floor(Math.random() * 256);
                var lineB = Math.floor(Math.random() * 256);

                const line = {
                    label: 'Custo Fixo Medio',
                    data: new Array(labels.length).fill(costoFijoAverage),
                    borderColor: `rgba(${lineR},${lineG},${lineB}, 0.5)`,
                    backgroundColor: `rgba(${lineR},${lineG},${lineB}, 0.5)`,
                    type: 'line',
                    order: 0
                }

                datasets.push(line);

                var options = {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Performance Receita Liquida',
                            position: 'top'
                        },
                        subtitle: {
                            display: true,
                            text: `${getMonthString(parseInt(month1))} de ${year1} a ${getMonthString(parseInt(month2))} de ${year2}`
                        },
                        legend: {
                            position: 'bottom'
                        }
                    },
                    scales: {
                        x: {
                            max: 32000
                        },
                        y: {
                            max: 32000
                        },
                    }
                };

                new Chart(
                    document.getElementById('canvas'),
                    {
                        type: 'bar',
                        data,
                        options
                    }
                );
            };

            async function pizzaButtonClick() {

                let month1, month2, year1, year2, list2;

                if (window.innerWidth < 580) {
                    month1 = document.getElementById('month1-small').value;
                    year1 = document.getElementById('year1-small').value;
                    month2 = document.getElementById('month2-small').value;
                    year2= document.getElementById('year2-small').value;
                    list2 = document.getElementById('list2-small');

                } else {

                    month1 = document.getElementById('month1').value;
                    year1 = document.getElementById('year1').value;
                    month2 = document.getElementById('month2').value;
                    year2= document.getElementById('year2').value;
                    list2 = document.getElementById('list2');
                }

                const consultores = Array.from(list2.options);

                if(consultores.length  === 0)
                    return;

                let arrayConsultor;
                let k = 0;

                consultores.forEach((option) => {
                    if(k == 0){
                        arrayConsultor = `consultor[]=${option.value}`;
                    }
                    else{
                        arrayConsultor += `&consultor[]=${option.value}`;
                    }
                    k++;
                });

                //https://test-app-laravel-agence-victor.000webhostapp.com/agence-app/public/

                const URL =  `http://127.0.0.1:8000/relatorio?${arrayConsultor}&m1=${month1}&y1=${year1}&m2=${month2}&y2=${year2}`;

                const res = await axios.get(URL);

                document.getElementById("tabla").replaceChildren();
                var canvas= document.createElement("canvas");
                canvas.classList.add("border", "w-full");
                canvas.setAttribute('id', 'canvas');
                document.getElementById("tabla").appendChild(canvas);

                let datasets = [];
                let labels = [];
                let dataset = {data: [], backgroundColor: []};

                for (key in res.data) {

                    var R = Math.floor(Math.random() * 256);
                    var G = Math.floor(Math.random() * 256);
                    var B = Math.floor(Math.random() * 256);

                    labels.push(res.data[key].no_usuario);


                    dataset['label'] = res.data[key].no_usuario;
                    dataset['backgroundColor'].push(`rgba(${R}, ${G}, ${B}, 0.5)`);

                    dataset['data'].push(res.data[key].saldo_receita_liquida);
                }

                datasets.push(dataset);

                const data = {labels, datasets};

                var options = {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Participacao na Receitas',
                            position: 'top'
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                };

                new Chart(
                    document.getElementById('canvas'),
                    {
                        type: 'pie',
                        data,
                        options
                    }
                );
            };



            addButton.addEventListener('click', addButtonClick);
            addButton2.addEventListener('click', addButtonClick);

            removeButton.addEventListener('click', removeButtonClick);
            removeButton2.addEventListener('click', removeButtonClick);

            relatorioButton.addEventListener('click', relatorioButtonClick);
            relatorioButton2.addEventListener('click', relatorioButtonClick);

            graphButton.addEventListener('click', graphButtonClick);
            graphButton2.addEventListener('click', graphButtonClick);

            pizzaButton.addEventListener('click', pizzaButtonClick);
            pizzaButton2.addEventListener('click', pizzaButtonClick);

        </script>
    </body>
</html>
