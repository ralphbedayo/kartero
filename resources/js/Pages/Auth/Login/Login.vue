<template>
    <div>
        <GradientBackgroundHalf/>
        <div class="pt-24">
            <div class="flex justify-center">
                <div class="basis-1/4 flex-col z-50">
                    <div class="mb-6 font-bold text-center text-white">
                        <h1 class="text-3xl">
                            <Logo/>
                            KARTERO
                        </h1>
                    </div>
                    <Card class="bg-white">
                        <div class="mb-10">
                            <h1 class="text-4xl text-black text-center">Log In</h1>
                        </div>
                        <div>
                            <form action="/login" method="post" @submit.prevent="login">
                                <div class="mb-6">
                                    <label for="user-email"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                    <input type="email" id="user-email"
                                           class="bg-gray-25 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           v-model="form.email"
                                           placeholder="Your email" required>
                                    <div v-if="form.errors.email" class="form-error">{{ form.errors.email }}</div>
                                </div>
                                <div class="mb-6">
                                    <label for="user-password"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                                    <input type="password" id="user-password"
                                           class="bg-gray-25 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           v-model="form.password"
                                           placeholder="Your secure password" required>
                                    <div v-if="form.errors.password" class="form-error">{{ form.errors.password }}</div>
                                </div>

                                <div class="mb-10 flex justify-center">
                                    <label
                                        class="items-center cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="remember">
                                        <input id="remember" v-model="form.remember" class="mr-1" type="checkbox"/>
                                        <span class="text-sm">Remember Me</span>
                                    </label>
                                </div>

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
import {Link} from '@inertiajs/inertia-vue3'
import Card from "@/Shared/Card";
import Logo from "@/Shared/Logo";
import LoadingButton from "@/Shared/LoadingButton";
import GradientBackgroundHalf from "@/Shared/GradientBackgroundHalf";

export default {
    name: "Login",
    components: {
        Card,
        Link,
        Logo,
        LoadingButton,
        GradientBackgroundHalf
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
