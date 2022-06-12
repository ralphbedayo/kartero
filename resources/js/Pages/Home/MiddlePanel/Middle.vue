<template>
    <div class="h-full flex flex-col">
        <!--            header (conversation name and actions)-->
        <div class="p-2 flex justify-between border-b">
            <div class="flex flex-row">
                <div>
                    <img class="object-scale-down h-10 w-10 rounded-full" src="../../../../img/user-splash.webp"
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

        <!--            body (messages)-->
        <div class="flex flex-grow flex-col">
            <div class="flex-grow">
                Body
            </div>

            <div class="max-h-fit border-t justify-end py-3">
                <!--            footer (writer/chat box and other actions)-->
                <div class="flex flex-row ">
                    <div class="p-1 mr-2">
                        <PaperClipIcon class="h-7 w-7" />
                    </div>
                    <div class="p-1 mr-2">
                        <PhotographIcon class="h-7 w-7" />
                    </div>
                    <div class="flex flex-grow flex-row p-1 mr-3 bg-gray-200 border-0 rounded-lg max-w-full w-full">

                        <div class="max-w-full w-full inline-block">
                            <MessageEditor/>
                        </div>
                        <div>
                            <EmojiHappyIcon class="h-7 w-7" />
                        </div>

                    </div>
                    <div class="p-1 mr-2">
                        <PaperAirplaneIcon class="h-7 w-7" />
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import {
    PaperClipIcon,
    PhotographIcon,
    PaperAirplaneIcon,
    EmojiHappyIcon
} from '@heroicons/vue/outline'

import MessageEditor from "./MessageEditor";

export default {
    name: "Middle",
    components: {
        // Hero Icons
        PaperClipIcon,
        PhotographIcon,
        PaperAirplaneIcon,
        EmojiHappyIcon,

        // Components
        MessageEditor
    }
}
</script>

<style scoped>

</style>
