<script setup lang="ts">
  import AddButton from '@/components/buttons/AddButton.vue';



  const basicButtonClick = () =>  {
    console.log("Clicked here")
  }
</script>

<template>
  <h2 class="text-3xl mb-1">Title</h2>
  <input type="text" name="" id="" class="
    rounded-md
    p-2
    mr-3
    flex-grow
    shadow-sm
    shadow-gray-300
    w-full
    ">
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Summary</h2>
  <textarea name="" id="" rows="10" class="
    w-full
    rounded-md
    p-2
    shadow-sm
    shadow-gray-300
    "></textarea>
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Features</h2>
  <div class="
    w-full
    flex
    ">
    <input type="text" name="" id="" class="
      rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      ">
      <AddButton @click="basicButtonClick"/>
  </div>

  <hr class="my-5">

  <h2 class="text-3xl mb-1">Tooling</h2>
  <div class="
    w-full
    flex
    ">
    <input type="text" name="" id="" class="
      rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      ">
      <AddButton @click="basicButtonClick"/>
  </div>
  <hr class="my-5">

  <h2 class="text-3xl mb-1">Links</h2>
  <div class="
    w-full
    flex
    ">
    <input type="text" name="" id="" class="
      rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      ">
      <AddButton @click="basicButtonClick"/>
  </div>
  <hr class="my-5">

  <h2 class="text-3xl mb-1">SWOT</h2>
  <div class="
    grid
    grid-cols-2
    grid-rows-2
    ">
    <div class="p-2">
      <h3 class="text-2xl">Strengths</h3>
      <textarea name="" id="" rows="10" class="
            rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      w-full
      "></textarea>
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Weaknesses</h3>
      <textarea name="" id="" rows="10" class="
              rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      w-full
        "></textarea>
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Opportunities</h3>
      <textarea name="" id="" rows="10" class="
              rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      w-full
        "></textarea>
    </div>
    <div class="p-2">
      <h3 class="text-2xl">Threats</h3>
      <textarea name="" id="" rows="10" class="
              rounded-md
      p-2
      mr-3
      flex-grow
      shadow-sm
      shadow-gray-300
      w-full
        "></textarea>
    </div>
  </div>
</template>
  
