<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { links } from '@/Shared/LeftNav'
import { computed, ref } from 'vue'

const darkMode = ref(true)
const modeIcon = computed(() => (darkMode.value ? 'bi-sun' : 'bi-moon'))
const handleColourModeChange = () => {
  darkMode.value = !darkMode.value
  const bodyElement = document.querySelector('body') as HTMLBodyElement
  bodyElement.dataset.bsTheme = darkMode.value ? 'dark' : 'light'
}
</script>

<template>
  <!-- HEADER -->
  <header class="navbar flex-md-nowrap shadow px-3">
    <div>
      <Link class="navbar-brand col-md-3 col-lg-2 fs-4" href="/">
        <i class="bi bi-lightbulb-fill"></i>
        Miniature Eureka
      </Link>
    </div>
    <div>
      <button type="button" class="btn btn-link">
        <i class="bi" :class="modeIcon" @click="handleColourModeChange()"></i>
      </button>
    </div>
  </header>

  <!-- MAIN BODY -->
  <div class="container-fluid page-body">
    <div class="row">
      <!-- LEFT SIDEBAR -->
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div
          class="offcanvas-md offcanvas-end bg-body-tertiary"
          tabindex="-1"
          id="sidebarMenu"
          aria-labelledby="sidebarMenuLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Miniature Eureka</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              data-bs-target="#sidebarMenu"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav nav-pills flex-column px-2">
              <li v-for="item in links" :key="item.link" class="nav-item">
                <Link
                  :href="item.link"
                  class="nav-link"
                  :class="{
                    active: item.text === $page.component
                  }"
                  >{{ item.text }}</Link
                >
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

      <!-- RIGHT MAIN SECTION -->
      <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 d-flex flex-column">
        <main class="flex-grow-1">
          <slot />
        </main>

        <!-- FOOTER -->
        <footer>&copy; Gareth Palmer {{ new Date().getFullYear() }}</footer>
      </section>
    </div>
  </div>
</template>

<style scoped>
.sidebar.border.border-right.col-md-3.col-lg-2.p-0.bg-body-tertiary {
  min-height: calc(100vh - 35px);
}
</style>
