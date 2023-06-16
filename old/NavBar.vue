<script setup lang="ts">
import { RouterLink } from 'vue-router'
import { RouterView } from 'vue-router'

// import { nav_btn } from '../../App.vue'
</script>

<template>
    <h1>CHEESE</h1>
    <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/add">Add</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <!-- <RouterLink to="/" :class="nav_btn">Home</RouterLink>
        <RouterLink to="/add" :class="nav_btn">Add</RouterLink>
        <RouterLink to="/about" :class="nav_btn">About</RouterLink> -->
    </nav>
</template>