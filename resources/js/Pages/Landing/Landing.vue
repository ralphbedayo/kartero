<template>
    <Layout>
        <Head title="Kartero"/>
        <div class="pt-24 gradient">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                        Hang out
                        anytime, anywhere
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                        Kartero makes it easy and fun to stay close to your favorite people.
                    </p>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-4/5 z-50" src="../../../img/hero.png"/>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import {Head} from '@inertiajs/inertia-vue3'

export default {
    name: "Landing",
    components: {
        Head,
        Layout,
    },
    props: {
        user: Object,
    },
    methods: {}
}
</script>

<style scoped>

</style>
