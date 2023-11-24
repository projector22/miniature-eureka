<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

const links = [
  {
    text: 'Home',
    link: '/'
  },
  {
    text: 'About',
    link: '/about'
  },
  {
    text: 'Playground',
    link: '/playground'
  }
]
</script>

<template>
  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <i class="bi bi-lightbulb-fill"></i>
    <Link class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">
      Miniature Eureka
    </Link>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button
          class="nav-link px-3 text-white"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSearch"
          aria-controls="navbarSearch"
          aria-expanded="false"
          aria-label="Toggle search"
        >
          <svg class="bi">
            <use xlink:href="#search" />
          </svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button
          class="nav-link px-3 text-white"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input
        class="form-control w-100 rounded-0 border-0"
        type="text"
        placeholder="Search"
        aria-label="Search"
      />
    </div>
  </header>
  <div class="container-fluid page-body">
    <div class="row">
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
      <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 d-flex flex-column">
        <main class="flex-grow-1">
          <slot />
        </main>
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
