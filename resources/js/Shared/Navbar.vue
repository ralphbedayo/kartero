<template>
    <nav id="header" class="fixed w-full z-150 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                   href="#">
                    <Logo/>
                    KARTERO
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" @click="toggleNavMenu"
                        class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div
                class="w-full flex-grow lg:flex lg:items-center lg:w-auto mt-2 lg:mt-0 bg-white lg:bg-transparent p-4 lg:p-0 z-20"
                :class="isHidden? 'hidden' : ''"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center lg:text-white text-black">
                    <li v-for="item in navigation" class="mr-3">
                        <a v-if="item.current"
                           class="inline-block py-2 px-4 font-bold no-underline"
                           :href="item.href">
                            {{ item.name }}
                        </a>
                        <a v-else
                           class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                           :href="item.href">
                            {{ item.name }}
                        </a>
                    </li>
                </ul>
                <button
                    id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                    @click="relocateToLogin"
                >
                    Login
                </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0"/>
    </nav>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
import Logo from "@/Shared/Design/Logo.vue";

//@todo update this later
const navigation = [
    {name: 'Dashboard', href: '#', current: true},
    {name: 'Team', href: '#', current: false},
    {name: 'Projects', href: '#', current: false},
    {name: 'Calendar', href: '#', current: false},
]

export default {
    name: "Navbar",
    components: {
        Logo
    },
    methods: {
        toggleNavMenu() {
            this.isHidden = !this.isHidden;
        },
        relocateToLogin() {
            //@todo fix this
            Inertia.get('/login');
        }
    },
    data() {
        return {
            navigation: navigation,
            isHidden: true,
        }
    },
}
</script>

<style scoped>

</style>
