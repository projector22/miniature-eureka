<script setup lang="ts">
import Layout from '@/Shared/TheLayout.vue'
import SiteLogo from '@/Shared/SiteLogo.vue'
</script>

<template>
  <Layout>
    <div class="form-signin w-50 m-auto mt-5">
      <form>
        <div class="text-center">
            <SiteLogo class="h1" />
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="User Account Name"
          />
          <label for="floatingInput">User Account</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="flexCheckDefault"
          />
          <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      </form>
    </div>
  </Layout>
</template>

<style scoped></style>
