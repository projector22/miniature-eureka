<script setup lang="ts">
import { router } from '@inertiajs/vue3'

const props = defineProps({
  route: {
    type: String,
    required: true,
    readonly: true
  },

  form: {
    type: Object,
    required: true
  },

  method: {
    type: String,
    default: 'post',
    validator: (meth: string) =>
      ['get', 'post', 'put', 'delete', 'patch'].includes(meth.toLowerCase())
  }
})

function submitForm() {
  switch (props.method) {
    case 'get':
      router.get(props.route, props.form)
      break
    case 'put':
      router.put(props.route, props.form)
      break
    case 'delete':
      router.delete(props.route, props.form)
      break
    case 'patch':
      router.patch(props.route, props.form)
      break
    default: // post
      router.post(props.route, props.form)
  }
}
</script>

<template>
  <form @submit.prevent="submitForm">
    <slot></slot>
  </form>
</template>

<style scoped></style>
