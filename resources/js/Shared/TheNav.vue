<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
const links = [
    {
        text: 'Home',
        link: '/',
    },
    {
        text: 'About',
        link: '/about',
    },
    {
        text: 'Playground',
        link: '/playground',
    },
]

</script>

<template>
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">Miniature Eureka</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                <ul class="nav nav-pills flex-column px-2">
                    <li v-for="item in links" :key="item.link" class="nav-item">
                        <Link :href="item.link" class="nav-link" :class="{ active: item.text === $page.component}">{{ item.text }}</Link>
                    </li>
                </ul>
                <!-- <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li> -->
            </div>
        </div>
    </div>
</template>

<style scoped>

.sidebar.border.border-right.col-md-3.col-lg-2.p-0.bg-body-tertiary {
    min-height: calc(100vh - 35px);
}

</style>