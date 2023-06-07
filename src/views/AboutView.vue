<script setup>
</script>

<script lang="ts">
export default {
    data() {
        return {
            heading2: 'text-4xl font-extrabold mb-4',
            uli: 'space-y-1 list-disc list-inside',
        };
    },
}
</script>


<template>
    <div class="p-5">
        <h2 :class="heading2">Summary</h2>
        <p class="mb-3">A tool for recording ideas. Dates attached, archiving, linking to other ideas, tagging.</p>
        <p class="mb-3">Fields: summary, full details, features.</p>
    </div>
    <div class="p-5">
        <h2 :class="heading2">Features</h2>
        <ul :class="uli">
            <li>Sorting.</li>
            <li>Dates - sort by date, rank by date - anything ancient moves to the bottom.</li>
            <li>Archiving of ideas.</li>
            <li>Active ideas.</li>
            <li>General Categories.</li>
            <li>Tagging.</li>
            <li>Linking to other ideas.</li>
        </ul>
    </div>
    <div class="p-5">
        <h2 :class="heading2">Tooling</h2>
        <ul :class="uli">
            <li>Vue</li>
            <li>Markdown</li>
            <li>TypeScript</li>
            <li>Backend??</li>
        </ul>
    </div>
</template>
