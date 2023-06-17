<script setup lang="ts">

const props = defineProps({
    Type: { type: String, required: true },
    Width: String
})

let inputClass = "rounded-md p-2 mr-3 flex-grow shadow-sm shadow-gray-300"
if (props.Width === undefined) {
    inputClass += ' w-full';
} else {
    inputClass += ` ${props.Width}`
}

</script>

<template>
    <template v-if="Type === 'textarea'">
        <textarea :class="inputClass"></textarea>
    </template>
    <template v-else>
        <input :type="Type" :class="inputClass">
    </template>
</template>


