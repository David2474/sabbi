<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Sabbi</title>
</head>
<body class="bg-gray-100">
    <x-navegation/>

    <section class="mx-auto border w-5/6 mt-8">
        <div class="flex justify-between mb-6">
            <p class="text-blue-900  text-2xl">Perfil del alumno</p>
            <button class="bg-blue-800 hover:bg-blue-900 text-white h-[35px] w-32 rounded-2xl">Agregar</button>
        </div>

        <div class="flex flex-wrap rounded-xl">

            <div class="w-3/12 h-5/6 border  bg-white rounded-xl">

                <div class="h-2/5 flex flex-col items-center border-b">
                    <img 
                        class=" h-2/3 w-1/2"
                        src="https://img.freepik.com/vector-premium/icono-perfil-humano-ilustracion-vectorial-genero_276184-158.jpg" alt="">
                    <p>David gutierrez</p>
                    <p>Licenciatura</p>
                    <p>La asuncion</p>
                </div>


                <div class="h-3/5 flex flex-col items-center  mt-5">

                    <div class=" w-11/12 hover:bg-blue-900 mb-3 text-gray-700 rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Informacion</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Familiares</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Comunicacion</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Documentacion</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Inscripciones</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Pagos</p>
                    </div>

                    <div class="w-11/12 hover:bg-blue-900 mb-3 text-gray-700  rounded-md hover:text-white">
                        <!-- <p>icono</p> -->
                        <p>Seguimiento</p>
                    </div>
                    
                </div>

            </div>


            <section class="border border-red-400 flex flex-col justify-center mx-8 w-2/6">

                <div class="flex flex-col justify-center mb-5 mx-auto items-center w-11/12">
                    <p class="self-start font-bold my-3">Ana Luz Aguilar Pecina</p>
                    <div class="bg-white w-full rounded-md">
                        <!-- <p>icon</p> -->
                        <div class="p-2">
                            <p>Acta de nacimiento</p>
                            <p>David cuevas | hace 15 días</p>
                            <span>124 kb</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center mx-auto items-center w-11/12">
                    <p class="self-start font-bold my-3">Ana Luz Aguilar Pecina</p>
                    <div class="bg-white w-full rounded-md">
                        <!-- <p>icon</p> -->
                        <div class="p-2">
                            <p>Acta de nacimiento</p>
                            <p>David cuevas | hace 15 días</p>
                            <span>124 kb</span>
                        </div>
                    </div>
                </div>

            </section>


            <section class=" border border-red-400 w-2/6 flex flex-coljustify-center">

            </section>
        </div>
    </section>



</body>
</html>