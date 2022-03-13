<template>
    <div class="shadow p-5 rounded rounded-lg bg-white" :class="class">
        <slot/>
    </div>

</template>

<script>
export default {
    name: "Card",
    props: {
        class: String
    }
}
</script>

<style scoped>

</style>
