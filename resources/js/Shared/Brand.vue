<template>
    <div class="font-bold text-center text-white" :class="class">
        <h1 class="text-3xl">
            <Logo/>
            KARTERO
        </h1>
    </div>

</template>

<script>
import Logo from "@/Shared/Design/Logo";

export default {
    name: "Brand",
    components: {
        Logo,
    },
    props: {
        class: String
    }
}
</script>

<style scoped>

</style>
