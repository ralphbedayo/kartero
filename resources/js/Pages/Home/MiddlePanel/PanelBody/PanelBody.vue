<template>
    <!--            body (messages)-->
    <div class="flex-grow">
        Body
    </div>

    <div class="max-h-fit border-t justify-end py-3">
        <Footer v-model:message="userMessage"/>
    </div>
</template>

<script>
import Footer from "./Footer/Footer";

export default {
    name: "PanelBody",
    data() {
        return {
            userMessage: ''
        }
    },
    components: {
        // Components
        Footer
    }
}
</script>

<style scoped>

</style>
