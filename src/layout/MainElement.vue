<script setup lang="ts">
import CenterBody from './CenterBody.vue';
import LeftNav from './nav/LeftNav.vue';
import RightNav from './nav/RightNav.vue';


</script>

<template>
    <main class="flex-grow flex flex-row">
        <LeftNav />
        <CenterBody />
        <RightNav />
    </main>
</template>