<template>
    <div class="px-2">
        <div>
            <div class="flex flex-row justify-between">
                <div>
                    <div>
                        <div>
                            <img class="object-scale-down h-10 w-10 rounded-full" src="@img/user-splash.webp"
                                 alt="user splash here">
                        </div>
                    </div>
                </div>
                <div>
                    <Brand class="text-black" text-class="text-2xl"/>
                </div>
                <div>
                    Burger
                </div>
                <!--        navbar-->
            </div>
            <div class="mt-2 flex justify-center">
        <!--        search-->
                <div class="w-5/6">
                    <div class="input-group relative flex flex-wrap items-stretch w-full">
                        <input type="search"
                               class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    </div>
                </div>
            </div>
            <div class="mt-4 flex flex-col">
                <!-- chat list-->
                <div class="w-full flex flex-row py-2 rounded-lg hover:bg-gray-200 cursor-pointer" v-for="n in 5">
                    <div class="basis-1/6">
                        <div class="flex justify-center">
                            <img class="object-scale-down h-10 w-10 rounded-full" src="@img/user-splash.webp"
                                 alt="user splash here">
                        </div>
                    </div>
                    <div class="basis-5/6">
                        <div>
                            <h3 class="font-semibold text-black">
                                Subject
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-500">message message message</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
import Brand from "@/Shared/Brand";

export default {
    name: "Left",
    components: {
        Brand
    }
}
</script>

<style scoped>

</style>
