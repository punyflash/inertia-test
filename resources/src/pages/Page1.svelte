<script lang="ts" context="module">
    // import LayoutInsideTag from "@/components/LayoutInsideTag.svelte";
    import LayoutOutsideTag from "@/components/LayoutOutsideTag.svelte";

    export const layout = [LayoutOutsideTag];
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
    <a href="/page/2" class="underline" use:inertia>Go to page 2</a>
</section>
