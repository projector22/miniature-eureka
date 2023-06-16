<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>

<template>
    <aside class="flex-1 p-4">
        <nav>
            <ul>
                <li><RouterLink to="/">Home</RouterLink></li>
                <li><RouterLink to="/add">Add</RouterLink></li>
                <li><RouterLink to="/about">About</RouterLink></li>
            </ul>
        </nav>
    </aside>
</template>