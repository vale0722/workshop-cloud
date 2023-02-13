@extends('layout')
@section('content')
    <div class="text-gray-600 body-font bg-gray-50 h-full flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center p-20">
            <div class="container mx-auto">
                    <div class="container">
                        <div class="flex lg:justify-between -mx-4">
                            <div class="w-full pl-4 pr-6">
                                <h2 class="text-gray-900 text-lg font-bold w-full py-4">Formulario:</h2>
                                <div class="max-w-[570px] mb-12 lg:mb-0">
                                    <h2
                                        class="
                                          text-dark
                                          mb-6
                                          uppercase
                                          font-bold
                                          text-[32px]
                                          sm:text-[40px]
                                          lg:text-[36px]
                                          xl:text-[40px]
                                          "
                                    >
                                        ¡Genial, estás interactuando con la nube!
                                    </h2>
                                    <p class="text-base text-body-color leading-relaxed mb-9">
                                        Ahora responde las siguientes preguntas:
                                    </p>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                                    <form method="POST" action="{{ route('logs.store') }}">
                                        @csrf
                                        <div class="mb-6">
                                            <input
                                                required
                                                max="72"
                                                name="name"
                                                type="text"
                                                placeholder="Ingresa tu nombre"
                                                class="input w-full input-bordered"
                                            />
                                        </div>
                                        <div class="mb-6">
                                            <input
                                                required
                                                max="20"
                                                name="document"
                                                type="text"
                                                placeholder="Ingresa tu documento de identidad"
                                                class="input w-full input-bordered"
                                            />
                                        </div>
                                        <div class="mb-6">
                                            <textarea
                                                required
                                                maxlength="225"
                                                name="answer"
                                                type="text"
                                                placeholder="Define con tus propias palabras que es ECS"
                                                class="w-full textarea textarea-bordered"></textarea>
                                        </div>
                                        <div class="mb-6">
                                            <textarea
                                                maxlength="225"
                                                required
                                                name="commentaries"
                                                type="text"
                                                placeholder="Que aprendiste de este workshop?"
                                                class="w-full textarea textarea-bordered"></textarea>
                                        </div>
                                        <button type="submit" class="btn w-full">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

