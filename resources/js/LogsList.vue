<template>
    <div v-if="logs.length">
        <div class="flex flex-wrap -m-4 text-center">
            <div v-for="log in logs" class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                <div class=" flex flex-col p-4 rounded-lg bg-white shadow-indigo-50 shadow-md">
                <div class="flex items-center text-left justify-between">
                    <div>
                        <h2 class="text-gray-900 text-lg font-bold">CC. {{log.document}}</h2>
                        <h3 class="mt-2 text-xl font-bold text-cyan-500">{{log.name}}</h3>
                        <h4 class="text-sm font-semibold text-gray-400">{{ log.created_at }}</h4>
                    </div>
                    <div
                        class="bg-gradient-to-tr from-cyan-500 to-cyan-400 w-32 h-32  rounded-full border-white  border-dashed border-2  flex justify-center items-center ">
                        <div>
                            <h1 class="text-white text-2xl">Basic</h1>
                        </div>
                    </div>
                </div>
                    <div tabindex="0" class="collapse">
                        <div class="cursor-pointer w-1/2 text-sm p-2 bg-cyan-400 text-white rounded-lg  tracking-wider hover:bg-cyan-500 outline-none">
                            Respuesta
                        </div>
                        <div class="collapse-content text-start pt-2">
                            <p class="font-bold text-cyan-500"> Que es ECS? </p>
                            <p>{{ log.answer }}</p>
                            <p class="font-bold text-cyan-500 pt-4"> Que aprendiste del workshop? </p>
                            <p>{{ log.commentaries }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div v-else>
        Aún no hay participantes
    </div>
</template>

<script setup>
import {ref} from "vue";

let logs = ref({});

function calculeLogs() {
    axios.get('/api/logs').then( (response) => {
        logs.value = response.data.logs
    })
}

calculeLogs()


window.Echo.channel('workshop-cloud')
    .listen('.log-created', (e) => {
        calculeLogs()
    });
</script>
