<template>
    <div class="font-bold text-center text-white" :class="class">
        <h1 :class="textClass">
            <Logo/>
            KARTERO
        </h1>
    </div>

</template>

<script>
import Logo from "@/Shared/Design/Logo.vue";

export default {
    name: "Brand",
    components: {
        Logo,
    },
    props: {
        class: String,
        textClass: String,
    }
}
</script>

<style scoped>

</style>
