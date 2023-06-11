<script lang="ts">
import { RouterLink, RouterView } from 'vue-router'

export const heading2 = 'text-4xl font-extrabold mb-4';
export const uli = 'space-y-1 list-disc list-inside';
</script>

<!-- <script setup>
</script> -->

<template>
    <header>
        <div class="wrapper">
            <nav>
                <RouterLink to="/">Home</RouterLink>
                <RouterLink to="/about">About</RouterLink>
            </nav>
        </div>
    </header>
    <main>
        <RouterView />
    </main>
</template>