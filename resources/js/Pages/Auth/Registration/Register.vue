<template>
    <div>
        <Head>
            <title>Sign Up</title>
        </Head>
        <GradientBackgroundHalf/>
        <div class="pt-12">
            <div class="flex justify-center">
                <div class="basis-1/4 flex-col z-50">
                    <Brand class="mb-6" text-class="text-3xl"/>
                    <Card class="bg-white">
                        <div class="mb-5">
                            <h1 class="text-4xl text-black text-center">Create your account</h1>
                        </div>

                        <div class="mb-10 w-full flex justify-center text-gray-500">
                            Already have an account?
                            <Link href="/login" class="ml-2 underline text-emerald-500 visited:text-purple-600">
                                Log-in here
                            </Link>
                        </div>
                        <div>
                            <form action="#" @submit.prevent="register">
                                <TextInput class="mb-6" label="First name" id="first_name" placeholder="Your first name"
                                           v-model="form.first_name" :error="form.errors.first_name" maxlength="24"
                                           required/>
                                <TextInput class="mb-6" label="Last name" id="last_name" placeholder="Your last name"
                                           v-model="form.last_name" :error="form.errors.last_name" maxlength="24"
                                           required/>
                                <TextInput class="mb-9" label="Email Address" placeholder="Your email address"
                                           v-model="form.email" :error="form.errors.email" maxlength="48" type="email"
                                           required/>

                                <TextInput class="mb-6" label="Password" placeholder="Your secure password"
                                           v-model="form.password" :error="form.errors.password" maxlength="16"
                                           type="password"
                                           required/>

                                <TextInput class="mb-10" label="Password Confirmation"
                                           placeholder="Confirm password by re-typing here"
                                           v-model="form.password_confirmation"
                                           :error="form.errors.password_confirmation"
                                           maxlength="16"
                                           type="password" required/>

                                <div class="flex justify-center">
                                    <loading-button :loading="form.processing"
                                                    class="bg-green-700 w-3/4 p-2 rounded-md text-white text-center"
                                                    type="submit"><strong>Create</strong></loading-button>
                                </div>
                            </form>
                        </div>
                    </Card>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Head,Link} from "@inertiajs/inertia-vue3";

import Brand from "@/Shared/Brand";
import Card from "@/Shared/Design/Card";
import GradientBackgroundHalf from "@/Shared/Design/GradientBackgroundHalf";
import LoadingButton from "@/Shared/Utils/LoadingButton";
import TextInput from "@/Shared/Inputs/TextInput";

export default {
    name: "Register",
    components: {
        Brand,
        Card,
        GradientBackgroundHalf,
        Head,
        Link,
        LoadingButton,
        TextInput,
    },
    data() {
        return {
            form: this.$inertia.form({
                first_name: '',
                last_name: '',
                email: '',
                password: '',
                password_confirmation: '',
            })
        }
    },
    methods: {
        register() {
            this.form.post('/register');
        }
    }
}
</script>

<style scoped>

</style>
