<script setup lang="ts">
import AddButton from '@/components/buttons/AddButton.vue';
import TextInput from '@/components/inputs/TextInput.vue';
import TextAreaInput from '@/components/inputs/TextAreaInput.vue';


const basicButtonClick = () => {
  console.log("Clicked here")
}
</script>

<template>
  <h2 class="text-3xl mb-1">Title</h2>
  <TextInput />
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Summary</h2>
  <TextAreaInput />
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Features</h2>
  <div class="w-full flex">
    <TextInput />
    <AddButton @click="(basicButtonClick)" />
  </div>

  <hr class="my-5">

  <h2 class="text-3xl mb-1">Tooling</h2>
  <div class="w-full flex">
    <TextInput />
    <AddButton @click="basicButtonClick" />
  </div>
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Links</h2>
  <div class="w-full flex">
    <TextInput />
    <AddButton @click="basicButtonClick" />
  </div>
  <hr class="my-5">

  <h2 class="text-3xl mb-1">SWOT</h2>
  <div class="grid grid-cols-2 grid-rows-2">
    <div class="p-2">
      <h3 class="text-2xl">Strengths</h3>
      <TextAreaInput />
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Weaknesses</h3>
      <TextAreaInput />
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Opportunities</h3>
      <TextAreaInput />
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Threats</h3>
      <TextAreaInput />
    </div>
  </div>
</template>
  
