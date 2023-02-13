@extends('layout')
@section('content')
    <div class="text-gray-600 w-full my-5 p-5 body-font bg-gray-50 h-min-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="container px-5 mx-auto w-full">
                <h2 class="text-gray-900 text-lg font-bold w-full py-4">¿Que es docker?</h2>
                Docker es una plataforma de software que le permite crear, probar e implementar aplicaciones rápidamente
            </div>
        </div>
    </div>
    <div class="text-gray-600 w-full my-5 p-5 body-font bg-gray-50 h-min-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="container px-5 mx-auto w-full">
               <div class="flex">
                   <div>
                       <h2 class="text-gray-900 text-lg font-bold w-full py-4">¿Cómo funciona Docker?</h2>
                       Docker le proporciona una manera estándar de ejecutar su código. Docker es un sistema operativo para contenedores. De manera similar a cómo una máquina virtual virtualiza (elimina la necesidad de administrar directamente) el hardware del servidor, los contenedores virtualizan el sistema operativo de un servidor. Docker se instala en cada servidor y proporciona comandos sencillos que puede utilizar para crear, iniciar o detener contenedores.
                   </div>
                   <img src="https://d1.awsstatic.com/Developer%20Marketing/containers/monolith_2-VM-vs-Containers.78f841efba175556d82f64d1779eb8b725de398d.png" />
               </div>
            </div>
        </div>
    </div>
    <div class="text-gray-600 w-full my-5 p-5 body-font bg-gray-50 h-min-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="container px-5 mx-auto w-full">
                <h2 class="text-gray-900 text-lg font-bold w-full py-4">¿Qué es EC2?</h2>
                Amazon Elastic Compute Cloud (Amazon EC2) proporciona capacidad de computación escalable en la nube de Amazon Web Services (AWS). El uso de Amazon EC2 elimina la necesidad de invertir inicialmente en hardware, de manera que puede desarrollar e implementar aplicaciones en menos tiempo. Puede usar Amazon EC2 para lanzar tantos servidores virtuales como necesite, configurar la seguridad y las redes, y administrar el almacenamiento. Amazon EC2 le permite escalar hacia arriba o hacia abajo para controlar los cambios en los requisitos o los picos de popularidad, con lo que se reduce la necesidad de prever el tráfico.            </div>
        </div>
    </div>
    <div class="text-gray-600 w-full my-5 pb-28 p-5 body-font bg-gray-50 h-min-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="container px-5 mx-auto w-full">
                       <h2 class="text-gray-900 text-lg font-bold w-full py-4">¿Qué es ECS?</h2>
                       Amazon ECS es un servicio de orquestación de contenedores completamente administrado que le permite implementar, administrar y escalar aplicaciones en contenedores de manera sencilla.                   </div>
            </div>
    </div>
@endsection
