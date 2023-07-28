<script lang="ts" context="module">
    // import LayoutOutsideTag from "@/components/LayoutOutsideTag.svelte";
    import LayoutInsideTag from "@/components/LayoutInsideTag.svelte";

    export const layout = [LayoutInsideTag];
</script>

<script lang="ts">
    import { fade } from 'svelte/transition';
    import { inertia } from "@inertiajs/svelte";
    export let title = '';
    export let data = '';
</script>

<svelte:head>
    <title>{title}</title>
</svelte:head>

<section in:fade>
    <h1 class="text-3xl">{title}</h1>
    <div>{data}</div>
    <a href="/page/1" class="underline" use:inertia>Go to page 1</a>
</section>
