<script setup lang="ts">
import TopBar from '@/Shared/TopBar.vue'
import Nav from '@/Shared/TheNav.vue'
import Footer from '@/Shared/TheFooter.vue'
</script>

<template>
    <TopBar />
    <div class="container-fluid page-body">
        <div class="row">
            <Nav />
            <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 d-flex flex-column">
                <main class="flex-grow-1">
                    <slot />
                </main>
                <Footer />
            </section>
        </div>
    </div>
</template>

<style scoped></style>