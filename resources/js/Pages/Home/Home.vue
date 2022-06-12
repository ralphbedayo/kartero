<template>
    <main class="flex flex-row w-full h-screen">
        <div class="basis-1/5 pt-2 min-h-full" style="">
            <Left/>
        </div>
        <div class="basis-3/5 middle">
            <div
                class="pt-2 box-border border-l border-r max-w-full border-gray-300 min-h-full max-h-full h-screen overflow-x-auto ">
                <Middle/>
            </div>
        </div>
        <div class="basis-1/5 min-h-full" style="">
            <div class="pt-2">

                <Right/>
            </div>
        </div>
    </main>

</template>

<script>
import Left from "@/Pages/Home/LeftPanel/Left";
import Right from "@/Pages/Home/RightPanel/Right";
import Middle from "@/Pages/Home/MiddlePanel/Middle";

export default {
    name: "Home",
    components: {
        Middle,
        Left,
        Right
    }
}
</script>

<style scoped>
.middle {
    max-width: inherit;
}
</style>
