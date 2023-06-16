<script setup lang="ts"></script>

<template>
    <header class="h-20 bg-blue-400 shadow-md shadow-gray-950 text-white">
        <div class="grid grid-cols-3 w-full">

            <div class="p-3">
                <h1 class="font-bold text-2xl">Eureka</h1>
                <small>Ideas Management</small>
            </div>

            <div class="text-black flex items-center justify-center">
                <input type="search" placeholder="Search" name="" id="" class="p-2 rounded-xl w-full shadow-sm shadow-gray-950">
            </div>

            <div class="flex flex-row-reverse items-center p-5">
                <a href="javascript:void(0)">
                    <svg-icon type="mdi" :path="path"></svg-icon>
                </a>

                <!-- <nav> -->
                <!-- <ul> -->
                <!-- <li><a href="/settings">Settings</a></li> -->
                <!-- <li><a href="/account">Account</a></li> -->
                <!-- <li><a href="/logout">Logout</a></li> -->
                <!-- </ul> -->
                <!-- </nav> -->
            </div>

        </div>
    </header>
</template>



  
<script lang="ts">
import SvgIcon from '@jamescoyle/vue-icon';
import { mdiCogOutline } from '@mdi/js';

export default {
    name: "my-component",
    components: {
        SvgIcon
    },
    data() {
        return {
            path: mdiCogOutline,
        }
    }
}
</script>