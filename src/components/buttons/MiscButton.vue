<script setup lang="ts">

const props = defineProps({
  content: { type: String, required: true },
  colour: String,
})

</script>

<template>
  <button :class="colour" class="
      text-white
      rounded-md
      p-2
      shadow-sm
      shadow-gray-300
      ">
    {{ content }}
  </button>
</template>
