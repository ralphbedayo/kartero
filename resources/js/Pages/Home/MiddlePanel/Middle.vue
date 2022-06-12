<template>
    <div class="h-full flex flex-col">
        <!--            header (conversation name and actions)-->
        <div class="p-2 flex justify-between border-b">
            <div class="flex flex-row">
                <div>
                    <img class="object-scale-down h-10 w-10 rounded-full" src="@img/user-splash.webp"
                         alt="user splash here">
                </div>
                <div class="ml-2">
                    <div>
                        <h3 class="font-semibold text-black">
                            Conversation Name
                        </h3>
                    </div>
                    <div>
                        <label class="text-gray-500">Active Status</label>
                    </div>
                </div>
            </div>

            <div>
                Actions
            </div>
        </div>

        <div class="flex flex-grow flex-col">
            <PanelBody/>
        </div>

    </div>

</template>

<script>

import PanelBody from './PanelBody/PanelBody';

export default {
    name: "Middle",
    components: {
        // Components
        PanelBody
    }
}
</script>

<style scoped>

</style>
