<script setup lang="ts">
import Layout from '@/Shared/TheLayout.vue'
import { ref } from 'vue'
import { VueShowdown } from 'vue-showdown'
import Form from '@/components/AForm.vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  mainText: ''
})

const inputListen = () => {
  const el = document.querySelector('#idea-md-raw') as HTMLInputElement
  el.style.height = 'auto'
  el.style.height = `${el.scrollHeight + 2}px`
}
</script>

<template>
  <Layout>
    <h1 class="text-center">Playground</h1>
    <div class="row">
      <div class="col-md-6">
        <Form route="/save-idea" :form="{}">
          <button type="submit" class="btn btn-primary mb-2" :disabled="form.processing">
            Save
          </button>
          <div class="form-floating">
            <textarea
              placeholder="Enter your idea here"
              id="idea-md-raw"
              class="form-control"
              style="min-height: 80vh"
              v-model="form.mainText"
              @input="inputListen"
            ></textarea>
            <label for="idea-md-raw">Your Idea:</label>
          </div>
        </Form>
      </div>
      <div class="col-md-6">
        <VueShowdown :markdown="form.mainText" flavor="github" class="mt-5" />
      </div>
    </div>
  </Layout>
</template>

<style scoped></style>
