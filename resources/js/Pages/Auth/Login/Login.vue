<template>
    <div>
        <Head>
            <title>Login</title>
        </Head>
        <GradientBackgroundHalf/>
        <div class="pt-24">
            <div class="flex justify-center">
                <div class="basis-1/4 flex-col z-50">
                    <Brand class="mb-6"/>
                    <Card class="bg-white">
                        <div class="mb-10">
                            <h1 class="text-4xl text-black text-center">Log In</h1>
                        </div>
                        <div>
                            <form action="#" method="post" @submit.prevent="login">
                                <TextInput class="mb-6" label="Email" id="user-email" placeholder="Your email"
                                           v-model="form.email" :error="form.errors.email" type="email" required/>

                                <TextInput class="mb-6" label="Password" id="user-password" placeholder="Your secure password"
                                           v-model="form.password" :error="form.errors.password" type="password" required/>

                                <div class="flex justify-center">
                                    <loading-button :loading="form.processing"
                                                    class="bg-blue-800 w-3/4 p-2 rounded-md text-white text-center"
                                                    type="submit"><strong>Login</strong></loading-button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-10 w-full flex justify-center text-gray-500">
                            Don't have an account yet?
                            <Link href="/register" class="ml-2 underline text-emerald-500 visited:text-purple-600">
                                Sign-up here
                            </Link>
                        </div>
                    </Card>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3'
import Brand from "@/Shared/Brand";
import Card from "@/Shared/Design/Card";
import Logo from "@/Shared/Design/Logo";
import LoadingButton from "@/Shared/Utils/LoadingButton";
import GradientBackgroundHalf from "@/Shared/Design/GradientBackgroundHalf";
import TextInput from "@/Shared/Inputs/TextInput";

export default {
    name: "Login",
    components: {
        Brand,
        Card,
        Link,
        Logo,
        LoadingButton,
        GradientBackgroundHalf,
        Head,
        TextInput
    },
    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false,
            })
        }
    },
    methods: {
        login() {
            this.form.post('/login')
        },
    }

}
</script>

<style scoped>

</style>
