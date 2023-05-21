<template>
    <main class="h-screen gradient">
        <div class="leading-normal tracking-normal text-white">
            <header>
                <navbar/>
            </header>
            <article>
                <slot />
            </article>
        </div>
    </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Navbar from "./Navbar.vue";

export default {
    name: "Layout",
    components: {
        Navbar,
        Link,
    }
}
</script>
